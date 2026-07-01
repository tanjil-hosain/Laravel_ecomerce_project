@extends('admin.master');

@section('content')
<body class="bg-light">

<div class="container py-5">

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-primary text-white py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="bi bi-box-seam"></i>
                    Product Details
                </h4>

                <a href="#" class="btn btn-light btn-sm">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>

        <div class="card-body p-4">

            <div class="row">

                <!-- Image -->

                <div class="col-lg-4 text-center">

                    <img src="{{url($product->image)}}"
                        class="img-fluid rounded border p-3 bg-white shadow-sm">

                    <div class="mt-3">

                        <button class="btn btn-primary me-2">
                            <i class="bi bi-pencil-square"></i>
                            Edit
                        </button>

                        <button class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                            Delete
                        </button>

                    </div>

                </div>

                <!-- Details -->

                <div class="col-lg-8">

                    <h2 class="fw-bold">
                        {{$product->name}}
                    </h2>

                    <span class="badge bg-success fs-6 mb-3">
                        In Stock({{$product->stock}})
                    </span>

                    <hr>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <strong>SKU</strong><br>
                            {{$product->sku}}
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Category</strong><br>
                            {{$product->category->name}}
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Sub Category</strong><br>
                            {{$product->sub_category->name}}
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Unit</strong><br>
                           {{$product->unit->Short_name}}
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Buying Price</strong><br>
                            <span class="text-danger fw-bold">
                                {{$product->price}}
                            </span>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Selling Price</strong><br>
                            <span class="text-success fw-bold">
                                {{$product->buying_price}}
                            </span>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Stock</strong><br>
                            35 Pieces
                        </div>


                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h5 class="mb-3">
                <i class="bi bi-card-text"></i>
                Description
            </h5>

            <p class="text-muted mb-0">
             {{$product->description}}
            </p>

        </div>

    </div>

</div>

@endsection