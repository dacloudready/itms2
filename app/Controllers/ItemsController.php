<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\UsersController;
use App\Models\ItemsModel;
use App\Models\RequestModel;
use App\Models\CommentsModel;
use App\Models\OrdersModel;

class ItemsController extends BaseController
{

	function __construct()
	{
		helper('status');
	}

	

	// list all items 
	public function index()
	{
		$user = new UsersController();
		if(!$user->isLoggedIn()){
			return redirect()->to('/login');
		}

		$user_role = $user->get_role(session()->get('userid'));

		if( ($user_role == 'admin') OR ($user_role == 'superadmin') ) {
			$items = new ItemsModel();
			$data['items'] = $items->findAll();
			return view('items/index', $data);
		}else{
			$data['error_message'] = "Unauthorize Access: The list you are trying to view may not be found or forbidden.";
			return view('custom_errors/common', $data);
		}
	}

	// view single item details
	public function view($id)
	{

		$user = new UsersController();
		if(!$user->isLoggedIn()){
			return redirect()->to('/login');
		}

		if(isset($id))
		{
			$user_role = $user->get_role(session()->get('userid'));
			if( ($user_role == 'admin') OR ($user_role == 'superadmin') ) {
				$items = new ItemsModel();
				$data['items'] = $items->find($id);
				return view('items/view', $data);
			}else{
				$data['error_message'] = "Unauthorize Access: The item you are trying to view may not be found or forbidden.";
				return view('custom_errors/common', $data);
			}
		}
		
	}

}
