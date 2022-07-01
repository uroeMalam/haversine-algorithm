<div class="container-fluid">
    <form method="POST" id="formCreateFoto">
        @csrf
        @method("POST")
        <input type="text" class="form-control" id="id_rs" name="id_rs" value="{{ $id }}" aria-describedby="id_rs" hidden>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="file" class="form-control" id="foto" name="foto" value="" aria-describedby="foto">
                    <small class="d-none text-danger" id="foto"></small>
                </div>
            </div>
            <div class="col-sm-4 col-md-2">
                <div class="form-actions">
                    <div class="text-right">
                        <button type="submit" class="btn btn-success" id="btnCreateFoto">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="table-responsive"> 
        <table class="table table-flush data-table-foto">
          <thead class="thead-light">
            <tr>
              <th width="10%">No.</th>
              <th>Photo</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
</div>