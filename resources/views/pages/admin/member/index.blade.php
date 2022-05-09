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
                        <a class="btn btn-success float-right" href="javascript:void(0)" id="createNewItem" data-toggle="modal" data-target="#modal-tambah"><i class="icon-plus"></i> Tambah Anggota</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                <thead>
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
          <div class="modal-header p-3">
              <h5 class="modal-title" id="modal-tambahLabel">Tambah Data Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Member.post') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label>NIK</label>
                            <input type="text" class="form-control form-control-sm" name="nik" placeholder="10119912">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control form-control-sm" name="password" placeholder="Masukan Password">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Peran Pengguna</label>
                            <select class="form-control form-control-sm" name="peran_pengguna">
                                <option value="3">Admin</option>
                                <option value="2">CG Leader</option>
                                <option value="1">Pengguna</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Tanggal Masuk</label>
                            <input type="date" id="birthday" name="tgl_masuk" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Nama Karyawan</label>
                            <input type="text" class="form-control form-control-sm" name="nama_pengguna" placeholder="Nama Karyawan">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control form-control-sm" placeholder="nama@gmail.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label>Divisi</label>
                            <select id="divisi" class="form-control form-control-sm" name="divisi">
                                <option value="">Pilih Divisi</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Jabatan</label>
                            <select id="jabatan" class="form-control form-control-sm" name="job_title">
                                <option value="">Pilih Jabatan</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Level</label>
                            <select id="level" class="form-control form-control-sm" name="level">
                                <option value="">Pilih Level</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label>Department</label>
                            <select id="department" class="form-control form-control-sm" name="department">
                                <option value="">Pilih Department</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Sub Department</label>
                            <select id="sub-department" class="form-control form-control-sm" name="sub_department">
                                <option value="">Pilih Sub Dept</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Liga CG</label>
                            <select id="cg" class="form-control form-control-sm" name="cg">
                                <option value="">Pilih CG Name</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-detail" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Modal Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <a href="" class="btn btn-danger">Hapus</a> --}}
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
            autoWidth: false,
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
            scrollX: true,
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

    function getDivisi(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.divisi') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_divisi+'">'+res.data[i].nama_divisi+'</option>';
                }
                $('#divisi').html();
                $('#divisi').append(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
    }

    function getJabatan(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.jabatan') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_job_title+'">'+res.data[i].nama_job_title+'</option>';
                }
                $('#jabatan').html();
                $('#jabatan').append(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
    }

    function getLevel(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.level') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_level+'">'+res.data[i].nama_level+'</option>';
                }
                $('#level').html();
                $('#level').append(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
    }

    function getDepartment(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.department') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_department+'">'+res.data[i].nama_department+'</option>';
                }
                $('#department').html();
                $('#department').append(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
    }

    function getSubDepartment(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.sub.department') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_subdepartment+'">'+res.data[i].nama_subdepartment+'</option>';
                }
                $('#sub-department').html();
                $('#sub-department').append(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
    }

    function getCG(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.cg') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_cg+'">'+res.data[i].nama_cg+'</option>';
                }
                $('#cg').html();
                $('#cg').append(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
    }

    $(document).ready(function() {
        initDatatable();
        getDivisi();
        getJabatan();
        getLevel();
        getDepartment();
        getSubDepartment();
        getCG();


        $('.delete-button').on('click',function () {
            $('#modal-hapus').modal('show');
        })

        $('.btn-tambah').on('click',function () {
            $('.modal-dialog form').attr('action',"{{ route('Member.post') }}");
            // $('input[name="_method"]').remove();
            $('.modal-dialog form')[0].reset();
        })
    });

</script>
@endpush