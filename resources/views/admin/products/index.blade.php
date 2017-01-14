@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">文章管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <a href="{{ url('admin/products/create') }}" class="btn btn-lg btn-primary">添加新产品</a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>产品名称</th>
                          <th>品牌</th>
                          <th>型号</th>
                          <th>容量</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <td>{{ $product->id }}</td>
                          <td><a href="{{ url($product->tinyurl) }}">{{ $product->title }}</td>
                          <td>{{ $product->brand }}</td>
                          <td>{{ $product->model }}</td>
                          <td>{{ $product->capacity }}</td>
                          <td>
                            <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success">编辑</a>
                            <form action="{{ url('admin/products/'.$product->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    <!-- 分页 -->
                    <div>{{ $products->links() }}</div>

                    <!-- @foreach ($products as $product)
                        <hr>
                        <div class="product">
                            <h4>{{ $product->title }}</h4>
                            <div class="content">
                                <p>
                                    {{ $product->body }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/products/'.$product->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    @endforeach -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection