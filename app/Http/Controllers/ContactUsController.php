<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Repository\ContactUsRepository;
use App\Repository\SubscriptionRepository;
use App\Mail\AutoNotification;
use Session;

class ContactUsController extends Controller
{
    private $contact_us_repository;
    private $subscription_repository;

    public function __construct(
        ContactUsRepository $contact_us_repository,
        SubscriptionRepository $subscription_repository
    ) {
        $this->contact_us_repository = $contact_us_repository;
        $this->subscription_repository = $subscription_repository;
    }

    // 入力画面から確認画面へ
    public function confirm(Request $Request)
    {
        //session fixation攻撃の対策として、セッションキーを再生成(特にログイン機能実装後必要であるため)
        $Request->session()->regenerate();
        //requestの情報をsessionに保存
        Session::put('entry', $Request->all());
        // viewはRequestの内容を返す
        return view('company/get_in_touch_confirm')->with([
                'input' => $Request->all(),
            ]);
    }

    // 確認画面から送信
    public function send(Request $Request)
    {   
        $data = Session::get('entry');

        if($Request->get('action')== "戻る") {
            //入力画面に戻る
            return redirect('company/contact_us')
            ->withInput($data);
        }
        //ここで保存処理
        $this->contact_us_repository->saveContactUs($data);
        //さらに、subscriptionにチェックがあればsubscriptionテーブルにも保存
        if ($data['subscription'] == true) {
            // flow番号はsubscriptionの流入元を示す
            $flow = 1; // contact_usからの流入
            $this->subscription_repository->saveSubscription($data, $flow);
        }
        $this->sendEmail($data);
        return view('company/get_in_touch_complete');

    }

    private function sendEmail($data) {

        $name = $data['last_name'];
        $text = $data['message'];
        $to = [
            $data['email'],
            'chika.hirano@leverages.jp', //sumamoサポート側のアドレスにも送る
        ];

        Mail::to($to)->send(new AutoNotification($name, $text));
    }
}