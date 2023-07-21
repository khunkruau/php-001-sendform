<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รับข้อมูลฟอร์ม.</title>
</head>

<body>
<h4>#หน้ารับข้อมูลฟอร์ม</h4>
    <?php
        $rid = $_POST["fid"];
        $rname = $_POST["fname"];
        $rsname = $_POST["fsname"];
        $rclass = $_POST["fclass"];
    ?>
    <b>ยินดีต้อนรับคุณ</b> <?php 
            echo $rid; 
            echo " ".$rname." ". $rsname;
            echo "<br><b>ระดับชั้น</b>&nbsp;&nbsp".$rclass; 
    ?>
    <br><br>
    ด้วยความยินดี
</body>
</html>