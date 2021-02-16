<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
        public function __construct()
        {
        	$this->middleware('auth', ['except' => 'logout']);
        }
	   public function index()
	   {
         $data['title'] = 'dashboard';
          $data['class'] = 'dashboard';
	   	 return view('admin_template',$data);
	   }
}
