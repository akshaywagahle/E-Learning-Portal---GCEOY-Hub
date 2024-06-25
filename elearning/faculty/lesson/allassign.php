<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif; ?>
<div class="card card-outline cardprimary w-fluid">
	<div class="card-header">
		<h3 class="card-title">Lessons</h3>
		<div class="card-tools">
			<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_lesson" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New Lesson</a>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered table-compact table-stripped">
			<colgroup>
				<col width="5%">
				<col width="20%">
				<col width="20%">
				<col width="40%">
				<col width="15%">
			</colgroup>
			<thead>
			
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Department</th>
					<th>Branch</th>
					<th>Assignment</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i =1;

				$qry = $conn->query("SELECT * from assign_faculty ");
				while($row=$qry->fetch_assoc()):

					$dep = $row['subject_id'];
                    $branch = $row['academic_year_id'];
					$link=$row['links'];
				?>

				
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $row['title'] ?></td>

					<?php

					$qry = $conn->query("SELECT * from department where id = $dep ");
				while($rrow=$qry->fetch_assoc()):
					
				?>
					<td><?php echo $rrow['department'] ?></td>

				<?php endwhile; ?>

				<?php

					$qry = $conn->query("SELECT * from course where id = $branch ");
				while($rrow=$qry->fetch_assoc()):
					
				?>
					<td><?php echo $rrow['course'] ?></td>

				<?php endwhile; ?>

					<td><a href="../student\uploads\<?php echo $link ?>"><?php echo $row['links'] ?></a></td>

					
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.new_lesson').click(function(){
			location.href = "./?page=lesson/manage_lesson";
		})
		$('.action_edit').click(function(){
			uni_modal("Edit lesson","./lesson/manage_lesson.php?id="+$(this).attr('data-id'));
		})
	
		$('.action_delete').click(function(){
		_conf("Are you sure to delete lesson?","delete_lesson",[$(this).attr('data-id')])
		})
		$('table').dataTable();
	})
	function delete_lesson($id){
		start_loader()
		$.ajax({
			url:_base_url_+'lessones/Master.php?f=delete_lesson',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					location.reload()
				}
			}
		})
	}
</script>