<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RequestModel;
use App\Models\CommentsModel;
use App\Models\OrdersModel;

class RequestController extends BaseController
{

	function __construct()
	{
		helper('status');
	}

	public function index()
	{
		//
	}


	// View single item
	// @param $id
	public function view($id)
	{
		if(isset($id))
		{
			$req = new RequestModel();
			$data['request'] = $req->find($id);


			$comment = new CommentsModel();
			$data['comments'] = $comment->where('requestid', $data['request']->id)->FindAll();

			$orders = new OrdersModel();
			$data['orders'] = $orders->where('req_no', $data['request']->id)->findAll();
			
			return view('requests/view', $data);

			//return hellostatus();
		}
	}

	public function print($id)
	{
		if(isset($id))
		{
			$req = new RequestModel();
			$data['request'] = $req->find($id);

			return view('requests/print', $data);
		}
	}



}
