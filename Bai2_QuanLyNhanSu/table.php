<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
$Employee = new EmployeeManager();
$data = $Employee->loadData()
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<table class="table table-striped table table-hover  ">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Job</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Nguyễn</td>
        <td>Thu Hà</td>
        <td>10/10/2003</td>
        <td>Phú Thọ</td>
        <td>Chủ tịch</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Đàm</td>
        <td>Ngọc Xơn</td>
        <td>08/12/2001</td>
        <td>Hà Nội</td>
        <td>Vợ chủ tịch</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Nguyễn</td>
        <td>Tiến Lực</td>
        <td>03/07/1998</td>
        <td>Phú Thọ</td>
        <td>Thư ký chủ tịch</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Hoàng</td>
        <td>Ngọc Nam</td>
        <td>23/10/1987</td>
        <td>Hà Nội</td>
        <td>Giám đốc</td>
    </tr>
    </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>

