<?php
$date = "0:0:0 0-0-0";
$errors = [];
if (!empty($_POST)){
    $year = isset($_POST['year'])? $_POST['year'] : '';
    $month = isset($_POST['month'])? $_POST['month'] : '';
    $day = isset($_POST['day'])? $_POST['day'] : '';
    $hours = isset($_POST['hours'])? $_POST['hours'] : '';
    $minutes = isset($_POST['minutes'])? $_POST['minutes'] : '';
    $seconds = isset($_POST['seconds'])? $_POST['seconds'] : '';
    $year1 = isset($_POST['year1'])? $_POST['year1'] : '';
    $month1 = isset($_POST['month1'])? $_POST['month1'] : '';
    $day1 = isset($_POST['day1'])? $_POST['day1'] : '';
    $hours1 = isset($_POST['hours1'])? $_POST['hours1'] : '';
    $minutes1 = isset($_POST['minutes1'])? $_POST['minutes1'] : '';
    $seconds1 = isset($_POST['seconds1'])? $_POST['seconds1'] : '';
    $date = date("H:i:s M-d-Y",mktime($hours + $hours1,$minutes+$minutes1,$seconds+$seconds1,$month+$month1,$day+$day1,$year+$year1));

}





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <style>
.pos {
    display: block;
}
.fos {
    display: block;

}
form div{
    float: left;
    padding-right: 20px;
}
button {
    position: absolute;
    margin-top: 20px;
    margin-left: 170px;
}
table {
    position: absolute;
    top: 320px;
}
    </style>
</head>
<body>
<form action="" method="post">

    <div id="positive">
        <label class="pos" for="year">Year</label>
        <input type="text" id="year" name="year">
        <label class="pos" for="year">Month</label>
        <input type="text" id="month" name="month">
        <label class="pos" for="year">Day</label>
        <input type="text" id="day" name="day">
        <label class="pos" for="year">Hours</label>
        <input type="text" id="hours" name="hours">
        <label class="pos" for="year">Minutes</label>
        <input type="text" id="minutes" name="minutes">
        <label class="pos" for="year">Seconds</label>
        <input type="text" id="seconds" name="seconds">
        <button type="submit">Click</button>
    </div>
    <div id="add">
        <label class="fos" for="year">addYear</label>
        <input type="text" id="year" name="year1">
        <label class="fos" for="year">addMonth</label>
        <input type="text" id="month" name="month1">
        <label class="fos" for="year">addDay</label>
        <input type="text" id="day" name="day1">
        <label class="fos" for="year">addHours</label>
        <input type="text" id="hours" name="hours1">
        <label class="fos" for="year">addMinutes</label>
        <input type="text" id="minutes" name="minutes1">
        <label class="fos" for="year">addSeconds</label>
        <input type="text" id="seconds" name="seconds1">

    </div>
    <table border = "1" width="30%">
        <tr>
            <th><h2>Format</h2></th>
            <th>End Date</th>
        </tr>
        <tr>
            <th>H:i:s M-d-Y</th>
            <th><?php echo "$date"?></th>
        </tr>
    </table>

</form>
</body>
</html>