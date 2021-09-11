<?=$this->extend('layout/default'); ?>

<?=$this->section('css') ;?>
<style>
	.dataTables_filter {
		margin-bottom:10px;
	}
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<h1 class="h3 mb-3">Item Inventory</h1>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			<div class="card-body">
				<table class="table table-hover" id="invTable">
					<thead class="bg-dark text-white">
						<th>ID</th>
						<th>S/N</th>
						<th>MODEL</th>
                        <th>TYPE</th>
						<th>DESCRIPTION</th>
						<th>BRAND</th>
						<th>ALLOCATION</th>
                        <th>LOCATION</th>
						<th>STATUS</th>
					</thead>
					<tbody>
						<tr>
                            <td>1001</td>
                            <td>480584-FGRT-9575</td>
                            <td>MF237DW</td>
                            <td>Network Printer</td>
                            <td>Canon MF237DW</td>
                            <td>CANON</td>
                            <td>Nissan-Mantrade</td>
                            <td>HR</td>
                            <td>Functional</td>
                        </tr>
                        <tr>
                            <td>1002</td>
                            <td>432568-VGWE-5781</td>
                            <td>MF237DW</td>
                            <td>Network Printer</td>
                            <td>Canon MF237DW</td>
                            <td>CANON</td>
                            <td>Nissan-Mantrade</td>
                            <td>Cashier</td>
                            <td>Functional</td>
                        </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?=$this->endSection(); ?>

<?=$this->section('js'); ?>
<script>
	$(document).ready( function () {
    	$('#invTable').DataTable();
	});
</script>

<?=$this->endSection(); ?>