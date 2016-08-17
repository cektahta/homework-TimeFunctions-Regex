
<?php
$error = [];
if (!empty($_POST)){
    $year = isset($_POST['year'])? $_POST['year'] : '';
    $month = isset($_POST['month'])? $_POST['month'] : '';
    $day = isset($_POST['day'])? $_POST['day'] : '';
    $result = checkdate($month,$day,$year);
    if ($result == false) {
        $error[]  = "There is something wrong with the input";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <style>
        input {
            display: block;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <?php foreach($error as $e):?>
        <p style="color: red;"><?= $e ?></p>
    <?php endforeach;?>
    <label for="year">Year</label>
    <input type="text" id="year" name="year">
    <label for="year">Month</label>
    <input type="text" id="month" name="month">
    <label for="year">Day</label>
    <input type="text" id="day" name="day">
    <button type="submit">Click</button>
</form>
</body>
</html>
