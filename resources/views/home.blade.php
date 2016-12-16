@extends('layouts.app')

@section('content')
    <div id="title" style="text-align: center;">
        <h1>产品列表</h1>
    </div>
    <hr>
    <div id="content">
        <!-- <ul>
            @foreach ($products as $product)
            <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url($product->tinyurl) }}">
                        <h4>{{ $product->title }}</h4>
                    </a>
                </div>
                <div class="body">
                    <p>{{ $product->model }}</p>
                </div>
            </li>
            @endforeach
        </ul> -->
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>产品名称</th>
              <th>品牌</th>
              <th>型号</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td><a href="{{ url($product->tinyurl) }}">{{ $product->title }}</td>
              <td>{{ $product->brand }}</td>
              <td>{{ $product->model }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection
