<?php
    include("config.php");
 
    //jika tombol simpan di klik
    if(isset($_POST['simpan'])) {
 
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['gender'];
        $gaji=$_POST['gaji'];
 
        //membuat data array data yang kirim
        $data=array(
            'id' => $id,
            'nama' => $nama,
            'alamat' => $alamat,
            'gender' => $gender,
            'gaji' => $gaji
        );
 
        //url untuk tambah data
        $url="http://localhost/restapi/tambah_data.php";
 
        //menyimpan hasil dalam variabel
        $hasil=http_request_post($url,$data);
        //memunculkan pesan 
        // var_dump($hasil);
        header('location: tampil_data.php');
    }
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
            <a class="dropdown-item bg-light text-primary" href="tampil_data.php"><b><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tampil Data</b></a>
          <a class="dropdown-item bg-light text-primary" href="home.php"><b><i class="fa fa-home" aria-hidden="true"></i>Home</b></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>

    <title>Tambah Data dengan cURL</title>
</head>
<body style="background: #17202A ;">
    <center>
    <div class="isidata" style="width: 600px;
    background: url(5.jpg);
    margin: 100px auto;
    padding: 10px 20px 50px 20px;
    border-radius: 9px;
    box-shadow: 0px 10px 20px 0px #F1C40F;">
    <h1 style="color: #FDFEFE;">Input Data Pengurus</h1>
    
<form method="POST"> 

    <table border="0" style="color: #FDFEFE;">
    <tr>
        <td>ID </td>
        <td> </td>
        <td><input type="text" class="form-control" name="id" required="required"></td>
    </tr>
    <tr>
        <td>Nama </td>
        <td> </td>
        <td><input type="text" class="form-control" name="nama" required="required"></td>
    </tr>
    <tr>
        <td>Alamat </td>
        <td> </td>
        <td><textarea name="alamat" class="form-control" required="required" ></textarea></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td> </td>
        <td> <input type="radio" value="L" name="gender" required="required" >Laki-laki
<input type="radio" value="P" name="gender" required="" >Perempuan</td>
    </tr>
    <tr>
        <td>Gaji </td>
        <td> </td>
        <td><input type="number" class="form-control" name="gaji" required="required" ></td>
    </tr>
    <tr>
        <td><button type="submit" name="simpan" class="btn btn-outline-secondary"><i class="fa fa-floppy-o" aria-hidden="true"></i>       Save</button></td>
        <td> </td>
        <td><button type="reset" class="btn btn-outline-warning"><i class="fa fa-trash-o" aria-hidden="true"></i>       Delete</button></td>
    </tr>
</table>

    </div>
</center>
    
</form>
</body>
</html>