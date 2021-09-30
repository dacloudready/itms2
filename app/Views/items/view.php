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

				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Device No: GW-<?=$items->id?> </h1>
						<a class="badge bg-success text-white ms-2"> <?=$items->operational_status?></a>
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Item Details</h5>
								</div>
								<div class="card-body ">
									<img src="http://192.168.2.250:8081/itms2/public/img/avatars/device.jpg" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">Item</h5>
									<div class="text-muted mb-2"><?=$items->item?></div>

								</div>
								
                                
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Description</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="list" class="feather-sm me-1"></span> <?=$items->description?></li>
									</ul>
								</div>

								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Serial #</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="list" class="feather-sm me-1"></span> <?=$items->asset_no?></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Allocation</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> <?=$items->branch?></li>
									</ul>
								</div>
                                <hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">PO Details</h5>
									<ul class="list-unstyled mb-0">
                                      <li class="mb-1">Date Acquired: <?=$items->date_acquired?></li>
										<li class="mb-1">PO Number: <?=$items->doc_reference_no?></li>
                                        <li class="mb-1">DR Number: <?=$items->dr_no?></li>
                                        
									</ul>
								</div>
							</div>
						</div>

						

						<div class="col-md-8 col-xl-9">
						<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">SPECIFICATIONS</h5>
								</div>
								<div class="card-body h-100">
									<table class="table table-bordred">
										<thead class="bg-dark text-light">
											<th colspan="2" >DETAILS</th>
										</thead>
										<tbody>
											<tr>
												<td width="30%"><strong>Device ID:</strong></td>
												<td width="70%"></td>
											</tr>
											<tr>
												<td><strong>Device Name:</strong></td>
												<td></td>
											</tr>
											<tr>
												<td><strong>Processor:</strong></td>
												<td></td>
											</tr>
											<tr>
												<td><strong>Installed RAM:</strong></td>
												<td></td>
											</tr>
											<tr>
												<td><strong>Storage:</strong></td>
												<td></td>
											</tr>
											<tr>
												<td><strong>Operating System:</strong></td>
												<td></td>
											</tr>
											<tr>
												<td><strong>OS Build:</strong></td>
												<td></td>
											</tr>
											
										</tbody>
									</table>
								</div>
								
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">USER</h5>
								</div>
								<div class="card-body h-100">
									<table class="table table-bordred">
										<thead class="bg-dark text-light">
											<th>DETAILS</th>
											<th>VALUE</th>
										</thead>
										<tbody>
											<tr>
												<td width="30%"><strong>Assigned To:</strong></td>
												<td width="70%"></td>
											</tr>
											<tr>
												<td><strong>Department:</strong></td>
												<td></td>
											</tr>
											<tr>
												<td><strong>Use:</strong></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Remarks</h5>
								</div>
								<div class="card-body h-100">
									<table class="table table-bordred">
										<thead class="bg-dark text-light">
											<th>DETAILS</th>
											<th>VALUE</th>
										</thead>
										<tbody>
											<tr>
												<td width="30%"><strong>Message</strong></td>
												<td width="70%"></td>
											</tr>
											
										</tbody>
									</table>
								</div>

							<!--<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Repair History</h5>
								</div>
								<div class="card-body h-100">
									<div class="d-flex align-items-start">
									<table class="table table-bordred">
										<thead class="bg-dark text-light">
											<th>DATE</th>
											<th>DIAGNOSE</th>
											<th>REMARKS</th>
										</thead>
										<tbody>
											
											<tr>
												<td>09-10-2021</td>
												<td>No Display and no Power</td>
												<td>done fixing the problem because of the flex not tighten install</td>
											</tr>
										</tbody>
									</table>
									</div>
								</div>
							</div>


							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Remarks</h5>
								</div>
								<div class="card-body h-100">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<small class="float-end text-navy">22hrs ago</small>
											<strong>Junell Dosdos</strong> posted on <strong>September 09, 2021</strong><br />
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
                                                <?=$items->remarks?>
											</div>
										</div>
									</div>

                                    <hr />
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<small class="float-end text-navy">16hrs ago</small>
											<strong>Jericho Vivas</strong> posted on <strong>September 10, 2021</strong><br />
											<small class="text-muted">Today 12:10 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												New Allocation of Item used by Charlie Sanipa
											</div>
										</div>
									</div>
								</div>
								
							</div>-->
							
						</div>
						
					</div>

				</div>


<?=$this->endSection(); ?>

