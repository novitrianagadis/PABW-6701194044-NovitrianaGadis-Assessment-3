<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Berhasil <?php session()->getFlashdata('message'); ?></strong>
        </div>
        <script>
            $(".alert").alert();
        </script>
    <?php endif; ?>



    <div class="card">
        <div class="card-body">
            <button class="btn " data-toggle="modal" data-target="#modalTambah" style="background-color: pink;">
                Tambah Data Produk</button>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id_pencocokan</th>
                        <th>judul1</th>
                        <th>judul2</th>
                        <th>hasil_pencocokan</th>

                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pencocokan as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['id_pencocokan'] ?></td>
                            <td><?= $row['judul1'] ?></td>
                            <td><?= $row['judul2'] ?></td>
                            <td><?= $row['hasil_pencocokan'] ?></td>

                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalUbah" class="btn btn-sm btn-warning" style="background-color: pink; id=" btn-edit" data-id_pencocokan="<?= $row['id_pencocokan']; ?>" data-judul1="<?= $row['judul1']; ?>" data-judul2="<?= $row['judul2']; ?>" data-hasil_pencocokan="<?= $row['hasil_pencocokan']; ?>"><i class=" fa fa-edit"></i></button>
                                <button type="button" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

/div>
<!-- End of Main Content -->


<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pencocokan/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <label for="id_pencocokan"></label>
                        <input type="text" name="id_pencocokan" id="id_pencocokan class=" form-control" placeholder="Masukan id Pencocokan">
                    </div>
                    <div class="form-group mb-0">
                        <label for="judul1"> </label>
                        <input type="text" name="judul1" id="judul1" class="form-control" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group mb-0">
                        <label for="judul2"></label>
                        <input type="text" name="judul2" id="judul2" class="form-control" placeholder="Masukan judul">
                    </div>
                    <div class="form-group mb-0">
                        <label for="hasil_pencocokan"></label>
                        <input type="text" name="hasil_pencocokan" id="hasil_pencocokan" class="form-control" placeholder="Hasil Pencocokan">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/pencocokan/hapus/<?= $row['id_pencocokan']; ?>" class="btn btn-primary"> Yakin</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalUbah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pencocokan/ubah'); ?>" method="post">

                    <div class="form-group mb-0">
                        <label for="id_pencocokan"></label>
                        <input type="text" name="id_pencocokan" id="id_pencocokan" class="form-control" placeholder="Masukan Id Pencocokan" value=<?= $row['id_pencocokan'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="judul1"> </label>
                        <input type="text" name="judul1" id="judul1" class="form-control" placeholder="Masukan Judul" value=<?= $row['judul1'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="judul2"></label>
                        <input type="text" name="judul2" id="judul2" class="form-control" placeholder="Masukan Judul" value=<?= $row['judul2'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="hasil_pencocokan"></label>
                        <input type="text" name="hasil_pencocokan" id="hasil_pencocokan" class="form-control" placeholder="Masukan Hasil" value=<?= $row['hasil_pencocokan'] ?>>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>