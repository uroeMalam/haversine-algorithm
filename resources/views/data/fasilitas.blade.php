<div class="container-fluid">
    <form method="POST" id="formSave">
        @csrf
        @method("POST")
        <input type="text" class="form-control" id="id_rs" name="id_rs" value="{{ $id }}" aria-describedby="id_rs" hidden>

        @foreach ($fasilitas as $item)
                <div class="row">
                    <input type="text" class="form-control" id="id_fasilitas[{{ $item->id }}]" name="id_fasilitas[{{ $item->id }}]" value="{{ $item->id }}" aria-describedby="id_fasilitas[{{ $item->id }}]" hidden>
                    
                    <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kosong" name="kosong" value="{{ $item->nama }}" aria-describedby="kosong" disabled>
                            <small class="d-none text-danger" id="kosong"></small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="number" class="form-control" id="value[{{ $item->id }}]" name="value[{{ $item->id }}]" value="{{ $item->keterangan }}" aria-describedby="value[{{ $item->id }}]">
                            <small class="d-none text-danger" id="value[{{ $item->id }}]"></small>
                        </div>
                    </div>
                </div>
        @endforeach

        {{-- @foreach ($fasilitas as $item)
        @foreach ($dataFasilitas as $d)
            <div class="row">
                <input type="text" class="form-control" id="id_fasilitas[{{ $item->id }}]" name="id_fasilitas[{{ $item->id }}]" value="{{ $item->id }}" aria-describedby="id_fasilitas[{{ $item->id }}]" hidden>
                
                <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kosong" name="kosong" value="{{ $item->nama }}" aria-describedby="kosong" disabled>
                        <small class="d-none text-danger" id="kosong"></small>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                            <input type="number" class="form-control" id="value[{{ $item->id }}]" name="value[{{ $item->id }}]" value="{{ $d->keterangan }}" aria-describedby="value[{{ $item->id }}]">
                            <small class="d-none text-danger" id="value[{{ $item->id }}]"></small>
                    </div>
                </div>
            </div>    
        @endforeach 
        @endforeach --}}

        <div class="form-actions">
            <div class="text-right">
                <button type="submit" class="btn btn-success" id="btnSave">save</button>
            </div>
        </div>
    </form>
</div>