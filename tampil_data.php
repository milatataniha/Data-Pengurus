<?php
    //memasukan file config
    include("config.php");
 
    //url untuk lihat data
    $url="http://localhost/restapi/tampil_data.php";
 
    //menyimpan hasil dalam variabel
    $data=http_request_get($url);
 
    //konversi data json ke array
    $hasil=json_decode($data,true);
 
?>
 
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/framework7-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler text-primary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation p-3 mb-2 bg-white text-dark"  >
    <span class="navbar-brand mb-0 h1" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b><i class="fa fa-bars" aria-hidden="true"></i>Menu</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item bg-light text-primary" href="tambah_data.php"><b><i class="fa fa-plus" aria-hidden="true"></i>Tambah Data</b></a>
          <a class="dropdown-item bg-light text-primary" href="home.php"><b><i class="fa fa-home" aria-hidden="true"></i>Home</b></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>

    <title>Data Pengurus</title>
</head>
<body style="background: #17202A ;">
<center>
    <div class="tampilku" style="width: 800px;
    background: url(5.jpg);
    margin: 100px auto;
    padding: 10px 20px 50px 20px;
    border-radius: 9px;
    box-shadow: 0px 10px 20px 0px #F1C40F;">
    <h1 style="color: #FDFEFE">Data Pengurus</h1>
    <table border="0" class="table table-striped" style="color: #FDFEFE">
        <thead class="thead-light">
        <tr class="table-secondary">
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>GENDER</th>
            <th>GAJI</th>
            <th style="text-align: center;">Action</th>
        </tr>
    </thead>
        <?php foreach($hasil as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['gaji']; ?></td>
            <td>
                <a href="edit_data.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: green;"></i>Edit</a> |
                <a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin nih mau dihapus???')"><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>Hapus</a>
            </td>
        </tr>
        <?php }  ?>
    </table>
    </div>
</center>
    
 
</body>
</html>