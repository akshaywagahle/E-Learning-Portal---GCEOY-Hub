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
    //header("Location: index.php");
    exit();
}
?>

<!-- Your HTML code to display the lesson details in a table -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Assignment/Question Paper Details</h3>
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
                <th>Faculty ID</th>
                <td><?php echo $row['faculty_id']; ?></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><?php echo $row['title']; ?></td>
            </tr>
            <tr>
                <th>Types</th>
                <td><?php echo $row['types']; ?></td>
            </tr>
            <tr>
                <th>Link</th>
                <td><?php echo $row['link']; ?></td>
            </tr>            
        </table>
    </div>
</div>
