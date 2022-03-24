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
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Anggota</th>
                                        <th>Job Title</th>
                                        <th>Dept</th>
                                        <th>Liga CG</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Windy Kacaribu</td>
                                        <td>R&LD Staff</td>
                                        <td>Human Capital</td>
                                        <td>SALT</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#modal-tambah" class="btn btn-inverse-success btn-icon mr-1"><i class="icon-plus menu-icon"></i></button>
                                            <button data-toggle="modal" data-target="#modal-detail"  class="btn btn-inverse-info btn-icon"><i class="icon-eye"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Tagging List</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Skill Category</th>
                                        <th>Training Modules</th>
                                        <th>Level</th>
                                        <th>Training Modules Group</th>
                                        <th>Actual</th>
                                        <th>Target</th>
                                        <th>Actual vs Target</th>
                                        <th>Tagging Status</th>
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button data-toggle="modal" data-target="#modal-detail"  class="btn btn-inverse-info btn-icon"><i class="icon-eye"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
            <form action="" method="POST" enctype="multipart/form-data">
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
                    <select class="form-control form-control-sm" name="divisi">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Jabatan</label>
                    <select class="form-control form-control-sm" name="job_title">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Level</label>
                    <select class="form-control form-control-sm" name="level">
                        <option value="">Pilih</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Department</label>
                    <select class="form-control form-control-sm" name="department">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Sub Department</label>
                    <select class="form-control form-control-sm" name="sub_department">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Liga CG</label>
                    <select class="form-control form-control-sm" name="cg">
                        <option value="">Pilih</option>
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