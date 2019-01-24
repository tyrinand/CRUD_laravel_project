{{ csrf_field() }}
<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} ">
    <label for="name" class="col-md-4 control-label">Название</label>
    <div class="col-md-5">
        <input id="name" type="text" class="form-control" name="name"
        value="@if(!empty($soft->name)){{ $soft->name }}@endif"required >
    </div>
</div>
<div class="form-group {{ $errors->has('descr') ? ' has-error' : '' }} ">
    <label for="descr" class="col-md-4 control-label">Описание</label>
    <div class="col-md-5">
        <input id="descr" type="text" class="form-control" name="descr"
        value="{{ $soft->descr or '' }}" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('site') ? ' has-error' : '' }} ">
    <label for="site" class="col-md-4 control-label">Сайт</label>
    <div class="col-md-5">
        <input id="site" type="text" class="form-control" name="site"
        value="{{ $soft->site or '' }}" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('prise') ? ' has-error' : '' }} ">
    <label for="prise" class="col-md-4 control-label">Цена</label>
    <div class="col-md-5">
        <input id="prise" type="text" class="form-control" name="prise"
        value="{{ $soft->prise or '' }}" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('count') ? ' has-error' : '' }} ">
    <label for="count" class="col-md-4 control-label">Кол-во</label>
    <div class="col-md-5">
        <input id="count" type="text" class="form-control" name="count"
        value="{{ $soft->count or '' }}" required/>
    </div>
</div>

<div class="form-group {{ $errors->has('lan') ? ' has-error' : '' }} ">
    <label for="lan" class="col-md-4 control-label">Язык</label>
    <div class="col-md-5">
      <select class="form-control" name="lan" id="lan">
        @isset ($soft)
        @foreach ($lan as $c)
          @if($c == $soft->lan) <option selected value="{{ $c }}">{{ $c }}</option>
          @else <option value="{{ $c}}">{{ $c }}</option>
          @endif
        @endforeach
        @else
          @foreach ($lan as $c)
            @if($c == old('lan')) <option selected value="{{ $c }}">{{ $c }}</option>
            @else <option value="{{ $c }}">{{ $c }}</option>
            @endif
          @endforeach
        @endisset
      </select>
    </div>
</div>
<div class="form-group {{ $errors->has('type') ? ' has-error' : '' }} ">
    <label for="type" class="col-md-4 control-label">Тип поставки</label>
    <div class="col-md-5">
      <select class="form-control" name="type" id="type">
        @isset ($soft)
        @foreach ($type as $c)
          @if($c == $soft->type) <option selected value="{{ $c }}">{{ $c }}</option>
          @else <option value="{{ $c}}">{{ $c }}</option>
          @endif
        @endforeach
        @else
          @foreach ($type as $c)
            @if($c == old('type')) <option selected value="{{ $c }}">{{ $c }}</option>
            @else <option value="{{ $c }}">{{ $c }}</option>
            @endif
          @endforeach
        @endisset
      </select>
    </div>
</div>
