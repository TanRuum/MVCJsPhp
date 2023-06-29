<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3eb3fcbde1.js" crossorigin="anonymous"></script>

  <style>
    td {
      display: table-cell;
      vertical-align: middle;
    }
    tr th:nth-child(n+4),tbody td:nth-child(n+4){
      text-align: center;
    }
    tr th:nth-child(1),tbody td:nth-child(1) {
      text-align: center;
    }
  </style>
</head>
<body>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th width="3%">#</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th width="5%">Edit</th>
            <th width="5%">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stt = 1;
        foreach ($data as $row) {
            ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['lv']; ?></td>
            <td><a href="<?php echo URL."/user/edit/${row['id']}"; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="<?php echo URL."/user/delete/${row['id']}"; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <?php
        $stt++;
        }
        ?>
    </tbody>
</table>

</body>
</html>