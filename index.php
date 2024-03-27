<!DOCTYPE html>
<html>
<head>
    <title>Employee Management - Avneet Kaur (202106343)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Employee Management - Avneet Kaur (202106343)</h1>
        <a href="create.php">Add New Employee</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include configuration file
            include 'config.php';

            // Fetch employees from the database
            $sql = "SELECT * FROM employees";
            $result = $conn->query($sql);

            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "<td><a href='read.php?id=" . $row["id"] . "'>View</a> | ";
                echo "<a href='update.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="nike-info">
        <h2>About Nike</h2>
        <p>Nike, Inc. is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, apparel, equipment, accessories, and services.</p>
        <p>Founded in 1964 as Blue Ribbon Sports by Bill Bowerman and Phil Knight, Nike is now one of the world's largest suppliers of athletic shoes and apparel and a major manufacturer of sports equipment.</p>
        <img src="nike_logo.jpeg" alt="Nike Logo">
    </div>
</body>
</html>
