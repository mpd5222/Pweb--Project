<div class="container mt-15">
    <div class="row">
        <div class="col-lg-25">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-25">
            <br><br>
            <h3>Daftar Sekolah Indonesia Luar Negeri-Data Sekolah</h3>
            <table class="table table-bordered">
                <tr class="table-dark"> 
                    <td>Nama Sekolah</td>
                    <td>Jenjang</td>
                    <td>Alamat</td>
                </tr>
                <?php foreach ($data['Daftarsekolah'] as $ds) : ?>
                <tr class="table-light">
                    <td><?= $ds['Nama_sekolah'] ?></td>
                    <td><?= $ds['Jenjang'] ?></td>
                    <td><?= $ds['Alamat'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
