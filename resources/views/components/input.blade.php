<div class="form-group ">
    <label>{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" placeholder="">
   <span class="text-danger">
      @error('name')
      {{$message}}
      @enderror
   </span>
  </div>
