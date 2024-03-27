<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee - Avneet Kaur (202106343)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Employee - Avneet Kaur (202106343)</h1>
    <?php
    include 'config.php';
    
    // Check if ID parameter is set
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the employee from the database
        $sql = "SELECT * FROM employees WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output an HTML form pre-filled with the current data
            $row = $result->fetch_assoc();
            ?>
            <form action="update_process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required><br>
                <label for="salary">Salary:</label>
                <input type="number" id="salary" name="salary" step="0.01" min="0" value="<?php echo $row['salary']; ?>" required><br>
                <button type="submit">Update</button>
            </form>
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
