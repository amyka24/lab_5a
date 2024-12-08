<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
// Define variables for personal details
$name = "Nur Amyka Adnin Binti Che Rozaime";
$matric_number = "AI220281";
$course = "Software Engineering";
$year_of_study = "3rd Year";
$address = "K-G-5 APT. Sri Tulip, Jalan Tulip, Bukit Sentosa, 48300, Rawang, Selangor";
?>
<table border="1" cellpadding="5">
    <tr>
        <td><strong>Name</strong></td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td><strong>Matric Number</strong></td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td><strong>Course</strong></td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td><strong>Year of Study</strong></td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
</body>
</html>
