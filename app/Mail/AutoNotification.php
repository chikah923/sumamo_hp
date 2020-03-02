<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AutoNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name='SUMAMO', $text='テスト')
    {
      $this->title = sprintf('%sさま、お問い合わせありがとうございます。', $name);
      $this->text = $text;
      $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_us_reply')
                    ->text('emails.contact_us_reply_plane')
                    ->subject($this->title)
                    ->with([
                        'text' => $this->text,
                        'name' => $this->name,
                      ]);
    }
}
