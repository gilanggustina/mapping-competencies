@extends('layouts.master')

@section('title', 'White Tag')

@section('content')
 
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">White Tag</p>
                <div class="row">
                    <div class="col-md mb-2">
                        <a class="btn btn-success float-right" href="javascript:void(0)" id="createNewItem" data-toggle="modal" data-target="#modal-tambah"><i class="icon-plus"></i> Tambah Competencies Directory</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="display expandable-table table-striped table-hover" id="table-cg" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No Training Module#</th>
                                        {{-- <th>Skill Category</th> --}}
                                        <th>Training Module</th>
                                        {{-- <th>Level</th>
                                        <th>Training Module Group</th>
                                        <th>Training Module Description</th>
                                        <th>Job Title CG</th> --}}
                                        <th>Action</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001/KMI/HRD-RT/SAL/001</td>
                                        {{-- <td>General Knowledge & Skills</td> --}}
                                        <td>Company Strategy</td>
                                        {{-- <td>Berisi penjelasan mengenai Sejarah Berdiri Perusahaan, Product Knowledge, Visi, Misi, Strategi & Core Value Perusahaan (3 Sun Credo)</td> --}}
                                        {{-- <td>
                                            <ul style="list-style-type:disc">
                                                <li>HRD Supervisor</li>
                                                <li>R&LD Staff</li>
                                                <li>HRD Admin</li>
                                                <li>Payroll & Secretary</li>
                                              </ul>
                                        </td> --}}
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="tooltip"   data-original-title="Edit" class="edit btn btn-sm btn-primary mr-1 Edit-button"><i class="icon-align-left menu-icon"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-hapus"   class="btn btn-sm btn-danger mr-1 delete-button"><i class="icon-trash"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-detail"   data-original-title="Detail" class="btn btn-sm btn-info detail-button"><i class="icon-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>002/KMI/HRD-RT/SAL/002</td>
                                        {{-- <td>General Knowledge & Skills</td> --}}
                                        <td>Orientation Department</td>
                                        {{-- <td>Berisi penjelasan mengenai tugas dan tanggung jawab dari masing-masing departemen dan struktur organisasi perusahaan</td> --}}
                                        {{-- <td>
                                            <ul style="list-style-type:disc">
                                                <li>HRD Supervisor</li>
                                                <li>R&LD Staff</li>
                                                <li>HRD Admin</li>
                                                <li>Payroll & Secretary</li>
                                              </ul>
                                        </td> --}}
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="tooltip"   data-original-title="Edit" class="edit btn btn-sm btn-primary mr-1 Edit-button"><i class="icon-align-left menu-icon"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-hapus"   class="btn btn-sm btn-danger mr-1 delete-button"><i class="icon-trash"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-detail"   data-original-title="Detail" class="btn btn-sm btn-info detail-button"><i class="icon-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>003/KMI/HRD-RT/SAL/003</td>
                                        {{-- <td>General Knowledge & Skills</td> --}}
                                        <td>KALBE Business Ethic</td>
                                        {{-- <td>Berisi tentang tata kelola etika bisnis di KALBE Group</td> --}}
                                        {{-- <td>
                                            <ul style="list-style-type:disc">
                                                <li>HRD Supervisor</li>
                                                <li>R&LD Staff</li>
                                                <li>HRD Admin</li>
                                                <li>Payroll & Secretary</li>
                                              </ul>
                                        </td> --}}
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="tooltip"   data-original-title="Edit" class="edit btn btn-sm btn-primary mr-1 Edit-button"><i class="icon-align-left menu-icon"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-hapus"   class="btn btn-sm btn-danger mr-1 delete-button"><i class="icon-trash"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="modal" data-target="#modal-detail"   data-original-title="Detail" class="btn btn-sm btn-info detail-button"><i class="icon-eye"></i></a>
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
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="judul_berita" placeholder="Nama Berita">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Peran Pengguna</label>
                        <div class="input-group">
                            <select class="form-control form-control-sm">
                                <option value="3">Admin</option>
                                <option value="2">CG Leader</option>
                                <option value="1">Pengguna</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <input type="text" name="email" class="form-control form-control-sm" placeholder="URL Berita">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tgl Masuk</label>
                        <div class="input-group">
                            <input type="date" id="birthday" name="tgl_masuk" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Gambar Berita</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="customFile">
                            <label class="custom-file-label" onclick="$('#file-uploader').click()" for="customFile">Choose file</label>
                          </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div> --}}
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

@endpush