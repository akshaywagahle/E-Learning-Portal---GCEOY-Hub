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
    header("Location: index.php");
    exit();
}
?>

<!-- Your HTML code to display the lesson details in a table -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lesson Details</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td><?php echo $row['id']; ?></td>
            </tr>
            <tr>
                <th>Academic Year ID</th>
                <td><?php echo $row['academic_year_id']; ?></td>
            </tr>
            <tr>
                <th>Subject ID</th>
                <td><?php echo $row['subject_id']; ?></td>
            </tr>
            <tr>
                <th>Class ID</th>
                <td><?php echo $row['class_id']; ?></td>
            </tr>
            <tr>
                <th>Faculty ID</th>
                <td><?php echo $row['faculty_id']; ?></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><?php echo $row['title']; ?></td>
            </tr>
            <tr>
                <th>Description</th>
                <?php
                    $desc = html_entity_decode($row['description']);
                    $desc = stripslashes($desc);
                    $desc = strip_tags($desc);
                ?>
                <td><?php echo $desc; ?></td>
            </tr>
            <tr>
                <th>Types</th>
                <td><?php echo $row['types']; ?></td>
            </tr>
            <tr>
                <th>Links</th>
                <td><?php echo $row['links']; ?></td>
            </tr>
            <tr>
                <th>Images</th>
                <td><?php echo $row['images']; ?></td>
            </tr>
            <!-- Add other lesson columns as table rows here -->
        </table>
    </div>
</div>
