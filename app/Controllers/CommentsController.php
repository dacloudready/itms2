<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentsModel;

class CommentsController extends BaseController
{
	function add_comment()
	{
		$comment = new CommentsModel();
		$comment_data['action'] = $this->request->getPost('note');
		$comment_data['requestid'] = $this->request->getPost('requestid');
		$comment_data['userid'] = session()->get('userid');
		if($comment_data != null) 
		{
			try {
				$comment->insert($comment_data);
			} catch (\Throwable $th) {
				die($th->getMessage());
			}
		}
	}

	function getCommentsByRequest($requestid)
	{
		$comment = new CommentsModel();
		$results = $comment->findAll($requestid);
		if(count($results) != 0){
			$comments = $comment->where('requestid', $requestid)->findAll();
		}else{
			$comments = null;
		}

		return $comments;

	}
}
