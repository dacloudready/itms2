<?=$this->extend('layout/default'); ?>

<?=$this->section('css'); ?>
<style>
    #txtArea{
        resize:none;
        border: none;
        background:transparent;
    }
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			<div class="card-body">
            <form id="OrderForm" method="Post">
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p class="h4 mb-4 text-muted"><strong>Puchase Order No : <?=$orders->po_number?></strong></p>
                    </div>
                    <?php if($orders->status != 'Closed'): ?>
                    <div class="px-2">
                        <a href=""><i class="align-middle" data-feather="edit"></i></a>
                    </div>
                    <div class="px-2">
                        <a href="#" id="closeOrder"><i class="align-middle" title="Close PO" data-feather="check-square"></i></a>
                    </div>
                    <?php endif?>
                </div>
                <table class="table table-bordred">
                    <thead class="bg-dark text-light">

                        <th colspan="2">ORDER DETAILS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="20%"><strong>Vendor</strong></td>
                            <td width="80%" id="txtRequestedBy"><?=$orders->supplier?></td>
                        </tr>
                        <tr>
                            <td><strong>DATE:</strong></td>
                            <td><?=date_format(date_create($orders->po_date),"m-d-Y")?></td>
                        </tr>

                        <tr>
                            <td><strong>BILL TO:</strong></td>
                            <td><?=$orders->company?></td>
                        </tr>

                        <tr>
                            <td><strong>DELIVERY ADDRESS:</strong></td>
                            <td><?=$orders->delivery_address?></td>
                        </tr>

                        <tr>
                            <td><strong>REQ #:</strong></td>
                            <td><?=$orders->req_no?></td>
                        </tr>

                        <tr>
                            <td><strong>STATUS:</strong></td>
                            <td><?=set_status($orders->status)?></td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL AMOUNT</strong></td>
                            <td>
                               <?=number_format($orders->total,'2')?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="px-2"> 
                    <p><strong>DESCRIPTION:</strong></p>
                    <textarea class="form-control" id="txtArea" cols="30" rows="6" disabled><?=$orders->po_items?></textarea>
                </div>
                
               
                <hr>
                <div class="px-2"> 
                    <p><strong>REMARKS:</strong></p>
                    <textarea class="form-control" id="txtArea" cols="50" rows="6" disabled><?=$orders->remarks?></textarea>
                </div>
                
                <small><em>tags: </em></small>
                <input type="hidden" id="orderID" name="orderID" value="<?=$orders->id?>">
                </form>
            </div>
        </div>
    </div>
</div>



<?=$this->endSection(); ?>
<?=$this->Section('js');?>
<script>
    $(document).ready(function(){
        $('#closeOrder').click(function(){
            let closedOrder = confirm('are you sure you want to closed this PO?');
            let orderID = $('#orderID').val();
            let url = "<?=base_url('close-order')?>/"+ orderID; 

            if(closedOrder == true){
                $.post(url,{ orderID: orderID }, function(data){
                    $("#OrderForm").load(location.href + " #OrderForm" );
                });
            } 
        });
    });
</script> 

<?=$this->EndSection();?>


