<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'purchase_order';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['po_number','po_date','company','delivery_address','supplier','po_items','total','remarks','req_no','status'];

}
