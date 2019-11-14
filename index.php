<?php
  require_once "./library.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <title>SISTEM INFORMASI</title>
  </head>
  <body>
    
    <header style="background-color:#333;color:#fff;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 d-none d-sm-block">
            <h3>SISKOM</h3>
            <h5>Kota Padang</h5>
          </div>
          <div class="col-sm-6 col-xs-12">
            <h4>SISTEM INFORMASI</h4>
            <h5>AGENDA KEGIATAN</h5>
            <h5>KEPALA DINAS KOMUNIKASI DAN INFORMATIKA</h5>
            <h5>KOTA PADANG</h5>
          </div>
          <div class="col-sm-3 d-none d-sm-block">
            <img src="./logo_padang.png">
          </div>
        </div>
      </div>
    </header>
    <div class="container-fluid mt-3 mb-3">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Tempat</th>
              <th>Acara/Kegiatan</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(row("select * from agenda order by id desc") as $k => $v){ ?>
            <tr>
              <td><?php echo namaHari($v['tanggal']).', '.tgl_indo($v['tanggal']); ?></td>
              <td><?php echo $v['waktu']; ?></td>
              <td><?php echo $v['tempat']; ?></td>
              <td><?php echo $v['acara']; ?></td>
              <td><?php echo $v['keterangan']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <footer class="border-top">
      <div class="container-fluid p-3">
        <span>Copyright &copy; <?php echo date('Y'); ?> All right reserved.</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function(e){
        $('.table').DataTable();
      });
    </script>
  </body>
</html>