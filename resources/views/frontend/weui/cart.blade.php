@extends('frontend.layouts.weui')

@section('header')
  @include('frontend.includes.title', ['title'=> '购物车'])
@endsection

@section('content')
  @each('frontend.weui.view.cart-item', [1,2,3,4], 'item')
@endsection

@section('footer')
  @include('frontend.weui.view.cart-footer')
@endsection

@push('after-scripts')
<script type="text/javascript">
$(document).ready(function () {
  var MAX = 99, MIN = 1;
  $('.weui-count__decrease').click(function (e) {
    var $input = $(e.currentTarget).parent().find('.weui-count__number');
    var number = parseInt($input.val() || "0") - 1
    if (number < MIN) number = MIN;
    $input.val(number)
  })
  $('.weui-count__increase').click(function (e) {
    var $input = $(e.currentTarget).parent().find('.weui-count__number');
    var number = parseInt($input.val() || "0") + 1
    if (number > MAX) number = MAX;
    $input.val(number)
  })

  $(".allselect").click(function () {
      if($(this).find("input[name=all-sec]").prop("checked")){
          $("input[name=cartpro]").each(function () {
              $(this).prop("checked", true);
          });
      }
      else
      {
        $("input[name=cartpro]").each(function () {
            if ($(this).prop("checked")) {
                $(this).prop("checked", false);
            } else {
                $(this).prop("checked", true);
            }
        });
      }
  });
});

$(document).on("click", ".wy-dele", function() {
  $.confirm("您确定要把此商品从购物车删除吗?", "确认删除?", function() {
    $.toast("文件已经删除!");
  }, function() {
    //取消操作
  });
});
</script>
@endpush
