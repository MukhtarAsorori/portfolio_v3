<div class="">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-border">
					<thead>
						<tr>
							<th>Project Name</th>
							<th>URL</th>
							<th>Code</th>
						</tr>
					</thead>
					<tbody>
						<?php if($projects):?>
							<?php foreach($projects as $project):?>
								<tr>
									<td><?php echo $project["project_name"];?> ( <?php echo $project["project_type"];?> )</td>
									<td><?php echo $project["project_url"];?></td>
									<td><?php echo $project["project_url_test"];?></td>
								</tr>
							<?php endforeach;?>
						<?php else:?>
							<tr>
								<td colspan="3">No project found</td>
							</tr>
						<?php endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>