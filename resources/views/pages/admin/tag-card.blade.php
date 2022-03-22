@extends('layouts.master')

@section('title', 'Tagging Card')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title"><center>COMPETENCY TAG</center></p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/tpm.png') }}" alt="Logo TPM" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group row mb-0">
                            <label for="no" class="col-sm-3 col-form-label">No</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control form-control-sm" id="no" placeholder="0">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="no" class="col-sm-3 col-form-label">Year</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="no" class="col-sm-3 col-form-label">Period</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row mb-0">
                            <label for="no" class="col-sm-3 col-form-label">No</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control form-control-sm" id="no" placeholder="0">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="no" class="col-sm-3 col-form-label">Year</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="no" class="col-sm-3 col-form-label">Period</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0">
                            </div>
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