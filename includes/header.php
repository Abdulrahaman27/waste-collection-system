<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Collection System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php 
        if(basename($_SERVER['PHP_SELF']) == 'dashboard.php' || basename($_SERVER['PHP_SELF']) == 'request.php' || basename($_SERVER['PHP_SELF']) == 'schedule.php' || basename($_SERVER['PHP_SELF']) == 'reports.php')
    :?>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <?php endif; ?>
</head>
<body>