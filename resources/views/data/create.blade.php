<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">                    
                    <label for="id_kategori">Kategori</label>
                    <select class="form-control" id="id_kategori" name="id_kategori">
                        <option value="">Pilih</option>
                        @foreach ($kategori as $j)
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kategori"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="nama">Nama Rumah Sakit/Apotek</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="" aria-describedby="nama">
                    <small class="d-none text-danger" id="nama"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="" aria-describedby="kota">
                    <small class="d-none text-danger" id="kota"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="" aria-describedby="alamat">
                    <small class="d-none text-danger" id="alamat"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="lat">Latitut</label>
                    <input type="text" class="form-control" id="lat" name="lat" value="" aria-describedby="lat">
                    <small class="d-none text-danger" id="lat"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="long">Longtitut</label>
                    <input type="text" class="form-control" id="long" name="long" value="" aria-describedby="long">
                    <small class="d-none text-danger" id="long"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnCreate">Tambah</button>
                </div>
            </div>
    </form>
</div>