<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
       <!-- table -->
        
      
<div id="table" class="tablepage">


  <table border= "1" class="table">
<thead>
<tr>
<th scope="col">No.</th>
<th scope="col">Nama</th>
<th scope="col">Prodi</th>
</tr>

<?php
include 'koneksi.php';
$query_mhs = "SELECT * FROM data_mhs";
$result = $koneksi->query($query_mhs);

// cek data di dalam db
if($result->num_rows > 0) {
  $no = 1;
// menampilkan data 
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $row["nama"] . "</td>";
    echo "<td>" . $row["prodi"] . "</td>";
    echo "</tr>";
  }
}
?>
</thead>

</table>
        </div> <!-- End Icon Box -->

</body>
</html>