@extends('layouts.master')

@section('title', 'CEME')

@section('content')
<div class="row">
</div>
<div class="row">
    <div class="col-md-5 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Graphic CEME</h4>
            <canvas id="pieChart"></canvas>
          </div>
        </div>
    </div>
    
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">CEME</p>
                <div class="row">
                    {{-- <div class="col-md mb-2">
                        <a class="btn btn-success float-right" href="javascript:void(0)" id="createNewItem" data-toggle="modal" data-target="#modal-tambah"><i class="icon-plus"></i> Tambah CEME</a>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table table-sm table-striped table-hover" id="table-ceme" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Job Title</th>
                                        <th>Department</th>
                                        <th>Level</th>
                                        <th>CG Name</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody >
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
            <form action="{!! route('actionCeme') !!}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
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
        initDatatable();
        $('[data-toggle="tooltip"]').tooltip({
            animation: true,
            placement: "top",
            trigger: "hover focus"
        });
    });

    
 $('#table-cr').DataTable();

function editPost(event) {
  var id  = $(event).data("id");
  let _url = "{!!route('editCurriculum')!!}";
  var curriculumEditForm = $("#formEditCurriculum");
  var formData = curriculumEditForm.serialize();
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
      url:"{!!route('getFormEditCurriculum')!!}?id="+id,
      mehtod:"get",
      success:function (html) {
          $("#form-edit").html(html);
      }
  })
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
      }
    });
}

  $('#table-cr').on('click','.cr-hapus', function () {
      var id = $(this).data('id');
      $('#btnHapus').attr('data-id',id);
  })

  function deleteCurriculum(el) {
      var id = $(el).attr("data-id");
      var token = $("meta[name='csrf-token']").attr("content");
      var rowid = '#row_'+id;
      $.ajax({
          url:"curriculum/curriculum-delete/"+id,
          mehtod:"delete",
          data: {
              "id": id,
              "_token": token,
          },
          success:function(res)
          {
              $("#modal-cr-hapus").modal('hide');
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

  $(document).ready(function() {        
      getJabatan();
      getSkill();
  });
  


    function initDatatable() {
        var dtJson = $('#table-ceme').DataTable({
            ajax: "{{ route('memberJson') }}",
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
                    data: 'nama_pengguna'
                },
                {
                    data: 'nama_job_title'
                },
                {
                    data: 'nama_department'
                },
                {
                    data: 'nama_divisi'
                },
                {
                    data: 'nama_cg'
                },
                {
                    data: 'action'
                }
            ],
        })
    }


$(function() {
    'use strict';
    var doughnutPieData = {
    datasets: [{
      data: [30, 40, 30, 20, 10],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Rezki',
      'Windy',
      'Chandra',
      'Maria',
      'Natha',
    ]
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  
  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }
  
})
</script>
@endpush