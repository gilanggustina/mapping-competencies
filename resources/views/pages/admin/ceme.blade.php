@extends('layouts.master')

@section('title', 'CEME')

@section('content')
<div class="row">
</div>
<div class="row">
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Graphic CEME</h4>
            <canvas id="barChart"></canvas>
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
            <form action="{!!route('actionWhiteTag')!!}" method="POST" enctype="multipart/form-data">
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

    function initDatatable() {
        var dtJson = $('#table-ceme').DataTable({
            ajax: "{{ route('WhiteTagMember') }}",
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
      type: 'pie',
      data: data,
      options: options
    });
  }
})
</script>
@endpush