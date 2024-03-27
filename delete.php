<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee - Avneet Kaur (202106343)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Delete Employee - Avneet Kaur (202106343)</h1>
    <?php
    include 'config.php';

    // Check if ID parameter is set
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the employee from database
        $sql = "SELECT * FROM employees WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output confirmation message and options
            $row = $result->fetch_assoc();
            ?>
            <div class="delete-confirmation">
                <p>Are you sure you want to delete the employee with name: <strong><?php echo $row["name"]; ?></strong>?</p>
                <a href="delete_process.php?id=<?php echo $id; ?>" class="yes">Yes</a>
                <a href="index.php" class="no">No</a>
            </div>
            <?php
        } else {
            echo "<p class='error-message'>No employee found with the given ID.</p>";
        }
    } else {
        echo "<p class='error-message'>ID parameter is missing.</p>";
    }
    ?>
</body>
</html>
