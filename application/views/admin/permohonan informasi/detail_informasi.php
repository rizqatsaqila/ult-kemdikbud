<div class="container">

    <div class="section-title" data-aos="fade-up">
        <br>
        <h2 align="center">Permohonan Informasi</h2>
    </div>
    <br>
    <div class="row content">
        <?php foreach ($detail_informasi as $informasi) { ?>
            <div class="card-body shadow mb-4">

                <form class="pengaduan" method="post" action="<?= site_url('pengaduan/tambah_pengaduan') ?>">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class=" mb-0 ">Detail Permohonan Informasi</h3>
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Email</label>
                            <input type="email" class="form-control" value="<?= $informasi->email_pemohon ?>" id="email" name="email" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="text-dark">Nama Pelapor</label>
                            <input type="text" class="form-control" value="<?= $informasi->nama_pemohon ?>" id="nama" name="nama" placeholder="your name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="telp">Nomor Telepon</label>
                            <input type="text" class="form-control" value="<?= $informasi->no_HP_pemohon ?>" id="telp" name="telp" placeholder="your phone number " readonly>
                        </div>
                        <div class="form-group">
                            <label for="ktp" class="text-dark">Nomor KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $informasi->no_KTP_pemohon ?>" placeholder="your ktp number" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="text-dark">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $informasi->alamat_pemohon ?>" placeholder="your address" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan" class="text-dark">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" value="<?= $informasi->kecamatan_pemohon ?>" name="kecamatan" placeholder="your kecamatan" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten" class="text-dark">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupaten" value="<?= $informasi->kabupaten_pemohon ?>" name="kabupaten" placeholder="your kabupaten" readonly>
                        </div>
                        <div class="form-group">
                            <label for="provinsi" class="text-dark">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" value="<?= $informasi->provinsi_pemohon ?>" name="provinsi" placeholder="your province" readonly>
                        </div>
                        <div class="form-group">
                            <label for="profesi" class="text-dark">Profesi Pelapor</label>
                            <input type="text" class="form-control" id="profesi" name="profesi" value="<?= $informasi->profesi_pemohon ?>" placeholder="your profesi" readonly>
                        </div>
                        <br>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class=" mb-0 ">Keterangan Permohonan Informasi</h3>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="text-dark">Judul Informasi</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $informasi->judul_informasi ?>" placeholder="judul informasi yang dibutuhkan" readonly>
                        </div>

                        <div class="form-group">
                            <label for="rincian" class="text-dark">Rincian</label>
                            <textarea name="rincian" class="form-control" placeholder="rincian informasi yang dibuthkan"><?= $informasi->rincian_informasi ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tujuan" class="text-dark">Tujuan</label>
                            <textarea name="tujuan" class="form-control" placeholder="tujuan penggunaan informasi"><?= $informasi->tujuan_informasi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="text-dark">Status informasi</label>
                            <input type="text" class="form-control" id="Status" value="<?= $informasi->status_informasi ?>" name="status" placeholder="status informasi pengaduan" readonly>
                        </div>
                        <br>

                        <a href="<?= site_url('Permohonan_informasi/tampil_data') ?>">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>

                </form>
            </div>
        <?php } ?>
    </div>
</div>