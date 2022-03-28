@extends('layouts.master')

@section('title', 'Curriculum')

@push('style')
<style>
    .swal2-popup {
        font-size: 2rem;
    }
</style>
@endpush
@section('content')
 
<div class="row">
    
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Curriculum</p>
                <div class="row">
                    <div class="col-md mb-2">
                        <a class="btn btn-success float-right" href="javascript:void(0)" id="createNewItem" data-toggle="modal" data-target="#modal-tambah"><i class="icon-plus"></i> Tambah Curriculum</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.#</th>
                                        <th>No Training Module</th>
                                        <th>Skill Category</th>
                                        <th>Training Module</th>
                                        <th>Level</th>
                                        <th>Training Module Group</th>
                                        <th>Training Module Description</th>
                                        <th>Job Title CG</th>
                                        <th width="15%">Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    @foreach($data as $data)
                                        <tr id="row_{{$data->id}}">
                                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $data->no_training_module  }}</td>
                                        <td>{{ $data->skill_category }}</td>
                                        <td>{{ $data->training_module }}</td>
                                        <td>{{ $data->level }}</td>
                                        <td>{{ $data->training_module_group }}</td>
                                        <td>{{ $data->training_module_desc }}</td>
                                        <td>{{ $data->nama_job_title }}</td>
                                        <td>
                                            <button data-id="{{ $data->id }}" onclick="editdata(event.target)" class="btn btn-inverse-success btn-icon delete-button mr-1 mr-1 Edit-button"><i class="icon-file menu-icon"></i></button>
                                            <button data-id="{{ $data->id }}" class="btn btn-inverse-danger btn-icon mr-1" data-toggle="modal" data-target="#modal-cr-hapus" onclick="deletedata(event.target)"><i class="icon-trash"></i></button>
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
              <h5 class="modal-title" id="modal-tambahLabel">Tambah Data Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="modal-body">
            <div class="form-group col-md">
                <label for="noModule">No Training Module</label>
                <input type="text" class="form-control" id="no_training_module" name="no_training_module" placeholder="004/KMI/HRD-RT/SAL/004" >
            </div>
            <div class="form-group col-md">
                <label for="skillCategory">Skill Category</label>
                <select id="id_skill_category" class="form-control form-control-sm" name="id_skill_category">
                    <option value="">Pilih Skill Category</option>
                </select>
            </div>
            <div class="form-group col-md">
                <label for="training_module">Training Module</label>
                <input type="text" class="form-control" id="training_module" name="training_module" placeholder="Masukan Training Module Name">
            </div>
            <div class="form-group col-md">
                <label for="noModule">Level</label>
                <select class="form-control form-control-sm" id="level" name="level">
                    <option value="">Pilih Level</option>
                    <option value="I">I</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            </div>
            <div class="form-group col-md">
                <label for="training_module_group">Training Module Group</label>
                <input type="text" class="form-control" id="training_module_group" name="training_module_group" placeholder="New Employee Orientation, Ext" >
            </div>
            <div class="form-group col-md">
                <label for="noModule">Training Module Desc</label>
                <textarea class="form-control" id="training_module_desc" name="training_module_desc" rows="3"></textarea>
            </div>
            <div class="form-group col-md">
                <label for="noModule">Job Title CG</label>
                <select id="id_job_title" class="form-control form-control-sm" name="id_job_title">
                    <option value="">Pilih Jabatan</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
        </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-cr-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog">
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

@endsection
@push('script')
<script>
 $('#laravel_crud').DataTable();

  function editPost(event) {
    var id  = $(event).data("id");
    let _url = `/curriculum-edit/${id}`;
    $('#titleError').text('');
    $('#descriptionError').text('');
    
    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
          if(response) {
            $("#post_id").val(response.id);
            $("#title").val(response.title);
            $("#description").val(response.description);
            $('#modal-tambah').modal('show');
          }
      }
    });
  }

  function createPost() {
    let _url     = `{{ route('Curriculum.post') }}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: "POST",
        // data : $("#registerSubmit").serialize(),
        data: {
        //   id_curriculum: id_curriculum,
          no_training_module: $('#no_training_module').val(),
          id_skill_category: $('#id_skill_category').val(), 
          training_module:  $('#training_module').val(),
          level: $('#level').val(),
          training_module_group: $('#training_module_group').val(),
          training_module_desc: $('#training_module_desc').val(),
          id_job_title: $('#id_job_title').val(),
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
        //   $('#titleError').text(response.responseJSON.errors.title);
        //   $('#descriptionError').text(response.responseJSON.errors.description);
        }
      });
  }

  function deletedata(event) {
    $('#modal-delete').modal('show');

    var id  = $(event).data("id");
    let _url = `/curriculum-delete/${id}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: 'DELETE',
        data: {
          _token: _token
        },
        success: function(response) {
          $("#row_"+id).remove();
          Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Data has been delete',
                    showConfirmButton: false,
                    timer: 1500
                })
        }
      });
  }

//   $('#table-berita-daerah').on('click','.delete-button', function () {
//             $('.modal-footer a').attr('href',"{{ url('manajemen-berita-daerah/delete/') }}/"+$(this).data('id'));
//         })

    function getSkill(){
            $.ajax({
                type: "GET",
                url: "{{ route('get.skill') }}",
                success: function(res) {
                    var option = "";
                    for (let i = 0; i < res.data.length; i++) {
                        option += '<option value="'+res.data[i].id_skill_category+'">'
                            +res.data[i].skill_category+'</option>';
                    }
                    $('#id_skill_category').html();
                    $('#id_skill_category').append(option);
                },
                error: function (response) {
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

    function getJabatan(){
        $.ajax({
            type: "GET",
            url: "{{ route('get.jabatan') }}",
            success: function(res) {
                var option = "";
                for (let i = 0; i < res.data.length; i++) {
                    option += '<option value="'+res.data[i].id_job_title+'">'+res.data[i].nama_job_title+'</option>';
                }
                $('#id_job_title').html();
                $('#id_job_title').append(option);
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

    $(document).ready(function() {
        getSkill();
        getJabatan();
    });
</script>
@endpush