@extends('layouts/admin_layout')


@section('page1')

<div>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <br><br>
                                <h1 class="h4 text-gray-900 mb-4">product Name : {{$product['productName']}}</h1>
                            </div>
                            <form class="user" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0 text-center">
                                        <h3>Category : {{$product['category']}}</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0 text-center">
                                        <h3>Price : {{$product['price']}}</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0 text-center">
                                        <h3>Expire Date : {{$product['expDate']}}</h3>
                                    </div>
                                </div><div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0 text-center">
                                        <h3>Description : {{$product['description']}}</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0 text-center">
                                        <h2 style="color: red;">Do You Really Want to Delete This Product??</h2>
                                    </div>
                                </div><hr>
                                <button class = "btn btn-danger btn-user btn-block">Delete</button>
                                <a href="{{route('admin_customizeProducts')}}" class="btn btn-warning btn-user btn-block">
                                    No
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
