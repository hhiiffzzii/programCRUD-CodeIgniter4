<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail data</h1>
            <p>Disini data dapat di modifikasi</p>
            <div class="card">
                <h5 class="card-header"><?= $detail['nama']; ?></h5>
                <div class="card-body">
                    <h5 class="card-title">Informasi Data</h5>
                    <p class="card-text"><b>Nama Barang</b> : <?= $detail['nama']; ?>
                        <br><b>Jenis Barang</b>: <?= $detail['jenis']; ?><br>
                        <b>Jumlah Stok</b>: <?= $detail['stok']; ?>
                    </p>
                    <a href="/barang/edit/<?= $detail['id']; ?>" class="btn btn-primary">Edit</a>
                    <form action="/barang/delete/<?= $detail['id']; ?>" method="POST" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <a href="/barang/crud" class="btn btn-light">Kembali</a>

                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>