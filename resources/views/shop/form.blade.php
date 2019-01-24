{{ csrf_field() }}
<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} ">
    <label for="name" class="col-md-4 control-label">Название</label>
    <div class="col-md-5">
        <input id="name" type="text" class="form-control" name="name"
        value="@if(!empty($shop)){{$shop->name}}@else{{old('name')}}@endif" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('site') ? ' has-error' : '' }} ">
    <label for="site" class="col-md-4 control-label">Сайт</label>
    <div class="col-md-5">
        <input id="site" type="text" class="form-control" name="site"
        value="@if(!empty($shop)){{$shop->site}}@else{{old('site')}}@endif" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('fio') ? ' has-error' : '' }} ">
    <label for="fio" class="col-md-4 control-label">ФИО</label>
    <div class="col-md-5">
        <input id="fio" type="text" class="form-control" name="fio"
        value="@if(!empty($shop)){{$shop->fio}}@else{{old('fio')}}@endif"required >
    </div>
</div>
<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }} ">
    <label for="phone" class="col-md-4 control-label">Телефон</label>
    <div class="col-md-5">
        <input id="phone" type="text" class="form-control" name="phone"
          value="@if(!empty($shop)){{$shop->phone}}@else{{old('phone')}}@endif"required />
    </div>
</div>
