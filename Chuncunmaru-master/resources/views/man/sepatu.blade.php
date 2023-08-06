@extends('layouts.main')

@section('container')
    <h1>Halaman Sepatu</h1>
    <div class="container text-center my-10">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="path/to/product-image.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Product Name</h5>
                            <p class="card-text">Product Description</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
