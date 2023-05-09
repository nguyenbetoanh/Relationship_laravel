<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cập nhật lớp </h1>
    <form action="{{$updateClassIt->classId}}" method="POST">
        @csrf
        <label for="id">Mã Lớp</label> <br>
        <input type="text" name="dclassName" id="id" value="{{ $updateClassIt->classId }}" readonly/> <br>
        <label for="name">Tên Lớp</label> <br>
        <input type="text" name="className" id="name" value="{{ $updateClassIt->className }}"/> <br>
        <label for="pri">Giá học</label> <br>
        <input type="text" name="price" id="pri" value="{{ $updateClassIt->price }}"/><br>

        <label for="sta">Chọn trạng thái lớp</label><br>
        @if($updateClassIt->classStatus)
        <input name="classStatus" type="radio" value="1" checked/>Đang mở <br>
        <input name="classStatus" type="radio" value="0"/>Dừng hoạt động <br> <br>
        @else
        <input name="classStatus" type="radio" value="1" />Đang mở <br>
        <input name="classStatus" type="radio" value="0" checked/>Dừng hoạt động <br> <br>
        @endIf
        <input type="submit" value="Thêm mới" name="submit"/>
    </form>
</body>
</html>