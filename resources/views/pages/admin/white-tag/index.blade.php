@extends('layouts.master')

@section('title', 'White Tag General')
@push('style')
<style>
     
.panel-title a:after {
    font-family:Fontawesome;
    content:'\f077';
    float:right;
    font-size:10px;
    font-weight:300;
}
.panel-title a.collapsed:after {
    font-family:Fontawesome;
    content:'\f078';
}
.accordion {
        width: 100%;
    }

    .card-header {
        padding: 1.2rem !important;
        border-radius: 40px !important;
    }

</style>
@endpush
@section('content')
<div class="row">
    <div class="col-md-7 grid-margin stretch-card mb-0">
    <div id="accordion" class="accordion">
        <div class="card">
            <div class="card-header card-title" data-toggle="collapse" href="#collapseOne">
            Key Point General
            </div>
            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion" aria-expanded="true">
                <img src="{{ asset('assets/images/general.png') }}" alt="General" class="mt-2 p-3" style="width:100%;display: block;margin-left: auto;margin-right: auto; ">
                {{-- <img src="{{ asset('assets/images/General.png') }}" alt="General" class="img-accordion"> --}}
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card mb-0 pl-0">
        <div id="accordion-gen" class="accordion">
        <div class="card">
            <div class="card-header card-title" data-toggle="collapse" href="#graphgen">
                Graphic White Tag General
                </div>
                <div id="graphgen" class="card-body collapse show" data-parent="#accordion-gen" aria-expanded="true">
                    <canvas id="barChart" class="mb-2"></canvas>
                </div>

          {{-- <div class="card-body">
            <h4 class="card-title">Graphic White Tag General</h4>
          </div> --}}
        </div>
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">White Tag</p>
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="#pills-home" type="button">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pills-profile" type="button">White Tag All</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 flex">
                        <div class="tab-pane container fade in active show" id="pills-home">
                            <div class="table-responsive">
                                <table class="display nowrap expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Nama Anggota</th>
                                            <th>Job Title</th>
                                            <th>Dept</th>
                                            <th>Divisi</th>
                                            <th>Liga CG</th>
                                            <th class="text-center">Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="pills-profile">
                            @if(Auth::user()->peran_pengguna == '1')
                                <a href="{!!route('exportWhiteTagAll')!!}" class="btn btn-inverse-info float-left mb-2">Export</a>
                            @endif
                            <div class="table-responsive">
                                <table class="display nowrap expandable-table table-striped table-hover" id="table-white-tag-all" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Nama Anggota</th>
                                            <th>No Competency</th>
                                            <th>Skill Category</th>
                                            <th>Competency</th>
                                            <th>Level</th>
                                            <th>Competency Group</th>
                                            <th>Start</th>
                                            <th>Actual</th>
                                            <th>Target</th>
                                        </tr> 
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
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
                <h5 class="modal-title" id="modal-tambahLabel">Edit White Tag General</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{!!route('actionWhiteTag')!!}" id="formWhiteTag" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class=" display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">No</th>
                                    <th rowspan="2">No. Competency</th>
                                    <th rowspan="2">Skill Category</th>
                                    <th rowspan="2">Competency</th>
                                    <th rowspan="2">Level</th>
                                    <th rowspan="2">Competency Group</th>
                                    <th colspan="3" class="text-center">Action</th>
                                </tr> 
                                <tr>
                                    <th class="text-center" style="width:90px">Start</th>
                                    <th class="text-center" style="width:90px">Actual</th>
                                    <th class="text-center" style="width:90px">Target</th>
                                </tr>
                            </thead>
                            <tbody id="formMapComp"></tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="submitWhiteTag" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-detailLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header p-3">
                <h5 class="modal-title" id="modal-detailLabel">Detail White Tag General</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class=" display expandable-table table-striped table-hover" id="table-detail" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>No Competency</th>
                                <th>Skill Category</th>
                                <th>Competency</th>
                                <th>Level</th>
                                <th>Competency Group</th>
                                <th class="text-center">Start</th>
                                <th class="text-center">Actual</th>
                                <th class="text-center">Target</th>
                            </tr> 
                        </thead>
                        <tbody id="formMapComp"></tbody>
                    </table>
                </div>
            </div>
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
  $(document).ready(function () {
    $(".nav-pills a").click(function(){
        $(this).tab('show');
    });
    $('.nav-pills a').on('show.bs.tab', function(){
        $('.tab-pane').each(function(i,obj){
            if(!$(this).hasClass("active")){
                $(this).show()
            }else{
                $(this).hide()
            }
        });
    })

      whiteTagAllDataTable();
      initDatatable();
      $('[data-toggle="tooltip"]').tooltip({
          animation: true,
          placement: "top",
          trigger: "hover focus"
      });

    $("#submitWhiteTag").click(function (e) {
        e.preventDefault()
        var form = $("#formWhiteTag")
        const url = form.attr("action");
        var formData = form.serialize();
        $.ajax({
            url:url,
            type:"post",
            cache:false,
            data:formData,
            success:function(data){
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
            error:function(err){
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

  });


  function getMapComp(id) {
      const url = "{!! route('formWhiteTag') !!}?id="+id+"&type=general";
      $.ajax({
          url:url,
          cache:false,
          success: function(html) {
              $("#formMapComp").html(html);
          },
          error: function(req, sts, err) {
              console.log(err);
          }

      });
  }

  function detailWhiteTag(id) {
      const url = "{{ route('detailWhiteTag') }}?id="+id+"&type=general";
      $('#table-detail').DataTable().destroy();
      var dtJson = $('#table-detail').DataTable({
          ajax:  url,
          autoWidth: true,
          serverSide: true,
          processing: true,
          searching: true,
          dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
          displayLength: 10,
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
                  data: 'no_training'
              },
              {
                  data: 'skill_category'
              },
              {
                  data: 'training_module'
              },
              {
                  data: 'level'
              },
              {
                  data: 'training_module_group'
              },
              {
                  data: 'start'
              },
              {
                  data: 'actual'
              },
              {
                  data: 'target'
              }
          ]
      });

  }



  function initDatatable() {
      var dtJson = $('#table-cg').DataTable({
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

  function whiteTagAllDataTable(){
    var dtJson = $('#table-white-tag-all').DataTable({
          ajax: "{{ route('whiteTagAll') }}",
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
                  data: 'no_training_module'
              },
              {
                  data: 'skill_category'
              },
              {
                  data: 'training_module'
              },
              {
                  data: 'level'
              },
              {
                  data: 'training_module_group'
              },
              {
                  data: 'start'
              },
              {
                  data: 'actual'
              },
              {
                  data:'target'
              }
          ],
      })
  }

  $(function() {
    'use strict';
    var data = {
        labels: ["2013", "2014", "2014", "2015", "2016", "2017"],
        datasets: [{
        label: '# of Votes',
        data: [10, 19, 3, 5, 2, 3],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: false
        }]
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
      
      if ($("#barChart").length) {
          var barChartCanvas = $("#barChart").get(0).getContext("2d");
          // This will get the first returned node in the jQuery collection.
          var barChart = new Chart(barChartCanvas, {
          type: 'bar',
          data: data,
          options: options
          });
      }
  })

</script>
@endpush