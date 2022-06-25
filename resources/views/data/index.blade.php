@extends('layout.main')

{{-- aditional css for current page --}}
@push('page-css')

@endpush

@section('content')
<div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <div class="row">
              <div class="col">
              <h2 class="mb-0">Data Rumah Sakit Dan Apotek</h2>
              </div>
              <div class="col-auto">
                <div class="form-actions">
                  <div class="text-right">
                    <button type="submit" class="btn btn-info btn-sm" id="tambah" >Tambah Data</button>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive"> 
                <table class="table table-flush data-table">
                  <thead class="thead-light">
                    <tr>
                      <th width="10%">No.</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th width="10%">Photo</th>
                      <th width="10%">fasilitas</th>
                      <th width="10%">Actions</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

@push('page-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
        // data table
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            rowId:"id",
            ajax: "{{ route('rsapotek_dataTable') }}",
            columns: [
                {orderable:false,searchable:false,data:'DT_RowIndex',name: 'DT_RowIndex'},
                {data: 'nama', name: 'nama'},
                {data: 'alamat', name: 'alamat'},
                {data: 'foto', name: 'foto, orderable: false, searchable: false'},
                {data: 'fasilitas', name: 'fasilitas', orderable: false, searchable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
        // menjalankan tombol tambah
        $(document).on('click', '#tambah',function (e) {
            e.preventDefault();
            let element = $(this);
            show_loading(element, "full");
            $.ajax({
                type: 'get',
                url: "/rsapotek/tambah",
                success: function(data) {
                hide_loading(element, '', 'full', ' Tambah Data');
                $('#modalDialogLabel').html("Tambah Data")
                $('#modalDialogSize').addClass("modal-lg")
                $('#modalDialogData').html(data);
                $('#modalDialog').modal({
                    backdrop: 'static'
                })
                $('#modalDialog').modal("show");
                }
            });
        });

        // menjalankan fungsi tambah
        $(document).on('submit', '#formCreate', function(e) {
            e.preventDefault();
            clear_error_withStyle()
            show_loading("#btnCreate", "full");
            $.ajax({
                url: '/rsapotek',
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    hide_loading('#btnCreate', '', 'full', 'Create');
                    if (data.status) {
                        clearInput();
                        $('#modalDialog').modal("hide");
                        Swal.fire("Berhasil!", data.message, "success").then(function() {
                            table.ajax.reload();
                        });
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    hide_loading('#btnCreate', '', 'full', 'Create');
                    check_errors_withStyle(xhr.responseJSON.errors);
                }
            });
        });

        // menjalankan tombol show
        $(document).on('click', '#showData',function (e) {
            e.preventDefault();
            let element = $(this);
            show_loading(element, "full");
            let id=$(this).attr('data-id');
            $.ajax({
                type: 'get',
                url: "/rsapotek/show/"+id,
                success: function(data) {
                hide_loading(element, 'eye', '', 'eye');
                $('#modalDialogLabel').html("Detal")
                $('#modalDialogSize').addClass("modal-lg")
                $('#modalDialogData').html(data);
                $('#modalDialog').modal({
                    backdrop: 'static'
                })
                $('#modalDialog').modal("show");
                }
            });
        });

        // menjalankan tombol edit
        $(document).on('click', '#editData',function (e) {
            e.preventDefault();
            let element = $(this);
            show_loading(element, "full");
            let id=$(this).attr('data-id');
            $.ajax({
                type: 'get',
                url: "/rsapotek/edit/"+id,
                success: function(data) {
                hide_loading(element, 'edit', '', 'Edit');
                $('#modalDialogLabel').html("Edit")
                $('#modalDialogSize').addClass("modal-lg")
                $('#modalDialogData').html(data);
                $('#modalDialog').modal({
                    backdrop: 'static'
                })
                $('#modalDialog').modal("show");
                }
            });
        });

        // menjalankan fungsi Edit 
        $(document).on('submit', '#formEdit', function(e) {
            e.preventDefault();
            clear_error_withStyle()
            show_loading("#btnEdit", "full");
            $.ajax({
                url: `/rsapotek/update`,
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    hide_loading('#btnEdit', '', 'full', 'Edit');
                    if (data.status) {
                        clearInput();
                        $('#modalDialog').modal("hide");
                        Swal.fire("Berhasil!", data.message, "success").then(function() {
                            table.ajax.reload();
                        });
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    hide_loading('#btnEdit', '', 'full', 'Edit Data');
                    check_errors_withStyle(xhr.responseJSON.errors);
                }
            });
        });
        
        // menjalankan fungsi tombol hapus
        $(document).on('click', '#hapusData', function(e) {
            e.preventDefault();
            var url = "{{ route('rsapotek_destroy') }}";
            var csrf= '{{ csrf_token() }}';
            var dataText= $(this).attr('data-text');
            var id= $(this).attr('data-id');
            deleteConfirm(url,table,dataText,csrf,id);
        });
    });</script>
@endpush