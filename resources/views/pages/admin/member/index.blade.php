@extends('layouts.master')

@section('title', 'Member CG')

@section('content')
<style>
    .image_area {
  position: relative;
  margin: auto
}

img {
  display: block;
  max-width: 100%;
}
.preview {
  overflow: hidden;
  width: 250px; 
  height: 250px;
  margin: 10px;
  border: 1px solid red;
}

.modal-lg{
  max-width: 1000px !important;
}
.overlay {
  position: absolute;
  bottom: 5px;
  left: 0;
  right: 0;
  background-color: rgba(255, 255, 255, 0.5);
  overflow: hidden;
  height: 0;
  transition: .5s ease;
  width: 100%;
}
.image_area:hover .overlay {
  height: 40%;
  cursor: pointer;
}
.text {
  color: #333;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
@push('style')
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
@endpush
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
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambahLabel" aria-hidden="true" style="overflow: auto !important">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header p-3">
              <h5 class="modal-title" id="modal-tambahLabel">Tambah Data Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Member.post') }}" method="POST" enctype="multipart/form-data" id="formPost">
                @csrf
                <input type="hidden" id="base64" name="base64">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="image_area" style="height: 250px;width:250px">
                                <label for="upload_image" class="relative">
                                    <img src="{{asset('assets/images/faces/face0.png' )}}" id="uploaded_image" class="rounded-circle img-thumbnail" />
                                    <div class="overlay">
                                        <div class="text" style="font-size: 15px">Click to Change Profile Image</div>
                                    </div>
                                    <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8 row">
                            <div class="col-md-6 mb-3">
                                <label>NIK</label>
                                <input type="text" class="form-control form-control-sm" name="nik" placeholder="10119912">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control form-control-sm" name="password" placeholder="Masukan Password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Peran Pengguna</label>
                                <select class="form-control form-control-sm" name="peran_pengguna">
                                    <option value="3">Admin</option>
                                    <option value="2">CG Leader</option>
                                    <option value="1">Pengguna</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Tanggal Masuk</label>
                                <input type="date" id="birthday" name="tgl_masuk" class="form-control form-control-sm">
                            </div>
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

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-editLabel" aria-hidden="true" style="overflow: auto !important">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" id="content-edit">
          <div class="modal-header p-3">
              <h5 class="modal-title" id="modal-editLabel">Edit Data Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Member.update') }}" id="formEdit" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" id="form-edit">

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
      </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Image Before Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="" id="sample_image" style="height: 300px" />
                        </div>
                        <div class="col-md-6">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="crop" class="btn btn-primary">Crop</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
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
                    <button class="btn btn-danger" type="button" id="btnHapus" onclick="deleteMember(this)" data-id="">Hapus</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-detail" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Detail Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyDetail" style="padding: 20px 26px">
                    
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
<script src="https://unpkg.com/cropperjs"></script>
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

    $('#table-cg').on('click','.member-hapus', function () {
        var id = $(this).attr('data-id');
        $('#btnHapus').attr('data-id',id);
    })
    

    function deleteMember(el) {
        var id = $(el).attr("data-id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            url:"member/member-delete/"+id,
            mehtod:"delete",
            data: {
                "id": id,
                "_token": token,
            },
            success:function(res)
            {
                $('#table-cg').DataTable().destroy();
                initDatatable();
                $("#modal-hapus").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data berhasil di hapus',
                    showConfirmButton: true,
                    timer: 1500
                })
            }
        })
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

    function formEdit(id){
        const url = "{!! route('Member.edit') !!}?id="+id;
        $.ajax({
            cache:false,
            url:url,
            type:"get",
            success: function(html) {
                $("#form-edit").html(html);
            }
        })
    }

    function detail(id) {
        const url = "{!! route('Member.detail') !!}?id="+id;
        $.ajax({
            type:"get",
            url:url,
            cache:false,
            success:function(html){
                $("#bodyDetail").html(html);
            }
        })
    }

    $("#formPost").submit(function (e) {
        e.preventDefault();
        var form = $("#formPost")
        const url = form.attr("action");
        const formData = form.serialize();
        $.ajax({
            url:url,
            type:"POST",
            cache:false,
            data:formData,
            success:function (data) {
                $("#formPost")[0].reset();
                $("#uploaded_image").attr("src","{{asset('assets/images/faces/face0.png')}}")
                $("#modal-tambah").modal('hide');
                $('#table-cg').DataTable().destroy();
                initDatatable();
                Swal.fire({
                    position:'top-end',
                    icon:'success',
                    title:data.message,
                    showConfirmButton:false,
                    timer:1500
                });
            },
            error:function (err) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: err.responseJSON.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
    })

    $("#formEdit").submit(function (e) {
        e.preventDefault();
        var form = $("#formEdit")
        const url = form.attr("action");
        var formData = form.serialize();
        $.ajax({
            url:url,
            type:"post",
            cache:false,
            data:formData,
            success:function (data) {
                $("#modal-edit").modal('hide');
                $('#table-cg').DataTable().destroy();
                initDatatable();
                Swal.fire({
                    position:'top-end',
                    icon:'success',
                    title:data.message,
                    showConfirmButton:false,
                    timer:1500
                });
            },
            error:function (err) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: err.responseJSON.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    })

    $("#department").change(function () {
        var value = $(this).val();
        $('#sub-department').html();
        if(value){
            $.ajax({
            type: "GET",
            url: "{{ route('get.sub.department') }}?id_department="+value,
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_subdepartment+'">'+res.data[i].nama_subdepartment+'</option>';
                }
                $('#sub-department').html(option);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                alert(xhr.status);
                alert(thrownError);
            }
        })
        }
    });

    $(document).ready(function() {
        var $modal = $('#modal');
        var image = document.getElementById('sample_image');
        var cropper;
        $('#upload_image').change(function(event){
		    var files = event.target.files;
            var done = function(url){
                image.src = url;
                $modal.modal('show');
            };

            if(files && files.length > 0){
                reader = new FileReader();
                reader.onload = function(event)
                {
                    done(reader.result);
                };
                reader.readAsDataURL(files[0]);
            }
	    });

        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview:'.preview'
            });
        }).on('hidden.bs.modal', function(){
            cropper.destroy();
            cropper = null;
        });

        $('#crop').click(function(){
            canvas = cropper.getCroppedCanvas({
                width:400,
                height:400
		    });

            canvas.toBlob(function(blob){
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function(){
                    var base64data = reader.result;
                    var fileInput = document.getElementById('#myInputID');
                    $('#uploaded_image').attr('src', base64data);
                    $('#base64').attr('value', base64data);
                    $modal.modal('hide');
                    // alert()
                    // $.ajax({
                    //     url:'upload.php',
                    //     method:'POST',
                    //     data:{image:base64data},
                    //     success:function(data)
                    //     {
                    //     }
                    // });
                };
            });
        });

        initDatatable();
        getDivisi();
        getJabatan();
        getLevel();
        getDepartment();
        // getSubDepartment();
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