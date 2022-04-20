<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){

        print_r(route('products'));

        return view('products.index');
        //$title='Welcome to my Laravel 8';
        //$description='Created by Nemanja';

        //$data=[
        //    'productOne'=>'Iphone 8',
         //   'productTwo'=>'Samsung Galaxy'
        //];

        //compact method
        //return view('products.index',compact('title','description'));

        //with method
        //return view('products.index')->with('title',$title);
        //return view('products.index')->with('data',$data);\

        //Directly in the view

        //return view('products.index',[
        //    'data'=>$data
        //]);
    }

    public function about(){
        return 'This is about us page';
    }

    public function show($name){
        $data=[
            'iphone'=>'Iphone 8',
            'samsung'=>'Samsung Galaxy'
        ];

        return view('products.index',[
            'products'=>$data[$name] ?? 'Product '.$name.' does not exist'
        ]);
    }
}
