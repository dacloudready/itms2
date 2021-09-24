<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'worklog';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['action', 'requestid', 'userid'];

}
