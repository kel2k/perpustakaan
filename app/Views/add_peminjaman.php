<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="<?= base_url('Home/aksi_addpeminjaman') ?>" method="post">
                            <div class="col-md-4">
                                            <label>Nama Peminjam</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="user">
                                        <option>-PILIH-</option>
                                        <?php
                                        foreach ($a as $b) {
                                            ?>
                                                <option value ="<?= $b->id_user ?>"><?php echo $b->nama ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    </fieldset>
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label>Nama Buku</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="book">
                                        <option>-PILIH-</option>
                                        <?php
                                        foreach ($c as $b) {
                                            ?>
                                                <option value ="<?= $b->id_book ?>"><?php echo $b->nama_b ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    </fieldset>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Kembali</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control" placeholder="Tanggal Kembali" name="tgl_kembali"
                                                        id="first-name-icon" required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jumlah</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Jumlah" name="jumlah"
                                                        id="first-name-icon" required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-123"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>