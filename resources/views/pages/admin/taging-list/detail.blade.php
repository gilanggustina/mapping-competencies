<style>
  input[type="number"] 
{
    font-weight:0.7rem;
}

input[type="text"] 
{
  font-weight:0.7rem;
}
</style>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-4 d-flex">
          <img src="{{ asset('assets/images/tpm.png') }}" alt="Logo TPM" class="m-auto img-thumbnail">
      </div>
      <div class="col-md-8">
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">No</label>
              <div class="col-sm-9 m-auto">
                  <input type="number" value="{{$data->no_taging}}" class="form-control form-control-sm" placeholder="0" disabled>
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Year</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->year}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Period</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->period}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->name}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Circle Group</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->training_module_group}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Compentency</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->training_module}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="position-relative container px-3 mt-1">
          <div class="col-sm-12 rounded border border-dark">
              <div class="row">
                  <div class="col-md-6">
                      <div class="my-2">
                          <div class="col-sm-12 rounded border border-dark d-flex p-1">
                              <label class="col-md-10 col-form-label">Existing</label>
                              <div class="col-md-2 px-0">
                                  @php
                                      switch($data->actual){
                                        case 0:
                                          $existingUrl = asset('assets/images/point/0.png');
                                        break;
                                        case 1:
                                          $existingUrl = asset('assets/images/point/1.png');
                                        break;
                                        case 2:
                                          $existingUrl = asset('assets/images/point/2.png');
                                        break;
                                        case 3:
                                          $existingUrl = asset('assets/images/point/3.png');
                                        break;
                                        case 4:
                                          $existingUrl = asset('assets/images/point/4.png');
                                        break;
                                        case 5:
                                          $existingUrl = asset('assets/images/point/5.png');
                                        break;
                                        default:
                                          $existingUrl = "";
                                        break;
                                      }
                                  @endphp
                                  <img class="img-thumbnail" src="{{$existingUrl}}" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="my-2">
                          <div class="col-sm-12 rounded border border-dark p-1 d-flex">
                              <label class="col-md-10 col-form-label">Target</label>
                              <div class="col-md-2 px-0">
                                @php
                                  switch($data->target){
                                    case 0:
                                      $targetUrl = asset('assets/images/point/0.png');
                                    break;
                                    case 1:
                                      $targetUrl = asset('assets/images/point/1.png');
                                    break;
                                    case 2:
                                      $targetUrl = asset('assets/images/point/2.png');
                                    break;
                                    case 3:
                                      $targetUrl = asset('assets/images/point/3.png');
                                    break;
                                    case 4:
                                      $targetUrl = asset('assets/images/point/4.png');
                                    break;
                                    case 5:
                                      $targetUrl = asset('assets/images/point/5.png');
                                    break;
                                    default:
                                      $targetUrl = "";
                                    break;
                                  }
                                @endphp
                                  <img class="img-thumbnail" src="{{$targetUrl}}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="my-2">
                          <div class="col-sm-12 rounded border border-dark p-1 d-flex">
                              <label class="col-sm-5 col-form-label">Date Open</label>
                              <div class="col-sm-7 m-auto">
                                  <input type="text" value="{{$data->date_open}}" class="form-control form-control-sm"  placeholder="0" disabled>
                              </div>
                          </div>
                      </div>
                      <div class="my-2">
                          <div class="col-sm-12 rounded border border-dark p-1 d-flex">
                              <label class="col-sm-5 col-form-label">Due Date</label>
                              <div class="col-sm-7 m-auto">
                                  <input type="text" value="{{$data->due_date}}" class="form-control form-control-sm"  placeholder="0" disabled>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="position-relative container px-3 mt-1">
          <div class="col-sm-12 rounded border border-dark">
                  <div class="row mb-0 mx-2 d-flex">
                      <label class="col-sm-3 col-form-label">Learning Method</label>
                      <div class="col-sm-9 m-auto">
                          <input type="text" value="{{$data->learning_method}}" class="form-control form-control-sm"  placeholder="0" disabled>
                      </div>
                  </div>
                  <div class="row mb-0 mx-2 d-flex">
                      <label class="col-sm-3 col-form-label">Trainer</label>
                      <div class="col-sm-9 m-auto">
                          <input type="text" value="{{$data->trainer}}" class="form-control form-control-sm"  placeholder="0" disabled>
                      </div>
                  </div>
                  <div class="row mb-0 mx-2 d-flex">
                      <label class="col-sm-3 col-form-label">Date Plan Implementation</label>
                      <div class="col-sm-9 m-auto">
                          <input type="text" value="{{$data->date_plan_implementation}}" class="form-control form-control-sm"  placeholder="0" disabled>
                      </div>
                  </div>
                  <div class="row mb-0 mx-2 d-flex">
                      <label class="col-sm-3 col-form-label">Notes Learning Implementation</label>
                      <div class="col-sm-9 m-auto">
                        <textarea class="form-control form-control-sm" rows="5" disabled>{!!$data->notes_learning_implementation!!}</textarea>
                      </div>
                  </div>
                  <div class="row mb-0 mx-2 d-flex">
                      <label class="col-sm-3 col-form-label">Date Closed</label>
                      <div class="col-sm-9 m-auto">
                          <input type="text" value="{{$data->date_closed}}" class="form-control form-control-sm"  placeholder="0" disabled>
                      </div>
                  </div>
                  <div class="row mb-0 mx-2 d-flex">
                      <label class="col-sm-3 col-form-label">Training Hours</label>
                      <div class="col-sm-4 m-auto">
                          <input type="text" value="{{$data->start}}" class="form-control form-control-sm"  placeholder="0" disabled>
                      </div>
                      <div class="col-sm-1 m-auto px-0 text-center">
                          -
                      </div>
                      <div class="col-sm-4 m-auto">
                          <input type="text" value="{{$data->finish}}" class="form-control form-control-sm"  placeholder="0" disabled>
                      </div>
                  </div>
              
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Date Verified</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->date_verified}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Verified By</label>
              <div class="col-sm-9 m-auto">
                  <input type="text" value="{{$data->verified_by}}" class="form-control form-control-sm"  placeholder="0" disabled>
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Result Score</label>
              <div class="col-md-9">
                @php
                  switch($data->result_score){
                    case 0:
                      $scoreUrl = asset('assets/images/point/0.png');
                    break;
                    case 1:
                      $scoreUrl = asset('assets/images/point/1.png');
                    break;
                    case 2:
                      $scoreUrl = asset('assets/images/point/2.png');
                    break;
                    case 3:
                      $scoreUrl = asset('assets/images/point/3.png');
                    break;
                    case 4:
                      $scoreUrl = asset('assets/images/point/4.png');
                    break;
                    case 5:
                      $scoreUrl = asset('assets/images/point/5.png');
                    break;
                    default:
                      $scoreUrl = "";
                    break;
                  }
                @endphp
                  <img class="img-thumbnail" style="width:45px;height:45px" src="{{$scoreUrl}}" alt="">
              </div>
          </div>
          <div class="row mb-0">
              <label class="col-sm-3 col-form-label">Notes For Result</label>
              <div class="col-sm-9 m-auto">
                  <textarea class="form-control form-control-sm" rows="5" disabled>{!!$data->notes_for_result!!}</textarea>
              </div>
          </div>
      </div>
    </div> 
  
  </div>
  {{-- <div class="col-md-4">
  </div> --}}
</div>
