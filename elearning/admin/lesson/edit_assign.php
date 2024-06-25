<?php
// Include your database connection and other required files

// Check if the lesson ID is provided in the URL
if (isset($_GET['id'])) {
    $assignId = $_GET['id'];

    // Fetch the lesson details from the database
    $qry = $conn->query("SELECT * FROM assignm WHERE id = '{$assignId}'");
    $row = $qry->fetch_assoc();
} else {
    // Redirect to the index page if the lesson ID is not provided
    //header("Location: ./index.php?page=lesson");
    exit();
}

// Check if the form is submitted for updating the lesson
if (isset($_POST['update_assign'])) {
    // Get the updated values from the form
    $title = $_POST['title'];
    $academic_year_id = $_POST['academic_year_id'];
    $subject_id = $_POST['subject_id'];
    $faculty_id = $_POST['faculty_id'];
    $types = $_POST['types'];
    $links = $_POST['link'];

    // Update the lesson in the database
    $conn->query("UPDATE assignm SET title = '{$title}', academic_year_id = '{$academic_year_id}', subject_id = '{$subject_id}', faculty_id = '{$faculty_id}', types = '{$types}', links = '{$links}' WHERE id = '{$assignId}'");

    // Redirect to the index page with the success message
    //header("Location: ./index.php?page=lesson");
    echo '<script>window.location.href = "./index.php?page=lesson/assignment";</script>';
    exit();
}
?>

<!-- Your HTML code for the lesson editing form -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Assignment/Question Papers</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
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
                <label>Faculty ID:</label>
                <input type="text" name="faculty_id" class="form-control" value="<?php echo $row['faculty_id']; ?>">
            </div>
            <div class="form-group">
                <label>Types:</label>
                <input type="text" name="types" class="form-control" value="<?php echo $row['types']; ?>">
            </div>
            <div class="form-group">
                <label>Link:</label>
                <input type="text" name="links" class="form-control" value="<?php echo $row['link']; ?>">
            </div>
            <button type="submit" name="update_assignn" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
