	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/register_form.css'); ?>" />
	<div class="banner"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<a href="appointment/add/", class="btn btn-sm btn-info" style="margin: 30px 0px 20px ">Set An Appointment</a>
				<table class="table table-striped table-bordered table-hover table-condensed" style="margin-bottom: 50px">
					<thead>
						<tr class="bg-info">
							<th><center>ID</center></th>
							<th><center>Date</center></th>
							<th><center>Time</center></th>
							<th><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						<?php
							if( isset($appoint)){
								foreach ($appoint as $a) {
									echo '
										<tr>
											<td><center>'.$a['id'].'</center></td>
											<td><center>'.$a['adate'].'</center></td>
											<td><center>'.$a['atime'].'</center></td>
											<td>
												<a href="appointment/view/'.$a['id'].'" class="btn btn-xs btn-success"><center>View</center></a>
											</td>
										</tr>
									';
								}
							}
						?>					
					</tbody>
				</table>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</div>

