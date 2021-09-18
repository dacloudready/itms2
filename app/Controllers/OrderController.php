<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdersModel;

class OrderController extends BaseController
{
	function __construct()
	{
		helper('status');
	}

	public function index()
	{
		$orders = new OrdersModel();
		$data['orders'] = $orders->where('status !=','Closed')->findAll();
		
		return view('orders/index', $data);
	}

	
}
