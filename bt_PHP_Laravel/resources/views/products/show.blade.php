@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lgl-12 margin-tb">
            <div class="pull-left">
                <h2>Show Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('products.index')}}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>AuthorID:</strong>
                {{$product->authorid}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{$product->title}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISBN:</strong>
                {{$product->isbn}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pub_year:</strong>
                {{$product->pub_year}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Available:</strong>
                {{$product->available}}
            </div>
        </div>
    </div>
@endsection
