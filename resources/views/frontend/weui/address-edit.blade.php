@extends('frontend.layouts.weui')

@section('header')
  @include('frontend.includes.title', ['title'=> '编辑地址'])
@endsection

@section('content')
<div class="weui-cells weui-cells_form wy-address-edit">
  <div class="weui-cell">
    <div class="weui-cell__hd"><label class="weui-label wy-lab">收货人</label></div>
    <div class="weui-cell__bd"><input class="weui-input" type="number" pattern="[0-9]*" placeholder="陈大鹏"></div>
  </div>
  <div class="weui-cell">
    <div class="weui-cell__hd"><label class="weui-label wy-lab">手机号</label></div>
    <div class="weui-cell__bd"><input class="weui-input" type="number" pattern="[0-9]*" placeholder="18951263540"></div>
  </div>
  <div class="weui-cell">
    <div class="weui-cell__hd"><label for="name" class="weui-label wy-lab">所在地区</label></div>
    <div class="weui-cell__bd"><input class="weui-input" id="address" type="text" value="江西省 赣州市 章贡区" readonly="" data-code="360702" data-codes="360000,360700,360702"></div>
  </div>
  <div class="weui-cell">
    <div class="weui-cell__hd"><label class="weui-label wy-lab">详细地址</label></div>
    <div class="weui-cell__bd">
      <textarea class="weui-textarea" placeholder="请填写详细地址"></textarea>
    </div>
  </div>
  <div class="weui-cell weui-cell_switch">
    <div class="weui-cell__bd">设为默认地址</div>
    <div class="weui-cell__ft"><input class="weui-switch" type="checkbox"></div>
  </div>
</div>
<div class="weui-btn-area">
  <a class="weui-btn weui-btn_primary" href="javascript:" id="showTooltips">保存此地址</a>
  <a href="javascript:;" class="weui-btn weui-btn_warn">删除此地址</a>
</div>
@endsection

@push('after-scripts')
<script>
$("#address").cityPicker({
  title: "选择出发地",
  onChange: function (picker, values, displayValues) {
    console.log(values, displayValues);
  }
});
</script>
@endpush