@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增一个产品</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/products') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="text" name="tinyurl" class="form-control" required="required" placeholder="请输入唯一标识符">
                        <br>
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入产品名称">
                        <br>
                        <input type="text" name="brand" class="form-control" required="required" placeholder="请输入品牌">
                        <br>
                        <input type="text" name="model" class="form-control" required="required" placeholder="请输入型号">
                        <br>
                        <textarea name="intropro" rows="10" class="form-control" required="required" placeholder="请输入产品介绍"></textarea>
                        <br>
                        <button class="btn btn-lg btn-info">新增产品</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection