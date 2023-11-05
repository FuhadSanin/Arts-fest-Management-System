<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="list">
        <h1>Participant List</h1>
        <table >
        <tr>
            <th>USN</th>
            <th>First Name</th>
            <th>DOB</th>
            <th>District</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
            $conn = new mysqli('localhost', 'root', '', 'fest');
            $query = mysqli_query($conn, "SELECT * FROM student ORDER BY firstname ASC");
            while ($row = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <td><?php echo $row['usn']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
        <?php
            }
        ?>
        </table>
    </div>
</body>
</html>
