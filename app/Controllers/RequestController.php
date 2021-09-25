<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\UsersController;
use App\Controllers\CommentsController;
use App\Controllers\OrderController;
use App\Models\RequestModel;

class RequestController extends BaseController
{

	private $contUser;
	private $contRequest;
	private $contOrder;
	private $contComment;

	function __construct()
	{
		helper(['status', 'user', 'gw_view']);

		$this->contUser = new UsersController();
		$this->contRequest = new RequestModel();
		$this->contOrder = new OrderController();
		$this->contComment = new CommentsController();

	}

	
	public function index()
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		if($this->contUser->isAdmin())
		{
			$requests = $this->contRequest->where('status !=', 'Done')
							->where('subject =','Purchase')
							->findAll();
		}else{
			$requests = $this->contRequest->where('status !=', 'Done')
							->where('subject =','Purchase')
							->where('addedby', session()->get('username'))
							->findAll();
		}

		$data['requests'] = $requests;
		return view('requests/index', $data);
	}

	public function view($id)
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		if(isset($id))
		{
			$data = [
				'request' => $this->contRequest->find($id),
				'orders' => $this->contOrder->getOrdersByRequest($id),
				'comments' => $this->contComment->getCommentsByRequest($id)
			];

			return view('requests/view', $data);
		}
	}

	public function print($id)
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		if(isset($id)){
			$data['request'] = $this->contRequest->find($id);

			if(session()->get('username') == $data['request']->addedby){
				return view('requests/print', $data);
			}else{
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			}
		}
	}


	public function AddRequest()
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		return view('requests/add');
	}

	public function EditRequest($id)
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		$data['request'] = $this->contRequest->find($id);
		return view('requests/edit', $data);
	}

	public function LoadCategory($id)
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		$data = $this->contRequest->find($id);
		
		return json_encode($data);
	}

	
	public function save()
	{	
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		$requestmodel = new RequestModel();
		$data = [
			'requestor'		=>	$this->request->getPost('requestor'),
			'branch'		=>	$this->request->getPost('branch'),
			'department'	=>	$this->request->getPost('department'),
			'subject'		=>	$this->request->getPost('subject'),
			'category'		=>	$this->request->getPost('category'),
			'priority'		=>	$this->request->getPost('priority'),
			'description'	=>	$this->request->getPost('description'),
			'addedby'		=>	session()->get('username'),
			'search_tag'	=>	$this->request->getPost('search_tag'),
			'status'		=>	'New'
		];

		if($data != null){
			return ($requestmodel->insert($data)) ? 'true' : 'false';
		} 
	}

	public function UpdateRequest()
	{	
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		$requestmodel = new RequestModel();

		$data = [
			'requestor'		=>	$this->request->getPost('requestor'),
			'branch'		=>	$this->request->getPost('branch'),
			'department'	=>	$this->request->getPost('department'),
			'subject'		=>	$this->request->getPost('subject'),
			'category'		=>	$this->request->getPost('category'),
			'priority'		=>	$this->request->getPost('priority'),
			'description'	=>	$this->request->getPost('description'),
			'search_tag'	=>	$this->request->getPost('search_tag'),
			'status'		=>	$this->request->getPost('status'),
		];

		$request_id = $this->request->getPost('request_id');
		if($data != null){
			return ($requestmodel->update($request_id,$data)) ? 'true' : 'false';
		} 
	}

	public function AddRequestTask()
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		return view('task/add');
	}

	public function TaskList()
	{
		if(!$this->contUser->isLoggedIn()){
			return redirect()->to('/login');
		}

		$data['tasks'] = $this->contRequest->where('subject != "Purchase"')	
								->where('addedby', session()->get('username'))
								->findAll();
		return view('task/index', $data);
	}
}
