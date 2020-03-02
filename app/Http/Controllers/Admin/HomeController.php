<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use App\Permission;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
    	//abort_if(Gate::denies('admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('dashboard.home');
    }
}
