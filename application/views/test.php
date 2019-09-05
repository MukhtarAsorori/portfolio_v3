<div class="">
	<div class="gap"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-border">
					<thead>
						<tr>
							<th>Project Name</th>
							<th>Demo URL</th>
							<th>Status Code</th>
						</tr>
					</thead>
					<tbody>
						<?php if($projects):?>
							<?php foreach($projects as $project):?>
								<tr>
									<td><?php echo $project["project_name"];?></td>
									<td><?php echo $project["project_demo"];?></td>
									<td><?php echo $project["project_demo_test"];?></td>
								</tr>
							<?php endforeach;?>
						<?php else:?>
							<tr>
								<td>No project found</td>
							</tr>
						<?php endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>