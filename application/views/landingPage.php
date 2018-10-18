<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/gelora.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">

  <title>Gelora | Magista</title>
</head>

<style media="screen">
  #sekul{
    color: black !important;
    text-decoration: none !important;
  }

  #sekul:hover{
    color: #22b975 !important;
    text-decoration: underline !important;
  }
</style>

<body>
  <div class="">
    <div class="row">
      <a href="#"><img src="<?= base_url() ?>assets/images/gelora.png" width="100" style="margin-top: 25px; margin-left: 25px"></a>
      <h1 style="margin-top: 45px; margin-left: 25px; font-family: 'Lobster Two', cursive !important; font-weight:bold; font-size:50px">Gelora | Magista</h1>
    </div>
  </div>


  <!--Main Content-->
   <div class="m-content " style="margin-bottom: 10%;">
      <table id="dataTable" class="display text-center" cellspacing="0" width="100%" border="1" style="font-weight: 400">
        <thead>
            <tr>
                <th rowspan="2">No Tampil</th>
                <th rowspan="2">Nama Sekolah</th>
                <th colspan="9">Nilai Pasukan</th>
                <th colspan="3">Nilai Pelatih</th>
            </tr>

            <tr>
              <td style="font-weight: bold">PBB</td>
              <td style="font-weight: bold">Danton</td>
              <td style="font-weight: bold">Penalty</td>
              <td style="font-weight: bold">Utama-Purwa</td>
              <td style="font-weight: bold">Vafor</td>
              <td style="font-weight: bold">Penalty</td>
              <td style="font-weight: bold">Umum</td>
              <td style="font-weight: bold">Kostum</td>
              <td style="font-weight: bold">Favorit</td>
              <td style="font-weight: bold">Pasukan</td>
              <td style="font-weight: bold">Ujian Perpang</td>
              <td style="font-weight: bold">Pelatih</td>
            </tr>
        </thead>
        <tbody>
          <?php
            foreach($peserta->result() as $p){
          ?>
          <tr>
            <td><?= $p->notampil ?></td>
            <td><?= $p->nama ?></td>
            <td><?= $p->pbb ?></td>
            <td><?= $p->danton ?></td>
            <td><?= $p->penalty1 ?></td>
            <td><?= $p->utama ?></td>
            <td><?= $p->vafor ?></td>
            <td><?= $p->penalty2 ?></td>
            <td><?= $p->umum ?></td>
            <td><?= $p->kostum ?></td>
            <td><?= $p->favorit ?></td>
            <td><?= $p->pasukan ?></td>
            <td><?= $p->ujianperpang ?></td>
            <td><?= $p->pelatih ?></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  <!--End of Main Content-->

  <!-- Footer -->
    <div>
      <p>©2018 Gelora | Magista. All Rights Reserved</p>
    </div>
  <!-- End of Footer -->

</body>

<!-- JS utk table -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- JS setting -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').dataTable({});
});
</script>


</html>
