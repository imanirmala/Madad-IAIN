<?= $this->extend('temp/template'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Data Role
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Role</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Role</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="card-description">
                                Berikut adalah beberapa Role yang ada di website <code>E-PESANTREN</code>
                            </p>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <button type="button" class="btn btn-inverse-info btn-fw" data-toggle="modal" data-target="#addRole" data-whatever="@fat">
                                <i class="fa fa-plus"></i> Buat Baru
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Photoshop</td>
                                    <td>
                                        <span>
                                            <a style="margin-right: 10px;" href=""><i class="fas fa-pencil-alt"></i></a>
                                            <a style="margin-left: 10px;" href=""><i class="fas fa-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add data -->

        <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Form add role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Role Name</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>