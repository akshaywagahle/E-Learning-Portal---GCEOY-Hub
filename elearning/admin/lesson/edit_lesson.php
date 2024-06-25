<?php
// Include your database connection and other required files

// Check if the lesson ID is provided in the URL
if (isset($_GET['id'])) {
    $lessonId = $_GET['id'];

    // Fetch the lesson details from the database
    $qry = $conn->query("SELECT * FROM lessons WHERE id = '{$lessonId}'");
    $row = $qry->fetch_assoc();
} else {
    // Redirect to the index page if the lesson ID is not provided
    //header("Location: ./index.php?page=lesson");
    exit();
}

// Check if the form is submitted for updating the lesson
if (isset($_POST['update_lesson'])) {
    // Get the updated values from the form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $academic_year_id = $_POST['academic_year_id'];
    $subject_id = $_POST['subject_id'];
    $class_id = $_POST['class_id'];
    $faculty_id = $_POST['faculty_id'];
    $ppt_path = $_POST['ppt_path'];
    $types = $_POST['types'];
    $links = $_POST['links'];
    $images = $_POST['images'];

    // Update the lesson in the database
    $conn->query("UPDATE lessons SET title = '{$title}', description = '{$description}', academic_year_id = '{$academic_year_id}', subject_id = '{$subject_id}', class_id = '{$class_id}', faculty_id = '{$faculty_id}', ppt_path = '{$ppt_path}', types = '{$types}', links = '{$links}', images = '{$images}' WHERE id = '{$lessonId}'");

    // Redirect to the index page with the success message
    //header("Location: ./index.php?page=lesson");
    echo '<script>window.location.href = "./index.php?page=lesson";</script>';
    exit();
}
?>

<!-- Your HTML code for the lesson editing form -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Lesson</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <?php
                    $desc = html_entity_decode($row['description']);
                    $desc = stripslashes($desc);
                    $desc = strip_tags($desc);
                ?>
                <textarea name="description" class="form-control"><?php echo $desc; ?></textarea>
            </div>
            <div class="form-group">
                <label>Academic Year ID:</label>
                <input type="text" name="academic_year_id" class="form-control" value="<?php echo $row['academic_year_id']; ?>">
            </div>
            <div class="form-group">
                <label>Subject ID:</label>
                <input type="text" name="subject_id" class="form-control" value="<?php echo $row['subject_id']; ?>">
            </div>
            <div class="form-group">
                <label>Class ID:</label>
                <input type="text" name="class_id" class="form-control" value="<?php echo $row['class_id']; ?>">
            </div>
            <div class="form-group">
                <label>Faculty ID:</label>
                <input type="text" name="faculty_id" class="form-control" value="<?php echo $row['faculty_id']; ?>">
            </div>
            <div class="form-group">
                <label>PPT Path:</label>
                <input type="text" name="ppt_path" class="form-control" value="<?php echo $row['ppt_path']; ?>">
            </div>
            <div class="form-group">
                <label>Types:</label>
                <input type="text" name="types" class="form-control" value="<?php echo $row['types']; ?>">
            </div>
            <div class="form-group">
                <label>Links:</label>
                <input type="text" name="links" class="form-control" value="<?php echo $row['links']; ?>">
            </div>
            <div class="form-group">
                <label>Images:</label>
                <input type="text" name="images" class="form-control" value="<?php echo $row['images']; ?>">
            </div>
            <!-- Add other lesson fields here -->
            <button type="submit" name="update_lesson" class="btn btn-primary">Update Lesson</button>
        </form>
    </div>
</div>
