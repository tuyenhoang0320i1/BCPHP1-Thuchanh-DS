<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #dddddd;
    }
    thumbnail {
        height: 60px;
        width: 100px;
        overflow: hidden;
    }
    thumbnail img {
        width: 100%;
    }
</style>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "img1.png"),
        "2" => array("ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "img2.png"),
        "3" => array("ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "img3.png"),
        "4" => array("ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "img4.png"),
        "5" => array("ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
            "anh" => "img5.png")
    );
    ?>
    <?php
    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><div class='thumbnail'><image src='" . $values['anh'] . "' width = '60px' height = '60px'/></div></td>";
        echo "</td>";
    }
    ?>
</table>

</body>
</html>