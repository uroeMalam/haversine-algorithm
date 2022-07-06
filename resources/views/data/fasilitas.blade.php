@php
$levelMenu = new App\Models\fasilitasrs();
@endphp
<div class="container-fluid">
    <form method="POST" id="formSave">
        @csrf
        @method("POST")
        <input type="text" class="form-control" id="id_rs" name="id_rs" value="{{ $id }}" aria-describedby="id_rs" hidden>

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Menu</th>
                    <th width="5%">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="selectAll">
                        <label class="form-check-label" for="selectAll">
    
                        </label>
                        </div>
                    </th>
                </tr>
            </thead>
        <tbody>
            @foreach ($table as $t)
            <tr>
                <td width="5%">{{$loop->iteration }}</td>
                <td> {{ $t->nama }}</td>
                <td width="5%">
                    @php
                    $check=$levelMenu->where([
                        ['id_rs_apotek',$id],
                        ['id_fasilitas',$t->id],
                    ])->get()->toArray();
                    @endphp
                    <input type="text" id="id_{{$loop->iteration }}" name="id" value="{{ $id }}" hidden>
                    <input type="text" id="id_fasilitas_{{$loop->iteration }}" name="id_fasilitas[]" value="{{ $t->id }}" hidden>
                    <div class="form-check">
                        <input class="form-check-input check" type="checkbox"  id="defaultCheck_{{$loop->iteration }}" name="defaultCheck_{{$loop->iteration }}"
                        {{ $check ? "checked" : "" }}
                        >
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

        <div class="form-actions">
            <div class="text-right">
                <button type="submit" class="btn btn-success" id="btnSave">save</button>
            </div>
        </div>
    </form>
</div>