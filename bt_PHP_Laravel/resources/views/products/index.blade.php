@extends('products.layout')
@section('content')
    <div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h2>LIST BOOKS</h2>
           </div>
           <div class="pull-right">
               <a class="btn btn-success" href="{{route('products.create')}}">Create New Book</a>
           </div>
       </div>
    </div>

   @if($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{$message}}</p>
  </div>
   @endif
  <table class="table table-bordered">
      <tr>
          <th>Bookid</th>
          <th>Authorid</th>
          <th>Title</th>
          <th>ISBN</th>
          <th>Pub_year</th>
          <th>Available</th>
          <th width="280px">Action</th>
      </tr>
      @foreach($products as $product)
      <tr>
          <td>{{++$i}}</td>
          <td>{{$product->authorid}}</td>
          <td>{{$product->title}}</td>
          <td>{{$product->ISBN>}}</td>
          <td>{{$product->pub_year}}</td>
          <td>{{$product->available}}</td>
          <td>
              <form action="{{route('$products.destroy',$product->id)}}"method="POST">
                  <a class="btn btn-info" href="{{route('$products.show',$product->id)}}">Show</a>
                  <a class="btn btn-primary" href="{{route('$products.edit',$product->id)}}">Edit</a>
             @csrf
             @method('DELETE')
               <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
  </table>

    {!! $products->links() !!}
@endsection
