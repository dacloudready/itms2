<?=$this->extend('layout/default'); ?>

<?=$this->section('css') ;?>

<style>
	.dataTables_filter {
		margin-bottom:10px;
	}
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<h1 class="h3 mb-3">Item List</h1>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			
			<div class="card-body">
                <div style="overflow:auto; scroll:bottom">
                <table class="table table-hover" id="myTable">
                    <thead class="bg-dark text-white">
                        <th>#</th>
                        <th>Item</th>
                        <th>DR</th>
                        <th>PO</th>
                        <th>Serial #</th>
                        
                        <th>Model</th>
                        <th>Allocation</th>
                        <th>Remarks</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                    <?php foreach($items as $row): ?>
                        <tr class="">
                            <td class=""><a href="<?=base_url('item-view/'.$row->id);?>"><?=$row->id;?></a></td>
                            <td><?=$row->item;?></td>
                            <td><?=$row->dr_no;?></td>
                            <td><?=$row->doc_reference_no;?></td>
                            <td><?=$row->asset_no;?></td>
                            <td><?=$row->model_no;?></td>
                            <td><?=$row->branch?></td>
                            <td><?=$row->remarks;?></td>
                            <td><?php set_status($row->operational_status)?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                

			</div>
		</div>
	</div>
</div>
<?=$this->endSection(); ?>

<?=$this->section('js'); ?>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
<?=$this->endSection(); ?>