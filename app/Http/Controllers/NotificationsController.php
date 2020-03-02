<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Gate;
use App\Permission;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class NotificationsController extends Controller
{
    public function index()
    {
    	$Notifications = auth()->user()->notifications()->get();

    	return $Notifications;
    }

    public function unreadlist()
    {
    	$newNotifications = auth()->user()->unreadNotifications()->get();

    	return $newNotifications;
    }

    public function markalltoasted()
    {
        auth()->user()->notifications()->update(['toasted_at' => now()]);
    }

    public function markallread()
    {
    	auth()->user()->unreadNotifications->markAsRead();
    }
}
