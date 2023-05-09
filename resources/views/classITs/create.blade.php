<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Nhập thông tin để tạo mới class </h1>
    <form action="create" method="POST">
        @csrf
        <label for="name">Tên Lớp</label> <br>
        <input type="text" name="className" id="name"/> <br>
        <label for="pri">Giá học</label> <br>
        <input type="text" name="price" id="pri"/><br>
        <label for="sta">Chọn trạng thái lớp</label><br>
        <input name="classStatus" type="radio" value="1" id="sta"/>Đang mở <br>
        <input name="classStatus" type="radio" value="0"/>Dừng hoạt động <br> <br>
        <input type="submit" value="Thêm mới" name="submit"/>
    </form>
</body>

</html>
