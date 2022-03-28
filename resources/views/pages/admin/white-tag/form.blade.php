<input type="hidden" name="user_id" value="{{$user->id}}">
<input type="hidden" name="type" value="{{$type}}">
@forelse ($comps as $key => $comp)
    <tr>
        <input type="hidden" name="data[{{$key}}][id]" value="{{$comp->id_directory}}">
        <td>{{$key+1}}</td>
        <td>{{$comp->no_training}}</td>
        <td>{{$comp->skill_category}}</td>
        <td>{{$comp->training_module}}</td>
        <td>{{$comp->level}}</td>
        <td>{{$comp->training_module_group}}</td>
        <td>
            <select class="form-control" name="data[{{$key}}][start]" id="selectStart{{$key}}">
                <option value="0" {{($comp->start  == '0' || $comp->start == null ) ? 'selected' : ''}}>0</option>
                <option value="1" {{$comp->start  == '1' ? 'selected' : ''}}>1</option>
                <option value="2" {{$comp->start  == '2' ? 'selected' : ''}}>2</option>
                <option value="3" {{$comp->start  == '3' ? 'selected' : ''}}>3</option>
                <option value="4" {{$comp->start  == '4' ? 'selected' : ''}}>4</option>
                <option value="5" {{$comp->start  == '5' ? 'selected' : ''}}>5</option>
            </select>
        </td>
        <td>
            <select class="form-control" name="data[{{$key}}][actual]" id="selectActual{{$key}}">
                <option value="0" {{($comp->actual  == '0' || $comp->actual == null) ? 'selected' : ''}}>0</option>
                <option value="1" {{$comp->actual  == '1' ? 'selected' : ''}}>1</option>
                <option value="2" {{$comp->actual  == '2' ? 'selected' : ''}}>2</option>
                <option value="3" {{$comp->actual  == '3' ? 'selected' : ''}}>3</option>
                <option value="4" {{$comp->actual  == '4' ? 'selected' : ''}}>4</option>
                <option value="5" {{$comp->actual  == '5' ? 'selected' : ''}}>5</option>
            </select>
        </td>
        <td>
            <input class ="form-control" type="text" value="{{$comp->target}}" disabled>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="9" class="text-center">
            Data Kompetensi untuk job title terkait tidak tersedia
        </td>
    </tr>
@endforelse