{{ csrf_field() }}
<div class="form-group {{ $errors->has('val') ? ' has-error' : '' }} ">
    <label for="val" class="col-md-4 control-label">Величина</label>
    <div class="col-md-5">
        <input id="val" type="text" class="form-control" name="val"
        value="@if(!empty($discount)){{$discount->val}}@else{{old('val')}}@endif" required />
    </div>
</div>
<div class="form-group {{ $errors->has('des') ? ' has-error' : '' }} ">
    <label for="des" class="col-md-4 control-label">Описание</label>
    <div class="col-md-5">
        <input id="des" type="text" class="form-control" name="des"
        value="@if(!empty($discount)){{$discount->des}}@else{{old('des')}}@endif" required/>
    </div>
</div>
