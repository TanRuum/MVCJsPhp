
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Tên sản phẩm</td>
                    <td>
                        <input type="text" name="tensp">
                    </td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td>
                        <input type="text" name="soluong">
                    </td>
                </tr>
                <tr>
                    <td>Xuất xứ</td>
                    <td>
                        <input type="text" name="xuatxu">
                    </td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td>
                        <input type="number" name="gia" id="">
                    </td>
                </tr>
                <tr>
                    <td>Ảnh sản phẩm</td>
                    <td>
                        <input type="file" name="anh">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Done" class="btn btn-primary" name="themsp">
        </form>
    </div>
</body>
</html>