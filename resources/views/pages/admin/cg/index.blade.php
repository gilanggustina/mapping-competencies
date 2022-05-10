@extends('layouts.master')

@section('title', 'Master Grade Page ')

@section('content')
<div class="row">
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Liga Circle Group</p>
                <div class="row">
                    <div class="col-md mb-2">
                        <a class="btn btn-success float-right" href="javascript:void(0)" id="createNewItem" data-toggle="modal" data-target="#modal-tambah"><i class="icon-plus"></i> Tambah Grade</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table table-sm table-striped table-hover" id="table-grade" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Circle Group</th>
                                        <th>Department</th>
                                        <th width="15%">Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    @foreach($data as $data)
                                    <tr id="row_{{$data->id_cg}}"> 
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama_cg  }}</td>
                                        <td>{{ $data->dp  }}</td>
                                        <td>
                                            <button data-id="{{ $data->id_cg }}" onclick="editdata(this)" class="btn btn-inverse-success btn-icon delete-button mr-1 mr-1 Edit-button" data-toggle="modal" data-target="#modal-edit"><i class="icon-file menu-icon"></i></button>
                                            <button data-id="{{ $data->id_cg }}" class="btn btn-inverse-danger btn-icon mr-1 cr-hapus" data-toggle="modal" data-target="#modal-hapus">
                                                <i class="icon-trash">
                                            </i></button>
                                        </td>
                                    </tr>
                                @endforeach
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
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-header p-3">
              <h5 class="modal-title" id="modal-tambahLabel">Tambah Data Grade</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{!! route('CG.post') !!}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="form-row">
                    <div class="col mb-3">
                        <label>Nama CG</label>
                        <input type="text" class="form-control form-control-sm" name="name_cg" placeholder="Nama Circle Group">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label>Department</label>
                        <select id="department" class="form-control form-control-sm" name="department">
                            <option value="">Pilih Department</option>
                        </select>
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
<script>
   $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({
            animation: true,
            plaGradent: "top",
            trigger: "hover focus"
        });

        getDepartment();
    });

    
 $('#table-grade').DataTable();

function editPost(event) {
  var id  = $(event).data("id");
  let _url = "{!!route('editGrade')!!}";
  var GradeEditForm = $("#formEditGrade");
  var formData = GradeEditForm.serialize();
  $.ajax({
    url: _url,
    type: "post",
    data: formData,
    success: function(response) {
      if(response.code == 200) {
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 1500
          })
          $('#modal-edit').modal('hide');
          location.reload();
      }
    },
    error:function (err) {
      console.log(err)
      Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: err.responseJSON.message,
          showConfirmButton: false,
          timer: 1500
      })
    }
  });
}

function editdata(el) {
  var id = $(el).attr("data-id");
  $.ajax({
      url:"{!!route('getFormEditGrade')!!}?id="+id,
      mehtod:"get",
      success:function (html) {
          $("#form-edit").html(html);
      }
  })
}

function createPost() {
  let _url     = `{{ route('Grade.post') }}`;
  let _token   = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
      url: _url,
      type: "POST",
      // data : $("#registerSubmit").serialize(),
      data: {
      //   id_Grade: id_Grade,
        id_grade: $('#id_grade').val(),
        name_grade: $('#name_grade').val(), 
        _token: _token
      },
      success: function(response) {
          if(response.code == 200) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Your work has been saved',
                  showConfirmButton: false,
                  timer: 1500
              })
          }
          $('#title').val('');
          $('#description').val('');
          
          $('#modal-tambah').modal('hide');
          location.reload();
      },
      error: function(err) {
          console.log(err)
          Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: err.responseJSON.message,
                  showConfirmButton: false,
                  timer: 1500
              })
      }
    });
}

  $('#table-cr').on('click','.cr-hapus', function () {
      var id = $(this).data('id');
      $('#btnHapus').attr('data-id',id);
  })

  function deleteGrade(el) {
      var id = $(el).attr("data-id");
      var token = $("meta[name='csrf-token']").attr("content");
      var rowid = '#row_'+id;
      $.ajax({
          url:"grade/grade-delete/"+id,
          mehtod:"delete",
          data: {
              "id": id,
              "_token": token,
          },
          success:function(res)
          {
              console.log(res);
              $("#modal-hapus").modal('hide');
              window.location.reload();
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

    function createPost() {
    let _url     = `{{ route('CG.post') }}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    const data = $("#formCreate").serialize();
      $.ajax({
        url: _url,
        type: "POST",
        data: data,
        cache:false,
        success: function(response) {
            if(response.code == 200) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            $('#no_training_module').val(''),
            $('#id_skill_category').val(''), 
            $('#training_module').val(''),
            $('#level').val(''),
            $('#training_module_group').val(''),
            $('#training_module_desc').val(''),
            $('#id_job_title').val(''),
            $('#title').val('');
            $('#description').val('');
            $('#modal-tambah').modal('hide');
            location.reload();
        },
        error: function(err) {
            console.log(err)
            Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: err.responseJSON.message,
                    showConfirmButton: false,
                    timer: 1500
                })
        }
      });
  }
</script>
@endpush