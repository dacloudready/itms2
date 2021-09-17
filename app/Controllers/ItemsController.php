<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
		$items = new ItemsModel();
		$data['items'] = $items->findAll();
		return view('items/index', $data);
	}

	// view single item details
	public function view($id)
	{
		if(isset($id))
		{
			//$id = $this->input->get('id');
			$items = new ItemsModel();
			$data['items'] = $items->find($id);
			
			//$data['id']	= $id;
			return view('items/view', $data);
		}
		
	}

}
