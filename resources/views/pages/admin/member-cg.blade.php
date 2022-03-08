@extends('layouts.master')

@section('title', 'Member CG')

@section('content')
 
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Member CG</p>
                <div class="row">
                    <div class="col-md mb-2">
                        <a class="btn btn-success float-right" href="javascript:void(0)" id="createNewItem" data-toggle="modal" data-target="#modal-tambah"> Tambah Anggota</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                <thead>
                                    <!-- <tr>
                                        <th>No Training Module#</th>
                                        <th>Skill Category</th>
                                        <th>Training Module</th>
                                        <th>Level</th>
                                        <th>Training Module Group</th>
                                        <th>Training Module Description</th>
                                        <th>Action</th>
                                    </tr> -->
                                    <tr>
                                        <th>No#</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Tgl Masuk
                                            {{-- <small>(Berdasarkan job level terakhir)</small> --}}
                                        </th>
                                        <th>Department</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="modal-tambahLabel">Tambah Data Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-input">
                        <label>NIK</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nik" placeholder="10119912">
                        </div>
                    </div>
                    <div class="form-input">
                        <label>Nama Karyawan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="judul_berita" placeholder="Nama Berita">
                        </div>
                    </div>
                    <div class="form-input">
                        <label>Peran Pengguna</label>
                        <div class="input-group">
                            <select class="form-control">
                                <option value="3">Admin</option>
                                <option value="2">CG Leader</option>
                                <option value="1">Pengguna</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-input">
                        <label>Email</label>
                        <div class="input-group">
                            <input type="text" name="email" class="form-control" placeholder="URL Berita">
                        </div>
                    </div>
                    <div class="form-input">
                        <label>Tgl Masuk</label>
                        <div class="input-group">
                            <input type="date" id="birthday" name="tgl_masuk" class="form-control">
                        </div>
                    </div>
                    <div class="form-input">
                        <label>Upload Gambar Berita</label>
                        <input type="file" name="gambar" id="file-uploader" class="form-control d-none" placeholder="Upload berkas">
                        <div class="input-group">
                            <input type="text" id="file-uploader" class="form-control bg-white" placeholder="Upload berkas" readonly>
                            <button class="btn btn-outline-primary waves-effect" type="button" onclick="$('#file-uploader').click()">Browse File</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Hapus Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="" class="btn btn-success">Lanjutkan</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('script')
<script type="text/javascript">
    
    var role = '{{ Auth::user()->peran_pengguna}}';
    function initDatatable() {
        var dtJson = $('#table-cg').DataTable({
            ajax: "{{ route('Member.get') }}",
            serverSide: true,
            processing: true,
            aaSorting: [
                [0, "desc"]
            ],
            searching: true,
            dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 10,
            lengthMenu: [10, 15, 20],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            columns: [
                {
                data: 'DT_RowIndex', name: 'DT_RowIndex'
                },
                {
                    data: 'nik'
                },
                {
                    data: 'nama_pengguna'
                },
                {
                    data: 'tgl_masuk'
                },
                {
                    data: 'nama_department'
                },
                {
                    data: 'nama_job_title'
                },
                {
                    data: 'action'
                }
            ],
        });
    }

    $(document).ready(function() {
        initDatatable();

        $('#table-cg').on('click','.delete-button', function () {
            $('.modal-footer a').attr('href',"{{ route('Member.delete') }}/"+$(this).data('id'));
        })

        $('.btn-tambah').on('click',function () {
            $('.modal-dialog form').attr('action',"{{ route('Member.post') }}");
            $('input[name="_method"]').remove();
            $('.modal-dialog form')[0].reset();
        })
    });
</script>
@endpush