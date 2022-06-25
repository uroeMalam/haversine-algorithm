<div class="container-fluid">
    <form method="POST" id="formEdit">
        @csrf
        @method("POST")
        <input type="text" class="form-control" id="id" name="id" value="{{ $id }}" aria-describedby="id" hidden>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nama">Nama fasilitas</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" aria-describedby="nama">
                    <small class="d-none text-danger" id="nama"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" value="{{ $data->foto }}" aria-describedby="foto">
                    <small class="d-none text-danger" id="foto"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnEdit">Edit Data</button>
                </div>
            </div>
    </form>
</div>