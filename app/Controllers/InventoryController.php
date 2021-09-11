<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DevicesModel;
use App\Models\ItemsModel;


class InventoryController extends BaseController
{
	// add items to inventory
	public function verifySerialNo()
	{
		if( $this->request->getPost() ){
			try {
				$serialno = $this->request->getVar('serialno');
				if($serialno != null)
				{
					$item = new ItemsModel();
					$items = $item->where('asset_no', $serialno)->findAll(); 
					$message = (count($items) != 0 || $items != NULL ) ? "serial_found" : "serial_not_found";
				}else{
					$message = "serial_empty";
				}
				return json_encode($message);

				// $device = new DevicesModel();
				// $post_data = [
				// 	'dev_serial'	=>	$this->request->getVar('serialno')
				// ];
				// $device->insert($post_data);
				// session()->setFlashdata('success','Item added successfully!');
				// return redirect()->to('/add-inventory');

				//return $serialno;

			} catch (\Throwable $th) {
				//throw $th;
				die($th->getMessage());
			}
		}else{
			return redirect()->to('/add-inventory');
		}
		
	}

	public function AddInvItem()
	{
		if( $this->request->getVar('serialno') )
		{
			$device = new DevicesModel();

			$post_data = [
				'dev_serial'	=>	$this->request->getVar('serialno')
			];
			
			$device->insert($post_data);
			session()->setFlashdata('success','Item added successfully!');
			return redirect()->to('/add-inventory');
		}
		return view('items/add-inventory');
	}

}
