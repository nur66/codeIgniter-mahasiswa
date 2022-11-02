<!-- <?php var_dump($mahasiswa); ?> -->

<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6 col-sm-12">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <!-- <?php print_r($mhs['nama']); ?> -->
                    <li class="list-group-item"><?php echo $mhs['nama']; ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>