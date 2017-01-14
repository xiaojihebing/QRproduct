<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

use Redirect, Auth;

class ProductController extends Controller
{
    //首页
    public function index()
	{
    	return view('admin/products/index')->withProducts(Product::paginate(20));
	}

	//新增
    public function create()
	{
    	return view('admin/products/create');
	}

	//存储
	public function store(Request $request)
	{
    	$this->validate($request, [
    		'tinyurl' => 'required|unique:products|max:10',
        	'title' => 'required|max:255',
        	'brand' => 'required',
        	'model' => 'required',
        	'intropro' => 'required',
    	]);

    	$product = new Product;
    	$product->tinyurl = $request->get('tinyurl');
    	$product->title = $request->get('title');
    	$product->brand = $request->get('brand');
    	$product->model = $request->get('model');
    	$product->intropro = $request->get('intropro');
    	$product->user_id = $request->user()->id;

    	if ($product->save()) {
        	return redirect('admin/products');
    	} else {
        	return redirect()->back()->withInput()->withErrors('保存失败！');
    	}
	}


	//编辑
	public function edit($id)
	{
		return view('admin/products/edit')->withProducts(Product::find($id));
	}

	//更新产品
	public function update(Request $request,$id)
	{
		$this->validate($request, [
			'tinyurl' => 'required|max:10',
        	'title' => 'required|max:255',
        	'brand' => 'required',
        	'model' => 'required',
        	// 'intropro' => 'required',
        	// 'price' => '',
        	// 'capacity' => '',
        	// 'input' => '',
        	// 'output' => '',
        	// 'company' => '',
        	// 'address' => '',
        	// 'phone' => '',
        	// 'website' => '',
        	// 'color' => '',
        	// 'size' => '',
        	// 'weight' => '',
		]);

		$product = Product::find($id);
		$product->tinyurl = $request->get('tinyurl');
		$product->title = $request->get('title');
		$product->brand = $request->get('brand');
		$product->price = $request->get('price');
		$product->capacity = $request->get('capacity');
		$product->input = $request->get('input');
		$product->output = $request->get('output');
		$product->company = $request->get('company');
		$product->address = $request->get('address');
		$product->phone = $request->get('phone');
		$product->website = $request->get('website');
		$product->color = $request->get('color');
		$product->size = $request->get('size');
		$product->weight = $request->get('weight');
		$product->intropro = $request->get('intropro');
		$product->introcom = $request->get('introcom');
		$product->user_id = Auth::user()->id;//Auth::user()->id;

		if ($product->save()) {
			return Redirect::to('admin/products');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}
	}


}
