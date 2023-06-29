<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3eb3fcbde1.js" crossorigin="anonymous"></script>
  <style>
    td {
      display: table-cell;
      vertical-align: middle;
    }

    tr th:nth-child(n+3),
    tbody td:nth-child(n+3) {
      text-align: center;
    }

    tr th:nth-child(1),
    tbody td:nth-child(1) {
      text-align: center;
    }

    #myInput {
      background-image: url('/css/searchicon.png');
      /* Add a search icon to input */
      background-position: 10px 12px;
      /* Position the search icon */
      background-repeat: no-repeat;
      /* Do not repeat the icon image */
      width: 100%;
      /* Full-width */
      font-size: 16px;
      /* Increase font-size */
      padding: 12px 20px 12px 40px;
      /* Add some padding */
      border: 1px solid #ddd;
      /* Add a grey border */
      margin-bottom: 12px;
      /* Add some space below the input */
    }
  </style>
</head>

<body>
  <!-- <form method="post">
        <input type="text" name="search_temp" placeholder="Search...">
        <button type="submit" class="btn btn-primary">Search</button>
</form> -->
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
  <table id="myTable" class="table table-striped table-bordered">
    <thead>
      <tr class="header">
        <th width="3%">#</th>
        <th>Ten San Pham</th>
        <th>So Luong</th>
        <th>Xuat xu</th>
        <th>Gia</th>
        <th>Image</th>
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
          <td>
            <?php echo $stt; ?>
          </td>
          <td>
            <?php echo $row['tensp']; ?>
          </td>
          <td>
            <?php echo $row['soluong']; ?>
          </td>
          <td>
            <?php echo $row['xuatxu']; ?>
          </td>
          <td>
            <?php echo $row['gia']; ?>
          </td>
          <td><img width="50px" src="<?php echo '../Views/images/' . $row['img']; ?>" alt=""></td>
          <td><a href="<?php echo URL . "/product/edit/${row['id']}"; ?>" class="btn btn-primary"><i
                class="fa-solid fa-pen-to-square"></i></a></td>
          <td><a href="<?php echo URL . "/product/delete/${row['id']}"; ?>" class="btn btn-danger"><i
                class="fa-solid fa-trash"></i></a></td>
        </tr>
        <?php
        $stt++;
      }
      ?>
    </tbody>
  </table>
  <script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
</body>

</html>