<?=$this->extend('layout/default'); ?>

<?=$this->section('css') ;?>

<style>
	.dataTables_filter {
		margin-bottom:10px;
	}
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<h1 class="h3 mb-3">Active Orders</h1>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			
			<div class="card-body">
                <div style="overflow:auto; scroll:bottom">
                <table class="table table-hover" id="myTable">
                    <thead class="bg-dark text-white">
                        <th>#</th>
                        <th>PO #</th>
                        <th>Req #</th>
                        <th>PO Date</th>
                        <th>Supplier</th>
                        <th>Status</th>
                        <th>Remarks</th>
                    </thead>
                    <tbody>
                    <?php foreach($orders as $row): ?>
                        <tr class="">
                            <td class=""><?=$row->id;?></a></td>
                            <td><a href=""><?=$row->po_number;?></a></td>
                            <td><a href=""><?=$row->req_no;?></a></td>
                            <td><?=$row->po_date;?></td>
                            <td><?=$row->supplier;?></td>
                            <td><?=set_status($row->status);?></td>
                            <td><?=$row->remarks;?></td>
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