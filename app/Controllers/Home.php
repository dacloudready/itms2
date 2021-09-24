<?php

namespace App\Controllers;

use App\Models\RequestModel;
use App\Controllers\UsersController;


class Home extends BaseController
{
	protected $user;

	function __construct()
	{
		$this->user = new UsersController();
		helper('status');
	}


	public function index(){
		return ($this->user->isLoggedIn()) ?  redirect()->to('/task-list') : view('login');
	}

	public  function login(){
		return ($this->user->isLoggedIn()) ?  redirect()->to('/') : view('login');
	}

	public  function logout()
	{
		session()->destroy();
		return view('login');
	}
}
