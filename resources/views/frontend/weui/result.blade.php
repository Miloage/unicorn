@extends('frontend.layouts.weui')

@section('content')
<div class="weui-msg">
  <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
  <div class="weui-msg__text-area">
    <h2 class="weui-msg__title">付款成功</h2>
    <p class="weui-msg__desc">
      <div class="weui-form-preview">
        <div class="weui-form-preview__hd">
          <label class="weui-form-preview__label">付款金额</label>
          <em class="weui-form-preview__value">¥2400.00</em>
        </div>
        <div class="weui-form-preview__bd">
          <div class="weui-form-preview__item">
            <label class="weui-form-preview__label">订单号</label>
            <span class="weui-form-preview__value">ZX201801192458755</span>
          </div>
          <div class="weui-form-preview__item">
            <label class="weui-form-preview__label">商家</label>
            <span class="weui-form-preview__value">赣州众鑫服务中心</span>
          </div>
          <div class="weui-form-preview__item">
            <label class="weui-form-preview__label">商品</label>
            <span class="weui-form-preview__value">大牌精致时尚*1,小米电视55寸*2,品牌精选新品*3,荣耀V9/8青春版*4</span>
          </div>
        </div>
      </div>
    </p>
  </div>
  <div class="weui-msg__opr-area">
    <p class="weui-btn-area">
      <a href="javascript:;" class="weui-btn weui-btn_primary">查看订单</a>
      <a href="javascript:;" class="weui-btn weui-btn_default">继续购买</a>
    </p>
  </div>
</div>
@endsection