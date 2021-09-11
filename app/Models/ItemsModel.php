<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'asset_inventory';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

}
