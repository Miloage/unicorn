<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.weui');
    }

    //所有分类
    public function classify()
    {
        return view('frontend.weui.classify');
    }

    //商品列表
    public function list()
    {
        return view('frontend.weui.list');
    }

    //购物车
    public function cart()
    {
        return view('frontend.weui.cart');
    }

    //结算
    public function payment()
    {
        return view('frontend.weui.payment');
    }

    //结算结果
    public function paymentResult()
    {
        return view('frontend.weui.result');
    }

    //地址列表
    public function address()
    {
        return view('frontend.weui.address');
    }

    public function addressEdit($id)
    {
        return view('frontend.weui.address-edit');
    }

    public function addressAdd()
    {
        return view('frontend.weui.address-edit');
    }

    //个人中心
    public function profile()
    {
        return view('frontend.weui.profile');
    }

    public function order()
    {
        return view('frontend.weui.order');
    }

    public function comment()
    {
        return view('frontend.weui.comment');
    }

    public function product()
    {
        return view('frontend.weui.product');
    }
}
