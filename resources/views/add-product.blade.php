@extends('layouts.app')

@section('content')
<div class="container">

  <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input id="price" class="form-control" type="text" name="price">
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
      <input id="rating" class="form-control" type="text" name="rating">
    </div>
    <div class="form-group">
      <label for="my-input">Add image</label>
      <input type="file" name="image_path">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@endsection