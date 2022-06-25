<div class="container-fluid">
    <form method="POST" id="formShow">
        @csrf
        @method("POST")
        <input disabled type="text" class="form-control" id="id" name="id" value="{{ $id }}" aria-describedby="id" hidden>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">                    
                    <label for="id_kategori">Kategori</label>
                    <select class="form-control" id="id_kategori" name="id_kategori" disabled>
                        <option value="">Pilih</option>
                        @foreach ($kategori as $j)
                            <option value="{{ $j->id }}" {{ ($j->id == $data->id_kategori) ? "selected" : ""}}>{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kategori"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="nama">Nama Rumah Sakit/Apotek</label>
                    <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" aria-describedby="nama">
                    <small class="d-none text-danger" id="nama"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input disabled type="text" class="form-control" id="kota" name="kota" value="{{ $data->kota }}" aria-describedby="kota">
                    <small class="d-none text-danger" id="kota"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input disabled type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" aria-describedby="alamat">
                    <small class="d-none text-danger" id="alamat"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="lat">Latitut</label>
                    <input disabled type="text" class="form-control" id="lat" name="lat" value="{{ $data->lat }}" aria-describedby="lat">
                    <small class="d-none text-danger" id="lat"></small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="long">Longtitut</label>
                    <input disabled type="text" class="form-control" id="long" name="long" value="{{ $data->long }}" aria-describedby="long">
                    <small class="d-none text-danger" id="long"></small>
                </div>
            </div>
        </div>
    </form>
</div>