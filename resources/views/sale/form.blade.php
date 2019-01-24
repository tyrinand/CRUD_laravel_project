{{ csrf_field() }}
<div class="form-group {{ $errors->has('id_soft') ? ' has-error' : '' }} ">
    <label for="id_soft" class="col-md-4 control-label">ПО</label>
    <div class="col-md-5">
      <select class="form-control" name="id_soft" id="id_soft" required>
        @isset ($sale)
        @foreach ($all_soft as $c)
          @if($c->id == $sale->id_soft) <option selected value="{{ $c->id }}">{{ $c->name }}</option>
          @else <option value="{{ $c->id }}">{{ $c->name }}</option>
          @endif
        @endforeach
        @else
        <option selected value="" disabled>Выберете ПО</option>
          @foreach ($all_soft as $c)
          <option value="{{$c->id}}">{{ $c->name }}| {{ $c->prise }} .p/ед.</option>
          @endforeach
        @endisset
      </select>
    </div>
</div>
<div class="form-group">
    <label for="pr" class="col-md-4 control-label">Стоимость</label>
    <div class="col-md-5">
        <input id="pr" type="text" disabled class="form-control" value="{{ $sale->soft->prise or '' }}"/>
    </div>
</div>
<div class="form-group {{ $errors->has('count') ? ' has-error' : '' }} ">
    <label for="count" class="col-md-4 control-label">Кол-во</label>
    <div class="col-md-5">
        <input id="count" type="text" class="form-control" name="count"
        value="{{ $sale->count or '' }}" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('id_discount') ? ' has-error' : '' }} ">
    <label for="id_discount" class="col-md-4 control-label">Скидка</label>
    <div class="col-md-5">
      <select class="form-control" name="id_discount" id="id_discount" required>
        @isset ($sale)
        @foreach ($all_d as $c)
          @if($c->id == $sale->id_discount) <option selected value="{{ $c->id }}">{{ $c->val }}</option>
          @else <option value="{{ $c->id }}">{{ $c->val }}</option>
          @endif
        @endforeach
        @else
        <option selected value="" disabled>Выберете скидку</option>
          @foreach ($all_d as $c)
          <option value="{{$c->id}}">{{ $c->val}}</option>
          @endforeach
        @endisset
      </select>
    </div>
</div>
<div class="form-group">
    <label for="st" class="col-md-4 control-label">Стоимость</label>
    <div class="col-md-5">
        <input id="st" type="text" disabled class="form-control"
        value="@if(!empty($sale)){{ $sale->full_prise($sale->soft->prise,$sale->count,$sale->discount->val)}}
        @else {{ ''}}
        @endif"/>
    </div>
</div>
<div class="form-group {{ $errors->has('date') ? ' has-error' : '' }} ">
    <label for="date" class="col-md-4 control-label">Дата</label>
    <div class="col-md-5">
        <input id="date" type="date" class="form-control" name="date"
        value="@if(!empty($sale->date)){{$sale->date->format('Y-m-d')}}@endif"required >
    </div>
</div>

<div class="form-group {{ $errors->has('id_client') ? ' has-error' : '' }} ">
    <label for="id_client" class="col-md-4 control-label">Клиенты</label>
    <div class="col-md-5">
      <select class="form-control" name="id_client" id="id_client">
        @isset ($sale)
        @foreach ($all_c as $c)
          @if($c->id == $sale->id_client) <option selected value="{{ $c->id }}">{{ $c->name }}</option>
          @else <option value="{{ $c->id }}">{{ $c->name }}</option>
          @endif
        @endforeach
        @else
        <option selected value="" disabled>Выберете клиента</option>
          @foreach ($all_c as $c)
          <option value="{{$c->id}}">{{ $c->name }}</option>
          @endforeach
        @endisset
      </select>
    </div>
</div>
<div class="form-group {{ $errors->has('id_shop') ? ' has-error' : '' }} ">
    <label for="id_shop" class="col-md-4 control-label">Магазин</label>
    <div class="col-md-5">
      <select class="form-control" name="id_shop" id="id_shop">
        @isset ($sale)
        @foreach ($all_shop as $c)
          @if($c->id == $sale->id_shop) <option selected value="{{ $c->id }}">{{ $c->name }}</option>
          @else <option value="{{ $c->id }}">{{ $c->name }}</option>
          @endif
        @endforeach
        @else
        <option selected value="" disabled>Выберете магазин</option>
          @foreach ($all_shop as $c)
          <option value="{{$c->id}}">{{ $c->name }}</option>
          @endforeach
        @endisset
      </select>
    </div>
</div>
