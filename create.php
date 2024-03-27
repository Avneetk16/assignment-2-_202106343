<!DOCTYPE html>
<html>
<head>
    <title>Create New Employee - Avneet Kaur (202106343)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Create New Employee - Avneet Kaur (202106343)</h1>
    <form action="create_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" step="0.01" min="0" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
