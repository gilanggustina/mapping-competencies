@extends('layouts.master')

@section('title', 'Tagging Card')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title"><center>COMPETENCY TAG</center></p>
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <img src="{{ asset('assets/images/tpm.png') }}" alt="Logo TPM" class="m-auto img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">No</label>
                            <div class="col-sm-9 m-auto">
                                <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Year</label>
                            <div class="col-sm-9 m-auto">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Period</label>
                            <div class="col-sm-9 m-auto">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Circle Group</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Compentency</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative container px-3">
                        <div class="col-md-12 mt-3 p-3 rounded border border-dark">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <div class="col-md-12 rounded border border-dark d-flex p-1">
                                            <label class="col-md-10 col-form-label">Existing</label>
                                            <div class="col-md-2 px-0">
                                                <img class="img-thumbnail" style="width:45px;height:45px" src="{!!asset('assets/images/point/3.png')!!}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <div class="col-md-12 rounded border border-dark p-1 d-flex">
                                            <label class="col-md-10 col-form-label">Target</label>
                                            <div class="col-md-2 px-0">
                                                <img class="img-thumbnail" style="width:45px;height:45px" src="{!!asset('assets/images/point/3.png')!!}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <div class="col-md-12 rounded border border-dark p-1 d-flex">
                                            <label class="col-sm-5 col-form-label">Date Open</label>
                                            <div class="col-sm-7 m-auto">
                                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <div class="col-md-12 rounded border border-dark p-1 d-flex">
                                            <label class="col-sm-5 col-form-label">Due Date</label>
                                            <div class="col-sm-7 m-auto">
                                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="position-relative container px-3 mt-3">
                        <div class="col-md-12 p-3 rounded border border-dark py-3">
                            <div class="row">
                                <div class="form-group col-md-12 row mb-0 mx-2 d-flex">
                                    <label class="col-sm-3 col-form-label">Learning Method</label>
                                    <div class="col-sm-9 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row mb-0 mx-2 d-flex">
                                    <label class="col-sm-3 col-form-label">Trainer</label>
                                    <div class="col-sm-9 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row mb-0 mx-2 d-flex">
                                    <label class="col-sm-3 col-form-label">Date Plan Implementation</label>
                                    <div class="col-sm-9 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row mb-0 mx-2 d-flex">
                                    <label class="col-sm-3 col-form-label">Notes Learning Implementation</label>
                                    <div class="col-sm-9 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row mb-0 mx-2 d-flex">
                                    <label class="col-sm-3 col-form-label">Date Closed</label>
                                    <div class="col-sm-9 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row mb-0 mx-2 d-flex">
                                    <label class="col-sm-3 col-form-label">Training Hours</label>
                                    <div class="col-sm-4 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                    <div class="col-sm-1 m-auto px-0 text-center">
                                        -
                                    </div>
                                    <div class="col-sm-4 m-auto">
                                        <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Date Verified</label>
                            <div class="col-sm-9 m-auto">
                                <input type="number" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Verified By</label>
                            <div class="col-sm-9 m-auto">
                                <input type="text" class="form-control form-control-sm" id="no" placeholder="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Result Score</label>
                            <div class="col-md-9">
                                <img class="img-thumbnail" style="width:45px;height:45px" src="{!!asset('assets/images/point/3.png')!!}" alt="">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Notes For Result</label>
                            <div class="col-sm-9 m-auto">
                                <textarea class="form-control form-control-sm" name="" id="" rows="5"></textarea>
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