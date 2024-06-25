<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif; ?>
<?php
$id = isset($_GET['id']) ? $_GET['id']: '';
if(!empty($id)){
    $qry = $conn->query("SELECT * from assignm where id = $id");
    foreach($qry->fetch_array() as $k =>$v){
        if(!is_numeric($k)){
            $$k = $v;
        }
    }
    //$description = stripslashes($description);
}
?>
<style>
#carousel_holder{
display: inline-flex;
justify-content:center;
background: #2f2e2e;
}    
#lesson_slides{
    width:calc(50%);
}
.carousel-control-prev {
    left: calc(-30%);
}
.carousel-control-next {
    right: calc(-30%);
}
</style>
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

     $filename = $_FILES["uploadfile"]["name"];
     $tempname = $_FILES["uploadfile"]["tmp_name"];
     $folder = "uploads/" . $filename;

     $title = $_POST['title'];
     $faculty_id = $_POST['faculty_id'];
     $academic_year_id = $_POST['academic_year_id'];
     $subject_id = $_POST['subject_id'];
     


     $db = mysqli_connect("localhost", "root", "", "elearning");

     // Get all the submitted data from the form
     $sql = "INSERT INTO assign_faculty (faculty_id,academic_year_id,title,subject_id,links) VALUES ('$faculty_id','$academic_year_id','$title','$subject_id','$filename')";

     // Execute query
     mysqli_query($db, $sql);

     // Now let's move the uploaded image into the folder: image
     if (move_uploaded_file($tempname, $folder)) {
          echo "<h3> Data uploaded successfully!</h3>";
     } else {
          echo "<h3> Failed to upload Data!</h3>";
     }
}
?>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title"></h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">


            <form method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
                <input type="hidden" name="faculty_id" value="<?php echo $faculty_id ?>">
                <!-- <input type="hidden" name="academic_year_id" value="<?php echo $academic_year_id ?>"> -->
                <div class="form-group">
                    <label for="" class="control-label">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo isset($title) ? $title : "" ?>" required="">
                </div>

                <div class="form-group">
                    <label for="subject_id" class="control-label">Department</label>
                    <select name="subject_id" id="subject_id" class="custom-select custom-select-sm select2" required="">
                        <option></option>
                        <?php 
                        $subject = $conn->query("SELECT * from department order by id asc");
                        while($row = $subject->fetch_assoc()):
                        ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['department'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="academic_year_id" class="control-label">Class</label>
                    <select name="academic_year_id" id="academic_year_id" class="custom-select custom-select-sm select2" required="">
                        <option></option>
                        <?php 
                        $subject = $conn->query("SELECT * from course order by id asc");
                        while($row = $subject->fetch_assoc()):
                        ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['course'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                    <input type="text" class="form-control" name="class_ids[]" value="1" hidden>
                
                
                <div class="form-group">
                    <label for="" class="control-label">Upload Document</label>
                    <input type="file" class="form-control" name="uploadfile" value="" accept="image/x-png,image/gif,image/jpeg">
                </div>

            
        </div>
    </div>
    <div class="card-footer">
        <div class="col-md-12">
            <button class="btn btn-flat btn-primary" type="submit" name="upload">Save</button>
            <a type="cutton" class="btn btn-flat btn-default" href="./?page=lesson/assignment">Cancel</a>
            </form>
        </div>
    </div>
</div>