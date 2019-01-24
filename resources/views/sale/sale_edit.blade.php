@extends('layouts.myl')
@section('content')
  <form class="form-horizontal" action="{{ route('sale.update',$sale)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
      @include('sale.form')
      <div class="col-sm-6 col-sm-offset-3">
        <button class="btn btn-block btn-primary" type="submit">Сохранить</button>
      </div>
  </form>
@endsection
@section('myscript')
  <script>
  $(document).ready
(function ()
{
  $('#id_soft').change(
    function ()
    {

      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

      var id = $('#id_soft').val();
      jQuery.ajax({
                      url: "/prise",
                      type: "post",
                      data: {id:id }, // Передаем данные для записи
                      dataType: "json",
                      success: function(result) {
                                                $('#pr').val(result);
                                                recal();
                                                //console.log(result);
                                                }

                       });
                       return false;
});
function recal(){
  let pr = $('#pr').val();
  let count = $('#count').val();
  let sum = pr*count;
  let str_dis=$("#id_discount option:selected").text(); // строка выбранная в скидке
  let dis=parseInt(str_dis); // выризает число из строки
  let sum_d=sum-(sum/100*dis); //сумма со скидкой
  $('#pr').val(sum_d);
}
$('#count').change(
  function (){
    recal();
  });
  $('#id_discount').change(
    function (){
      recal();
    });

});
  </script>
@endsection
