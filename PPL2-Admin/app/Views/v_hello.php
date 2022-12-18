<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        // $db = \Config\Database::connect();
        // $data = $db->query("select * from mahasiswa")->getResult();
        // foreach($data as $item){
          for($i=1;$i<=10;$i++){
        ?>
        <tr>
          <td><?php echo $item->nim ?></td>
          <td><?php echo $item->nama ?></td>
          <td><?php echo $item->umur ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</body>
</html>