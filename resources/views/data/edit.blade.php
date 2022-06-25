<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="judul">Nama Rumah Sakit/Apotek</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="" aria-describedby="judul">
                    <small class="d-none text-danger" id="judul"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="judul">Daerah</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="" aria-describedby="judul">
                    <small class="d-none text-danger" id="judul"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="judul">Alamat</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="" aria-describedby="judul">
                    <small class="d-none text-danger" id="judul"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tanggal_mulai">Kategori</label>
                    <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="" aria-describedby="tanggal_mulai">
                    <small class="d-none text-danger" id="tanggal_mulai"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tanggal_berakhir">Fasilitas</label>
                    <input type="text" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" value="" aria-describedby="tanggal_berakhir">
                    <small class="d-none text-danger" id="tanggal_berakhir"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tanggal_mulai">Latitut</label>
                    <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="" aria-describedby="tanggal_mulai">
                    <small class="d-none text-danger" id="tanggal_mulai"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tanggal_berakhir">Longtitut</label>
                    <input type="text" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" value="" aria-describedby="tanggal_berakhir">
                    <small class="d-none text-danger" id="tanggal_berakhir"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnCreate">Edit</button>
                </div>
            </div>
    </form>
</div>