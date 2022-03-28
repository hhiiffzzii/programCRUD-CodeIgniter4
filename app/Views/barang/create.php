<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form tambah data</h2>
            <p>Disini untuk menambahkan data baru</p>
            <form action="/barang/save" method="POST">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" autofocus>
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis Barang</label>
                    <input type="text" class="form-control" id="jenis" name="jenis">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Jumlah Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>