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
              <h2 class="mb-0">Master Data Fasilitas</h2>
              </div>
              <div class="col-auto">
                <div class="form-actions">
                  <div class="text-right">
                    <button type="submit" class="btn btn-info btn-sm" id="tambah">Tambah Data</button>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush text-center" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th style="font-size: 13px;">No.</th>
                    <th style="font-size: 13px;">Foto</th>
                    <th style="font-size: 13px">Detail</th>
                    <th style="font-size: 13px">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary" id="edit">Edit</button>
                        <button type="button" class="btn btn-secondary active">Hapus</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

    @push('page-scripts')
    <script type="text/javascript">
    $(document).ready(function () {
        
        // menjalankan tombol tambah
        $(document).on('click', '#tambah',function (e) {
            e.preventDefault();
            let element = $(this);
            show_loading(element, "full");
            $.ajax({
                type: 'get',
                url: "/fasilitas/tambah",
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

        $(document).on('click', '#edit',function (e) {
            e.preventDefault();
            let element = $(this);
            show_loading(element, "full");
            $.ajax({
                type: 'get',
                url: "/fasilitas/edit/1",
                success: function(data) {
                hide_loading(element, '', 'full', ' Edit');
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
      });
        
    </script>
@endpush