<?php

namespace App\Models;

use CodeIgniter\Model;

class DevicesModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'devices';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['dev_serial'];

	
}

?>