@extends('layouts.master')

@section('title', 'Member CG')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Member CG</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <!-- <tr>
                                        <th>No Training Module#</th>
                                        <th>Skill Category</th>
                                        <th>Training Module</th>
                                        <th>Level</th>
                                        <th>Training Module Group</th>
                                        <th>Training Module Description</th>
                                        <th>Action</th>
                                    </tr> -->
                                    <tr>
                                        <th>No#</th>
                                        <th>Nama Karyawan</th>
                                        <th>Tgl Masuk
                                            <small>(Berdasarkan job level terakhir)</small>
                                        </th>
                                        <th>Department</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $user)
                                    <tr>
                                        <td>{{ $user->id_user }}</td>
                                        <td>{{ $user->nama_user }}</td>
                                        <td>{{ $user->tgl_masuk }}</td>
                                        <td>{{ $user->tgl_masuk }}</td>
                                        <td>{{ $user->tgl_masuk }}</td>
                                        <td>{{ $user->tgl_masuk }}</td>
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

@endsection
@push('script')

@endpush