<?=$this->extend('layout/default'); ?>

<?=$this->section('css') ;?>

<style>
	.dataTables_filter {
		margin-bottom:10px;
	}
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<h1 class="h3 mb-3">Active Request</h1>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			
			<div class="card-body">
				<table class="table table-hover" id="rqTable">
					<thead class="bg-dark text-white">
						<th>ID</th>
						<th>DATE</th>
						<th>BY</th>
						<th>REQUEST</th>
						<th>CATEGORY</th>
						<th>TAG</th>
						<th>STATUS</th>
					</thead>
					<tbody>
						<?php foreach($requests as $request):?>
							<tr>
								<td class=""><a href="<?=base_url('/request-view/'.$request->id);?>"><?=$request->id;?></a></td>
								<td><?=date_format(date_create($request->request_date),"m/d/Y H:i A");?></td>
								<td><?=$request->requestor;?></td>
								<td><?=$request->description;?></td>
								<td><?=$request->subject;?></td>
								<td><?=$request->search_tag?></td>
								<td><?=set_status($request->status);?></td>
							</tr>
						<?php endforeach; ?>
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
    	$('#rqTable').DataTable();
	});
</script>

<?=$this->endSection(); ?>