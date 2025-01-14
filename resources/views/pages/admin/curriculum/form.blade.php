<input type="hidden" name="id_curriculum" value="{{$curriculum->id_curriculum}}">
<div class="form-group col-md">
  <label for="noModule">No Competency</label>
  <input type="text" class="form-control" id="no_training_module" name="no_training_module" placeholder="004/KMI/HRD-RT/SAL/004" value="{{$curriculum->no_training_module}}">
</div>
<div class="form-group col-md">
  <label for="skillCategory">Skill Category</label>
  <select id="id_skill_category" class="form-control form-control-sm" name="id_skill_category">
      <option value="">Pilih Skill Category</option>
      @foreach($skills as $skill)
        <option {{($skill->id_skill_category == $curriculum->id_skill_category) ? 'selected' : ''}} value="{{$skill->id_skill_category}}">{{$skill->skill_category}}</option>
      @endforeach
  </select>
</div>
<div class="form-group col-md">
  <label for="training_module">Competency</label>
  <input type="text" class="form-control" value="{{$curriculum->training_module}}" id="training_module" name="training_module" placeholder="Masukan Competency Name">
</div>
<div class="form-group col-md">
  <label for="noModule">Level</label>
  <select class="form-control form-control-sm" id="level" name="level">
      <option value="">Pilih Level</option>
      <option {{($curriculum->level == "I") ? 'selected' : ''}} value="I">I</option>
      <option {{($curriculum->level == "A") ? 'selected' : ''}} value="A">A</option>
      <option {{($curriculum->level == "B") ? 'selected' : ''}} value="B">B</option>
  </select>
</div>
<div class="form-group col-md">
  <label for="training_module_group">Competency Group</label>
  <input type="text" class="form-control" id="training_module_group" name="training_module_group" value="{{$curriculum->training_module_group}}" placeholder="New Employee Orientation, Ext" >
</div>
<div class="form-group col-md">
  <label for="noModule">Competency Desc</label>
  <textarea class="form-control" id="training_module_desc" name="training_module_desc" rows="3">{!!$curriculum->training_module_desc!!}</textarea>
</div>
<div class="form-group col-md">
  <label for="noModule">Job Title CG</label>
  <select class="form-control selectpicker form-control-sm" id="id_job_titles" name="id_job_title[]" data-live-search="true" data-hide-disabled="true" multiple data-actions-box="true">
      <option value="">Pilih Job Title</option>
      @foreach($jabatans as $jabatan)
        <option {{($jabatan->sts == 1) ? 'selected' : ''}} value="{{$jabatan->id_job_title}}">{{$jabatan->nama_job_title}}</option>
      @endforeach
  </select>
</div>

<script>
  $(document).ready(function () {
    fetchJobTitle();
  })
  
  function fetchJobTitle() {
    var option = '<option value="ui">Contoh</option>';
    $("#id_job_titles").selectpicker('refresh');
  }
</script>