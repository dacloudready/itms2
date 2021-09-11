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


	public function index()
	{
		// $user->isLoggedIn(), 
		// return dashboard else, login
		// if($this->user->isLoggedIn()) 
		// {
			try {
				$req = new RequestModel();
				$data['requests'] = $req->where("status != 'Done'")->findAll();

				return view('requests/index', $data);
			} catch (\Throwable $th) {
				//throw $th;
				die($th->getMessage());
			}
		// }
		// else
		// {
		// 	return view('login');
		// 	//return 'please login to continue...';
		// }
		
	}

	public function dashboard()
	{
		// if($this->user->isLoggedIn()) 
		// {
		// 	return 'this is dashboard';
		// }
		// else
		// {
		// 	return redirect()->to('login');
		// 	//return 'please login to continue...';
		// }
	}


	public  function login()
	{
		if($this->user->isLoggedIn()) 
		{
			return redirect()->to('dashboard');
		}
		else
		{
			return view('login');
		}
	}

	public  function logout()
	{
		session()->destroy();
		return view('login');
	}
}
