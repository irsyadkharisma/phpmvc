
    <!-- MODAL DATA-->
    <div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModallabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama">
                        </div>

                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="integer" class="form-control" id="nrp" name="nrp" placeholder="Isikan NRP">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control required" id="email" name="email" placeholder="Isikan Email">
                        </div>

                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <select class="form-control required" id="jurusan" name="jurusan">
                                <option value="" disabled> -Pilih Jurusan- </option>
                                <option value="Geodesy">Geodesy</option>
                                <option value="Carthography">Carthography</option>
                                <option value="Geography">Geography</option>
                                <option value="Data Science">Data Science</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- end of MODAL -->