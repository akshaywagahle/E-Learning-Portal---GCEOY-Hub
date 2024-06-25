<?php
if ($_settings->chk_flashdata('success')) :
?>
    <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
    </script>
<?php
endif;


function deleteLesson($conn, $assignId) {
    $conn->query("DELETE FROM assignm WHERE id = '{$assignId}'");
    // Refresh the page to reflect the updated data
    echo '<script>window.location.href = "./index.php?page=lesson/assignment";</script>';
    exit();
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $lessonId = $_GET['id'];
    if ($action == 'delete') {
        deleteLesson($conn, $lessonId);
    }
}

?>

<div class="card card-outline card-primary w-fluid">
    <div class="card-header">
        <h3 class="card-title">Assignments/Question Papers</h3>
        <div class="card-tools">
            <a class="btn btn-block btn-sm btn-default btn-flat border-primary new_assignment" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New Assignment/Paper</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-compact table-stripped">
            <colgroup>
                <col width="5%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
				<col width="20%">
                <col width="15%">
            </colgroup>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Type</th>
					<th>Links</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $faculty_id = $_settings->userdata('faculty_id');
                $qry = $conn->query("SELECT * FROM assignm WHERE faculty_id = '{$faculty_id}'");
                while ($row = $qry->fetch_assoc()) :
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td>
                                <?php
                                    $subjectId = $row['subject_id'];
                                    if ($subjectId == 2) {
                                        echo "Computer Engineering";
                                    } elseif ($subjectId == 3) {
                                        echo "Civil Engineering";
                                    }elseif ($subjectId == 6) {
                                        echo "Mechanical Engineering";
                                    }elseif ($subjectId == 4) {
                                        echo "Electrical Engineering";
                                    }elseif ($subjectId == 5) {
                                        echo "Electronics Engineering";
                                    } else {
                                        echo $subjectId; // Display the subject_id if it doesn't match any condition
                                    }
                                ?>
                        </td>
						<td><?php echo $row['types'] ?></td>
                        <td><span class="truncate"><?php echo $row['link'] ?></span></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-block btn-flat dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                    Action
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="index.php?page=lesson/view_assign&id=<?php echo $row['id'] ?>">View</a>
                                    <a class="dropdown-item" href="index.php?page=lesson/edit_assign&id=<?php echo $row['id'] ?>">Edit</a>
                                    <a class="dropdown-item" href="index.php?page=lesson/assignment&action=delete&id=<?php echo $row['id'] ?>">Delete</a>
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
    $(document).ready(function() {
        $('.new_assignment').click(function() {
            location.href = "index.php?page=lesson/add_assignment";
        });

        $('table').dataTable();
    });
</script>
