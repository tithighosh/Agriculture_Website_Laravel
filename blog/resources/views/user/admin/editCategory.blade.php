@extends('layouts/admin_layout')

@section('page1')

<script src="/assets/jquery/jquery-3.5.1.js"></script>

<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Category</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form method="post" class="tm-edit-product-form">
              @csrf
              <div class="form-group mb-3">
                <label
                  for="name"
                  >Category Name
                </label>
                <input
                  id="name"
                  name="catName"
                  type="text"
                  class="form-control validate"
                  required
                  value="{{$category[0]['catName']}} "
                />
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Category</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

@endsection