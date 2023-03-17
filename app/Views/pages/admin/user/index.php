<?= $this->extend('temp/template'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Data User
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data table</li>
        </ol>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <h4 class="card-title">Data User</h4>
          </div>

          <div class="col-lg-6 d-flex justify-content-end">
            <a href="<?php echo base_url('/add-user') ?>">
              <button type="button" class="btn btn-inverse-primary btn-fw">
                <i class="fa fa-plus"></i> Buat Baru
              </button>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Ima Nirmala</td>
                    <td>22</td>
                    <td>Garut Kota</td>
                    <td>D3</td>
                    <td>Manajemen Informatika</td>
                    <td>
                      <label class="badge badge-info">Perempuan</label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Setiawan</td>
                    <td>24</td>
                    <td>Majalengka</td>
                    <td>S1 </td>
                    <td>Tekhnik Informatika</td>
                    <td>
                      <label class="badge badge-danger">Laki - laki</label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Nirmala</td>
                    <td>20</td>
                    <td>Tokyo</td>
                    <td>S2</td>
                    <td>Akidah Akhlaq</td>
                    <td>
                      <label class="badge badge-success">Perempuan</label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>