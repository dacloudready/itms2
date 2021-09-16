<?=$this->extend('layout/default'); ?>

<?=$this->section('css') ;?>
<style>
	.dataTables_filter {
		margin-bottom:10px;
	}

    .table>:not(caption)>*>* {
        border-bottom-width: 0;
        padding: .50rem; 
    }

    .alert{
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding:15px;
        border-radius: 3px;
    }

    .alert-x {
        float:right;
        cursor: pointer;
    }

    #serial_error {
        color: red;
        font-size: .90em;
        display: none;
    }
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<?php if( session()->getFlashdata('success') ): ?>
    <div class="alert alert-dismissible fade show mb-3" role="alert">
        <?=session()->getFlashdata('success');?>
        <span data-bs-dismiss="alert" aria-label="Close" class="alert-x">&times;</span>
    </div>
<?php endif;?>
<h1 class="h3 mb-3">Add to Inventory</h1>
<div class="row">
	<div class="col-lg-12 col-sm-12">
		<div class="card card-default">
			<div class="card-body">
                 
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p><strong>DEVICE DETAILS</strong></p>
                    </div>
                    <!-- <div class="px-2">
                        <a href="#"><i class="align-middle" data-feather="edit"></i></a>
                    </div> -->
                </div>

                <form method="POST" id="frmAddInventory" action="<?=base_url('add-inventory')?>">  
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="30%"><strong>Serial No.:</strong></td>
                                        <td  width="70%">
                                        <input type="text" name="serialno" id="txtserialno" class="form-control w-75" required/>
                                        <span id="serial_error">Serial number not found...</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Device ID:</strong></td>
                                        <td>
                                        <input type="text" name="devid" id="txtdevid" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Device Name</strong></td>
                                        <td>
                                        <input type="text" name="devname" id="txtdevname" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Processor:</strong></td>
                                        <td>
                                        <input type="text" name="devcpu" id="txtdevcpu" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Installed RAM:</strong></td>
                                        <td>
                                        <input type="text" name="devram" id="txtdevram" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Storage:</strong></td>
                                        <td>
                                        <input type="text" name="devstorage" id="txtdevstorage" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td  width="30%"></td>
                                        <td  width="70%"><div class="mb-4 p-1"></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Operating System:</strong></td>
                                        <td>
                                        <input type="text" name="os" id="txtos" class="form-control devInput  "  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>OS Build:</strong></td>
                                        <td>
                                        <input type="text" name="osbuild" id="txtosbuild" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>MAC Addresss:</strong></td>
                                        <td>
                                        <input type="text" name="macaddr" id="txtmacaddr" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Assigned to:</strong></td>
                                        <td>
                                        <input type="text" name="devuser" id="txtdevuser" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Department:</strong></td>
                                        <td>
                                        <input type="text" name="department" id="txtdepartment" class="form-control devInput"  />
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
               
                    <div class="px-2 d-flex">
                        <div class="flex-grow-1 "></div>
                        <div class="px-2">
                            <button class="btn btn-md btn-success align-middle" id="btnSubmit"><i class="align-middle" data-feather="save"></i> SUBMIT</button>
                        </div>
                    </div>
                </form>
			</div> 
           
		</div>
	</div>
</div>
<?=$this->endSection(); ?>

