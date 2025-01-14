@extends('layouts.master')

@section('title', 'Master Grade Page ')

@section('content')
<div class="row">
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Grade</p>
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
                                        <th>Name Grade</th>
                                        <th  width="15%">Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    @foreach($data as $data)
                                    <tr id="row_{{$data->id_grade}}"> 
                                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                        <td>
                                        @php
                                            switch ($data->grade) {
                                                case "Bronze":
                                                    echo '<span class="badge badge-secondary">Bronze</span>';
                                                    break;
                                                case "Silver":
                                                    echo '<span class="badge badge-secondary">Silver</span>';
                                                    break;
                                                case "Gold":
                                                    echo '<span class="badge badge-warning">Gold</span>';
                                                    break;
                                                case "Platinum":
                                                    echo '<span class="badge badge-warning">Platinum</span>';
                                                    break;
                                                case "Diamond":
                                                    echo '<span class="badge badge-primary">Diamond</span>';
                                                    break;
                                                case "Elite":
                                                    echo '<span class="badge badge-primary">Elite</span>';
                                                    break;  
                                                case "Master":
                                                    echo '<span class="badge badge-success">Master</span>';
                                                    break;  
                                                default:
                                                echo "Your favorite color is neither red, blue, nor green!";
                                                }
                                        @endphp
                                        </td>
                                        <td>
                                            <button data-id="{{ $data->id_grade }}" onclick="editdata(this)" class="btn btn-inverse-success btn-icon delete-button mr-1 mr-1 Edit-button" data-toggle="modal" data-target="#modal-edit"><i class="icon-file menu-icon"></i></button>
                                            <button data-id="{{ $data->id_grade }}" class="btn btn-inverse-danger btn-icon mr-1 cr-hapus" data-toggle="modal" data-target="#modal-hapus">
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
            <form action="{!! route('Grade.post') !!}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="form-row">
                    <div class="col mb-3">
                        <label>Grade Name</label>
                        <input type="text" class="form-control form-control-sm" name="grade" placeholder="Masukan nama grade">
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
 

  function getJabatan(){
      $.ajax({
          type: "GET",
          url: "{{ route('get.jabatan') }}",
          success: function(res) {
              var option = "";
              for (let i = 0; i < res.data.length; i++) {
                  option += '<option value="'+res.data[i].id_job_title+'">'+res.data[i].nama_job_title+'</option>';
              }
              $("#id_job_title").html(option).selectpicker('refresh');
          },
          error: function (xhr, ajaxOptions, thrownError) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: response.responseJSON.errors,
                  showConfirmButton: false,
                  timer: 1500
              })
          }
      })
  }


    // function initDatatable() {
    //     var dtJson = $('#table-grade').DataTable({
    //         ajax: "{{ route('Grade') }}",
    //         autoWidth: false,
    //         serverSide: true,
    //         processing: true,
    //         aaSorting: [
    //             [0, "desc"]
    //         ],
    //         searching: true,
    //         dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
    //         displayLength: 10,
    //         lengthMenu: [10, 15, 20],
    //         language: {
    //             paginate: {
    //                 // remove previous & next text from pagination
    //                 previous: '&nbsp;',
    //                 next: '&nbsp;'
    //             }
    //         },
    //         scrollX: true,
    //         columns: [
    //             {
    //                 data: 'DT_RowIndex', name: 'DT_RowIndex'
    //             },
    //             {
    //                 data: 'id_grade'
    //             },
    //             {
    //                 data: 'name_grade'
    //             },
    //             {
    //                 data: 'action'
    //             }
    //         ],
    //     })
    // }
</script>
@endpush