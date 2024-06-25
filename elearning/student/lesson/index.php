<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif; ?>
<div class="card card-outline cardprimary w-fluid">
	<div class="card-header">
		<h3 class="card-title">Lessons</h3>
		<div class="card-tools">
			<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_lesson" href="javascript:void(0)"><i class="fa fa-plus"></i> Upload Assignment</a>
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
					<th>View</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i =1;
				$academic_year_id= $_settings->userdata('academic_id');
				$student_id= $_settings->userdata('student_id');
				$qry = $conn->query("SELECT * FROM assignm where types='Assignment'");
				// if($class_id->num_rows > 0):
				// $class_id = $class_id->fetch_array()['class_id'];
				// $qry = $conn->query("SELECT l.*,s.subject_code FROM lessons l inner join subjects s on s.id = l.subject_id where l.academic_year_id = '{$academic_year_id}' and l.id in (SELECT lesson_id from lesson_class where class_id = '{$class_id}') ");
				while($row=$qry->fetch_assoc()):
				?>
				
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $row['title'] ?></td>
					<td><a href="../faculty/uploads/<?php echo $row['link'] ?>"><?php echo $row['link'] ?></a></td>
					<td>
						<div class="btn-group">
		                    <button type="button" class="btn btn-default btn-block btn-flat dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
		                    	Action
		                      <span class="sr-only">Toggle Dropdown</span>
		                    </button>
		                    <div class="dropdown-menu" role="menu" style="">
	                    	 <a class="dropdown-item action_load" href="./?page=lesson/view_lesson&id=<?php echo $row['id'] ?>">Upload Assignment</a>
		                    </div>
		                </div>
					</td> 	
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