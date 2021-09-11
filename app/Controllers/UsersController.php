<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
	
	function isLoggedIn()
	{
		return session()->has('logged_in') ? true : false;
	}
}
