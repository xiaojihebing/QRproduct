@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">修改产品</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>修改失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ URL('admin/products/'.$products->id) }}" method="POST" class="form-horizontal" role="form">
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">识别码：</label>
                            <div class="col-sm-10">
                                <input type="text" name="tinyurl" class="form-control" value="{{ $products->tinyurl }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">产品名称：</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{ $products->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">品牌：</label>
                            <div class="col-sm-10">
                                <input type="text" name="brand" class="form-control" value="{{ $products->brand }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">型号：</label>
                            <div class="col-sm-10">
                                <input type="text" name="model" class="form-control" value="{{ $products->model }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">价格：</label>
                            <div class="col-sm-10">
                                <input type="text" name="price" class="form-control" value="{{ $products->price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">容量：</label>
                            <div class="col-sm-10">
                                <input type="text" name="capacity" class="form-control" value="{{ $products->capacity }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">输入：</label>
                            <div class="col-sm-10">
                                <input type="text" name="input" class="form-control" value="{{ $products->input }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">输出：</label>
                            <div class="col-sm-10">
                                <input type="text" name="output" class="form-control" value="{{ $products->output }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">生产厂家：</label>
                            <div class="col-sm-10">
                                <input type="text" name="company" class="form-control" value="{{ $products->company }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址：</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" value="{{ $products->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">热线电话：</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control" value="{{ $products->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网址：</label>
                            <div class="col-sm-10">
                                <input type="text" name="website" class="form-control" value="{{ $products->website }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">颜色：</label>
                            <div class="col-sm-10">
                                <input type="text" name="color" class="form-control" value="{{ $products->color }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">尺寸：</label>
                            <div class="col-sm-10">
                                <input type="text" name="size" class="form-control" value="{{ $products->size }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">重量：</label>
                            <div class="col-sm-10">
                                <input type="text" name="weight" class="form-control" value="{{ $products->weight }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">产品介绍：</label>
                            <div class="col-sm-10">
                                <textarea name="intropro" rows="8" class="form-control" required="required">{{ $products->intropro }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公司介绍：</label>
                            <div class="col-sm-10">
                                <textarea name="introcom" rows="8" class="form-control" required="required">{{ $products->introcom }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-info">编辑产品</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection