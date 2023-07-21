<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ส่งข้อมูลฟอร์ม</title>
</head>

<body>
    <h4>#หน้าส่งข้อมูลฟอร์ม</h4>
    <form action="rec.php" method="post">
        รหัสประจำตัว <input type="text" name="fid"> <br>
        ชื่อ <input type="text" name="fname"> <br>
        นามสกุล <input type="text" name="fsname"> <br>
        <select name="fclass">
            <option value="ม.1">ชั้นมัธยมศึกษาปีที่ 1</option>
            <option value="ม.2">ชั้นมัธยมศึกษาปีที่ 2</option>
            <option value="ม.3">ชั้นมัธยมศึกษาปีที่ 3</option>
            <option value="ม.4">ชั้นมัธยมศึกษาปีที่ 4</option>
            <option value="ม.5">ชั้นมัธยมศึกษาปีที่ 5</option>
            <option value="ม.6">ชั้นมัธยมศึกษาปีที่ 6</option>
        </select> <br>
        <input type="submit" value="ตกลง">
    </form>
</body>
</html>