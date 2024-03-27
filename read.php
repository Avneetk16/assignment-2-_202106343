<!DOCTYPE html>
<html>
<head>
    <title>View Employee - Avneet Kaur (202106343)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>View Employee - Avneet Kaur (202106343)</h1>
    <?php
    // Include configuration file
    include 'config.php';
    
    // Check if ID parameter is set
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the employee details from the database
        $sql = "SELECT * FROM employees WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the employee
            $row = $result->fetch_assoc();
            ?>
            <div class="proposal-details">
                <p><strong>Name:</strong> <?php echo $row["name"]; ?></p>
                <p><strong>Address:</strong> <?php echo $row["address"]; ?></p>
                <p><strong>Salary:</strong> <?php echo $row["salary"]; ?></p>
                <!-- Additional details can be added here -->
                <a href="index.php">Back to Employees</a>
            </div>
            <?php
        } else {
            echo "<p>No employee found with the given ID.</p>";
        }
    } else {
        echo "<p>ID parameter is missing.</p>";
    }

    // Close database connection
    $conn->close();
    ?>
</body>
</html>
