@extends('products.layout')
@section('content')

 <div class="row">
     <div class="col-lgl-12 margin-tb ">
         <div class="pull-left">
             <h2>Add New Book</h2>
         </div>
         <div class="pull-right">
             <a class="btn btn-primary" href="{{route('products.index')}}">Back</a>
         </div>
     </div>
 </div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops</strong>There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{route('products.store')}}"method="POST">
      @csrf
   <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Authorid:</strong>
               <input type="text" name="authorid" class="form-control" placeholder="AuthorID">
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Title:</strong>
               <input type="text" name="title" class="form-control" placeholder="Title">
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>ISBN:</strong>
               <input type="text" name="isbn" class="form-control" placeholder="ISBN">
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Pub_year:</strong>
               <input type="text" name="pub_year" class="form-control" placeholder="Pub_year">
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Available:</strong>
               <input type="text" name="available" class="form-control" placeholder="Available">
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <button type="submit"class="btn btn-primary">Submit</button>
       </div>
   </div>

  </form>
@endsection
