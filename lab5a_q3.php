<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
<?php

function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = $i * $multiplier;
    }
    return $results;
}


$multiplier = 2;
$multiplicationResults = multiplication($multiplier);
?>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($multiplicationResults as $num => $answer): ?>
        <tr>
            <td><?php echo $num + 1; ?></td>
            <td><?php echo $multiplier; ?></td>
            <td><?php echo $answer; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
