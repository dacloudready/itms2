<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UsersController extends BaseController
{

	private $user;

	function __construct()
	{
		$this->user = new UsersModel();
	}
	

	// this will return TRUE if the current user is logged in or not
	function isLoggedIn()
	{
		return session()->has('logged_in') ? true : false;
	}


	// this will return TRUE if the current user is ad admin or just an ordinary user
	function isAdmin()
	{
		$admin_rights = array('admin', 'superadmin');
		$logged_user = session()->get('username');
		return (in_array($logged_user, $admin_rights)) ? TRUE : FALSE;
	}
	
	function get_role($userid)
	{
		$user_count = $this->user->find($userid);
		if( count($user_count) != 0) {
			$user_data = $this->user->where('id', $userid)->findAll();
			$user_role = $user_data[0]['role'];
		}
		else{
			return 0;
		}
		return $user_role;
	}
}
