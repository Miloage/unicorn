@extends('frontend.layouts.weui')

@section('header')
  @include('frontend.includes.title', ['title'=> '地址管理'])
@endsection

@section('content')
<div class="weui-panel address-box">
  <div class="weui-panel__bd">
    <div class="weui-media-box weui-media-box_text address-list-box">
      <a href="/address/1/edit" class="address-edit"></a>
      <h4 class="weui-media-box__title"><span>陈大鹏</span><span>189****3850</span></h4>
      <p class="weui-media-box__desc address-txt">宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼</p>
      <span class="default-add">默认地址</span>
    </div>
  </div>
  <div class="weui-panel__bd">
    <div class="weui-media-box weui-media-box_text address-list-box">
      <a href="/address/1/edit" class="address-edit"></a>
      <h4 class="weui-media-box__title"><span>陈大鹏</span><span>189****3850</span></h4>
      <p class="weui-media-box__desc address-txt">宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼</p>
    </div>
  </div>
  <div class="weui-panel__bd">
    <div class="weui-media-box weui-media-box_text address-list-box">
      <a href="/address/1/edit" class="address-edit"></a>
      <h4 class="weui-media-box__title"><span>陈大鹏</span><span>189****3850</span></h4>
      <p class="weui-media-box__desc address-txt">宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼</p>
    </div>
  </div>
  <div class="weui-panel__bd">
    <div class="weui-media-box weui-media-box_text address-list-box">
      <a href="/address/1/edit" class="address-edit"></a>
      <h4 class="weui-media-box__title"><span>陈大鹏</span><span>189****3850</span></h4>
      <p class="weui-media-box__desc address-txt">宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼宿迁市洋河新区电商产业园2楼</p>
    </div>
  </div>
</div>
<div class="weui-btn-area weui-footer_fixed-bottom">
  <a class="weui-btn weui-btn_primary" href="/address/add" id="showTooltips">添加收货地址</a>
</div>
@endsection




