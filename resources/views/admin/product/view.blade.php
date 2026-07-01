@extends('admin.master')

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Page Heading -->
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-box-seam"></i>
                </span>

                <div>
                    <p class="eyebrow mb-1">Product Management</p>
                    <h1 class="h3 mb-1">Product Details</h1>
                    <p class="text-muted mb-0">
                        View complete product information.
                    </p>
                </div>
            </div>

            <div class="heading-actions">

                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>

                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn">
                    <i class="bi bi-pencil"></i>
                    Edit
                </a>

            </div>
        </div>

        <!-- Main Card -->
        <div class="panel">

            <div class="panel-header">
                <h2 class="h5 section-title mb-0">
                    <i class="bi bi-info-circle"></i>
                    <span>Product Information</span>
                </h2>
            </div>

            <div class="panel-body">

                <div class="row g-4">

                    <!-- Image -->
                    <div class="col-lg-4">

                        <div class="border rounded-3 p-3 text-center bg-light">

                            <img src="{{ url($product->image) }}"
                                class="img-fluid rounded"
                                style="max-height:320px; object-fit:contain;">

                        </div>

                    </div>

                    <!-- Details -->
                    <div class="col-lg-8">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="text-muted small">Product Name</label>
                                <div class="fw-semibold">{{ $product->name }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">SKU</label>
                                <div class="fw-semibold">{{ $product->sku }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">Category</label>
                                <div class="fw-semibold">{{ $product->category->name }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">Sub Category</label>
                                <div class="fw-semibold">{{ $product->sub_category->name }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">Unit</label>
                                <div class="fw-semibold">{{ $product->unit->Short_name }}</div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">Stock</label>

                                @if($product->stock>10)
                                    <div>
                                        <span class="badge bg-success">
                                            {{ $product->stock }} Available
                                        </span>
                                    </div>
                                @elseif($product->stock>0)
                                    <div>
                                        <span class="badge bg-warning text-dark">
                                            {{ $product->stock }} Left
                                        </span>
                                    </div>
                                @else
                                    <div>
                                        <span class="badge bg-danger">
                                            Out of Stock
                                        </span>
                                    </div>
                                @endif

                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">Buying Price</label>
                                <div class="fw-bold text-danger">
                                    ৳ {{ $product->buying_price }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted small">Selling Price</label>
                                <div class="fw-bold text-success">
                                    ৳ {{ $product->price }}
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <hr class="my-4">

                <h5>Description</h5>

                <div class="border rounded-3 p-3 bg-light">
                    {{ $product->description }}
                </div>

            </div>

        </div>

    </div>
</main>
@endsection