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

  <title>Welcome Admin</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/images/geloraputih.png" width="75"></a>
      <h1 style="font-family: 'Lobster Two', cursive !important; color:white">Penilaian PBB <br> Danton Vafor</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>admin">Kelola <br> Peserta</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>admin/kelolaNilai1">Nilai PBB <br> Danton Vafor</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>admin/kelolaNilai2">Nilai Kostum <br> Favorit Perpang</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>admin/kelolaAdmin">Kelola <br> Admin</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>authadmin/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->


  <!--Main Content-->
   <div class="m-content container" style="margin-bottom: 10%;">
      <?php
      if($this->session->flashdata('msg')){
        echo $this->session->flashdata('msg');
      }
      ?>
      <table id="dataTable" class="display text-center" cellspacing="0" width="100%" border="1">
        <thead>
            <tr>
                <th>No Tampil</th>
                <th>Nama Sekolah</th>
                <th>PBB</th>
                <th>Danton</th>
                <th>Penalty</th>
                <th>Vafor</th>
                <th>Penalty</th>
                <th>Actions</th>
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
            <td><?= $p->vafor ?></td>
            <td><?= $p->penalty2 ?></td>

            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?= $p->notampil ?>editPesertaModal">Update Score</button>
              </div>
            </td>
          </tr>

           <!-- Modal -->
          <div class="modal fade" id="<?= $p->notampil ?>editPesertaModal" tabindex="-1" role="dialog" aria-labelledby="editPeserta" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editPesertaLabel">Update Score</h5>
                </div>
                <div class="modal-body">
                  <form role="form" method="post" action="<?= base_url() ?>admin/editNilai1">
                    <div class="form-group ml-auto">
                      <label for="notampil">No Urut</label>
                      <input type="number" class="boks form-control" id="notampil" name="notampil" value="<?= $p->notampil ?>" disabled>
                      <input type="hidden" name="notampil" value="<?= $p->notampil ?>">
                    </div>
                    <div class="form-group ml-auto">
                      <label for="nama">Nama Sekolah</label>
                      <input type="text" class="boks form-control" id="nama" name="nama" value="<?= $p->nama ?>" disabled>
                      <input type="hidden" name="nama" value="<?= $p->nama ?>">
                    </div>
                    <div class="form-group ml-auto">
                      <label for="pbb">PBB</label>
                      <input type="number" class="boks form-control" id="pbb" name="pbb" value="<?= $p->pbb ?>">
                    </div>
                    <div class="form-group ml-auto">
                      <label for="danton">Danton</label>
                      <input type="number" class="boks form-control" id="danton" name="danton" value="<?= $p->danton ?>">
                    </div>
                    <div class="form-group ml-auto">
                      <label for="penalty1">Pengurangan PBB & Danton</label>
                      <input type="number" class="boks form-control" id="penalty1" name="penalty1" value="<?= $p->penalty1 ?>">
                    </div>
                    <div class="form-group ml-auto">
                      <label for="vafor">Vafor</label>
                      <input type="number" class="boks form-control" id="vafor" name="vafor" value="<?= $p->vafor ?>">
                    </div>
                    <div class="form-group ml-auto">
                      <label for="penalty2">Pengurangan Vafor</label>
                      <input type="number" class="boks form-control" id="penalty2" name="penalty2" value="<?= $p->penalty2 ?>">
                    </div>
                    <input type="hidden" name="code" value="private">
                    <button type="submit" class="btn btn-general btn-block" id="submit">Update Score</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Modal -->
          <?php
          }
          ?>
        </tbody>

      </table>
    </div>
  <!--End of Main Content-->

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <p>©2018 Gelora | Magista. All Rights Reserved</p>
    </div>
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
