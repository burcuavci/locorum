@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Product
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Product Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" name="location"/>
          </div>
          <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="image">Image Link</label>
              <input type="text" class="form-control" name="image"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Product</button>
      </form>
  </div>
</div>
@endsection