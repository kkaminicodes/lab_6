<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Muhammad Asyraf";
        $matricNumber = "AI240001";
        $course = "Bachelor of Computer Science (Software Engineering) with Honours";
        $yearOfStudy = "Year 2";
        $address = "Parit Raja, 86400 Batu Pahat, Johor";
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>