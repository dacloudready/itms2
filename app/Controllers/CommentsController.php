<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentsModel;

class CommentsController extends BaseController
{
	function add_comment(){

		$comment = new CommentsModel();

		$comment_data['action'] = $this->request->getPost('note');
		$comment_data['requestid'] = $this->request->getPost('requestid');

		//return $comment_data['requestid'];
		 if($comment_data != null) 
		 {
			 try {
			     $comment->insert($comment_data);
			 } catch (\Throwable $th) {
				 die($th->getMessage());
			 }

			 // set flash data = insert status
	 		return redirect()->to('/request-view/'.$comment_data['requestid']);
		 }
		
	}
}