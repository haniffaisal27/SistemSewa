<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTEM PENYEWAAN KENDERAAN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
  <!-- Add New User Modal Start -->
  <div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah pesanan</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="fname" class="form-control form-control-lg" placeholder="Masukkan nama" required>
                <div class="invalid-feedback">Nama anda</div>
              </div>
 
              <div class="col">
                <input type="text" name="lname" class="form-control form-control-lg" placeholder="Masukkan no kp" required>
                <div class="invalid-feedback">Masukkan no kp</div>
              </div>
            </div>
 
            <div class="mb-3">
              <input type="text" name="email" class="form-control form-control-lg" placeholder="Jantina" required>
              <div class="invalid-feedback">Jantina</div>
            </div>
 
            <div class="mb-3">
              <input type="tel" name="phone" class="form-control form-control-lg" placeholder="Nombor Telefon" required>
              <div class="invalid-feedback">Isi Nombor Telefon</div>
            </div>
 
            <div class="mb-3">
              <input type="submit" value="Sah" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->
 
  <!-- Edit User Modal Start -->
  <div class="modal fade" tabindex="-1" id="editUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Pesanan</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="edit-user-form" class="p-2" novalidate>
            <input type="hidden" name="id" id="id">
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="Masukkan Nama" required>
                <div class="invalid-feedback">Nama anda</div>
              </div>
 
              <div class="col">
                <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="Masukkan no kp" required>
                <div class="invalid-feedback">Masukkan no kp</div>
              </div>
            </div>
 
            <div class="mb-3">
              <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="Jantina" required>
              <div class="invalid-feedback">Jantina</div>
            </div>
 
            <div class="mb-3">
              <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="Nombor Telefon" required>
              <div class="invalid-feedback">Nombor Telefon anda</div>
            </div>
 
            <div class="mb-3">
              <input type="submit" value="Update User" class="btn btn-success btn-block btn-lg" id="edit-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit User Modal End -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">PEJAL KERETA SEWA</h4>
        </div>
        <div>
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewUserModal">Tambah pesanan</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>No_kp</th>
                <th>Jantina</th>
                <th>No_hp</th>
                <th>Tindakan</th>
              </tr>
            </thead>
            <tbody>
 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>
 
</html>
