<!DOCTYPE html>
<html long="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Toko Wayang Kami</h1>
        <p>program Aplikasi Sederhana Untuk Menghitung penjualan Barang Di Toko Wayang Kami</p>
        
        <form action = "" method="POST" name = "penjualan">

  <div class="form-group">
    <label for="nm_barang"> Nama Barang </label>
    <input type="text" class="form-control" id="nm_barang" aria-describedby="nm_barang" name= "nm_barang" Required>
  </div>
  <div class="form-group">
    <label for="h_barang"> Harga Barang </label>
    <input type="text" class="form-control" id="h_barang" aria-describedby="h_barang" name= "h_barang" Required>
  </div>
  <div class="form-group">
    <label for="diskon"> diskon </label>
    <input type="text" class="form-control" id="diskon" aria-describedby="diskon" name= "diskon" Required>
  </div>
  <div class="form-group">
    <label for="jml_barang"> Jumlah Barang </label>
    <input type="text" class="form-control" id="jml_barang" aria-describedby="jml_barang" name= "jml_barang" Required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
</form>
</div>

<hr>
<?php
   if(isset($_POST['submit'])){
       $nama =$_POST['nm_barang'];
       $harga =$_POST['h_barang'];
       $jumlah =$_POST['jml_barang'];
       $diskon1 =$_POST['diskon'];
       $total =$harga * $jumlah;
       $diskon = ($diskon1/100) *$total;
       $TotalSetelahDiskon= $total-$diskon;
       
       echo"<div class = 'countainer'>";
       echo"<h1> jumlah yang harus di bayarkan : </h1>";
       echo"<h4>Nama Barang : $nama </h4>";
       echo"<h4>Harga Barang : $harga </h4>";
       echo"<h4>Jumlah Barang : $jumlah </h4>";
       echo"<h4>Diskon : $diskon % </h4>";
       echo"<h4>Total Pembayaran Setelah Diskon : Rp. ",number_format($diskon),"</h4>";
       echo"</div>";
       

   }
?>

</body>
</html>
