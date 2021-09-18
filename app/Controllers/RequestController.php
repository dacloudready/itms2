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


	public function AddRequest()
	{
		return view('requests/add');
	}

	public function save()
	{	
		$requestmodel = new RequestModel();

		$data['requestor'] = $this->request->getPost('requestor');
		$data['branch']= $this->request->getPost('branch');
		$data['department'] = $this->request->getPost('department');
		$data['subject'] = $this->request->getPost('subject');
		$data['category'] = $this->request->getPost('category');
		$data['priority'] = $this->request->getPost('priority');
		$data['description'] = $this->request->getPost('description');
		$data['search_tag'] = $this->request->getPost('search_tag');
		$data['status'] = 'New';

		if($data != null){
			try {
				$requestmodel->insert($data);
				return "true";
			} catch (\Throwable $th) {
				//throw $th;
				die('ERROR: AN ERROR OCCURED');
				return "false";
			}
		} 
	}
}
