<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\UsersController;
use App\Models\OrdersModel;

class OrderController extends BaseController
{
	function __construct()
	{
		helper('status');
	}

	public function index()
	{
		$user = new UsersController();
		if(!$user->isLoggedIn()){
			return redirect()->to('/login');
		}
		
		$user_role = $user->get_role(session()->get('userid'));

		if( ($user_role == 'admin') OR ($user_role == 'superadmin') ) {
			$orders = new OrdersModel();
			$data['orders'] = $orders->where('status !=','Closed')->findAll();
			return view('orders/index', $data);
		}else{
			$data['error_message'] = "Unauthorize Access: The list you are trying to view may not be found or forbidden.";
			return view('custom_errors/common', $data);
		}
		
	}


	public function getOrdersByRequest($requestno)
	{
		$order = new OrdersModel();
		$orders = $order->where('req_no', $requestno)->findAll();
		return (count($orders)!= 0) ? $orders : NULL;
	}

	
}
