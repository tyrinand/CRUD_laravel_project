{{ csrf_field() }}
<div class="form-group {{ $errors->has('name_c') ? ' has-error' : '' }} ">
    <label for="name_c" class="col-md-4 control-label">Имя</label>
    <div class="col-md-5">
        <input id="name_c" type="text" class="form-control" name="name_c"
        value="@if(!empty($client)){{$client->name}}@else{{old('name_c')}}@endif" required autofocus>
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} ">
    <label for="email" class="col-md-4 control-label">E-mail</label>
    <div class="col-md-5">
        <input id="email" type="email" class="form-control" name="email"
        value="@if(!empty($client)){{$client->email}}@else{{old('email')}}@endif" required/>
    </div>
</div>
<div class="form-group {{ $errors->has('adr') ? ' has-error' : '' }} ">
    <label for="adr" class="col-md-4 control-label">Адрес</label>
    <div class="col-md-5">
        <input id="adr" type="text" class="form-control" name="adr"
        value="@if(!empty($client)){{$client->adr}}@else{{old('adr')}}@endif"required >
    </div>
</div>
<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }} ">
    <label for="phone" class="col-md-4 control-label">Телефон</label>
    <div class="col-md-5">
        <input id="phone" type="text" class="form-control" name="phone"
          value="@if(!empty($client)){{$client->phone}}@else{{old('phone')}}@endif"required >
    </div>
</div>
<div class="form-group {{ $errors->has('mark') ? ' has-error' : '' }} ">
    <label for="mark" class="col-md-4 control-label">Оценка</label>
    <div class="col-md-5">
        <select id="mark"  class="form-control" name="mark" required >
          <option value="" selected disabled>Выберете оценку</option>
            @if(!empty($client))
              @foreach ($marks as $m)
                @if($m == $client->mark) <option selected value="{{ $m }}">{{ $m }}</option>
                @else <option value="{{ $m }}">{{ $m }}</option>
                @endif
              @endforeach
            @else
            @foreach ($marks as $m)
              @if($m == old('mark')) <option selected value="{{ $m }}">{{ $m }}</option>
              @else <option value="{{ $m }}">{{ $m }}</option>
              @endif
            @endforeach
          @endif
        </select>
    </div>
</div>
