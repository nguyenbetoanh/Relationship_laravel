<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>HELLO WELCOM TO CLASS IT</h1>

    <input type="search" name="search" id="search">
    <button type="submit" onclick="search()">Tìm Kiếm</button><br><br>

    <a href="classIT/inputData">Thêm mới</a><br><br>

    @if (@empty($classIt))
        {{ 'Không có dữ liệu' }}
    @else
        <table border="1px">
            <thead>
                <tr>
                    <th>Mã lớp </th>
                    <th>Tên lớp</th>
                    <th>Giá khóa học</th>
                    <th>Trạng thái</th>
                    <th colspan="3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classIt as $item)
                    <tr>
                        <td>{{ $item->classId }}</td>
                        <td>{{ $item->className }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->classStatus ? 'Đang mở' : 'Dừng hoạt động' }}</td>
                        <td><a href="classIT/delete/{{ $item->classId }}">Xóa</a></td>
                        <td><a href="classIT/update/{{ $item->classId }}">Chỉnh sửa</a></td>
                        <td><a href="">Xem Chi tiết</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endempty
    <script>
        function search() {
            var click = document.getElementById("search").value;
            if (click)
                window.location.href = "http://127.0.0.1:8000/classIT/search/" + click;
            else
                window.location.href = "http://127.0.0.1:8000/classIT";
        }
    </script>
</body>

</html>
