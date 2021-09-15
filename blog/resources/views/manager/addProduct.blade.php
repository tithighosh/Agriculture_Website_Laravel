@extends('layouts/manager_layout')

@section('page1')

<script src="{{asset('jquery/jquery-3.5.1.js')}}"></script>
<link href="{{asset('css/productImage.css')}}" rel="stylesheet">
<link href="{{asset('js/productImage.js')}}" rel="stylesheet">

<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Product</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form method="post" class="tm-edit-product-form" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                <label
                  for="name"
                  >Product Name
                </label>
                <input
                  id="name"
                  name="productName"
                  type="text"
                  class="form-control validate"
                  required
                />
              </div>
              <div class="form-group mb-3">
                <label
                  for="description"
                  >Description</label
                >
                <textarea
                  class="form-control validate"
                  rows="3"
                  name="description"
                  required
                ></textarea>
              </div>
              <div class="form-group mb-3">
                <label
                  for="category"
                  >Category</label
                >
                <select name="category" class="custom-select tm-select-accounts"
                id="category">
                <option selected >Select Category</option>
                  @for($i = 0; $i < count($category); $i++)
                    <option value="{{$category[$i]['catName']}}">{{$category[$i]['catName']}}</option>
                  @endfor
                </select>
              </div>
              <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label
                        for="expire_date"
                        >Expire Date
                      </label>
                      <input
                        id="expire_date"
                        name="expDate"
                        type="text"
                        class="form-control validate"
                        data-large-mode="true"
                      />
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label
                        for="stock"
                        >Quantity
                      </label>
                      <input
                        id="stock"
                        name="quantity"
                        type="text"
                        class="form-control validate"
                        required
                      />
                    </div>
              </div>
              <div class="form-group mb-3">
                <label
                  for="name"
                  >Price
                </label>
                <input
                  id="name"
                  name="price"
                  type="text"
                  class="form-control validate"
                  required
                />
              </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
            <img id="myImg" src="#" alt="your image" class="thumb">
          </br>
          <input type='file' name="productImage"/>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
  /* Image Designing Propoerties */
  .thumb {
      height: 200px;
      border: 1px solid #000;
      margin: 10px 5px 0 0;
  }
</style>

<script type="text/javascript">
  /* The uploader form */
  $(function () {
      $(":file").change(function () {
          if (this.files && this.files[0]) {
              var reader = new FileReader();

              reader.onload = imageIsLoaded;
              reader.readAsDataURL(this.files[0]);
          }
      });
  });

  function imageIsLoaded(e) {
      $('#myImg').attr('src', e.target.result);
      $('#yourImage').attr('src', e.target.result);
  };

</script>
</body>
</html>

@endsection