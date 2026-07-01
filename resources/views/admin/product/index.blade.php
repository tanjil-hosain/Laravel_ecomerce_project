@extends('admin.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Products</h1>
                    </div>
                </div>
                <div class="heading-actions">
                    <a class="btn btn-primary btn" href="{{ route('products.create') }}"><i class="bi bi-person-plus"
                            aria-hidden="true"></i>
                        Add Product</a>
                </div>
            </div>

            <section class="panel mt-3">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-table" aria-hidden="true"></i><span>Product List</span>
                        </h2>
                        <p class="text-muted mb-0">
                            Search, review, and manage Products.

                        </p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <input class="form-control form-control-sm table-search" type="search"
                            placeholder="Search products" data-table-search="usersTable" aria-label="Search products" />
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Buying_price</th>
                                <th scope="col">Stock</th>
                                <th scope="col" class="text-end">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product_items as $product_item )
                            @csrf
                                
                          
                            <tr>
                                <td><img style="width: 100px" src="{{url($product_item->image)}}" alt=""></td>
                                <td>{{$product_item->name}}</td>
                                <td>{{$product_item->price}}</td>
                                <td>{{$product_item->buying_price}}</td>
                                <td>{{$product_item->stock}}</td>
                                <form action="">
                                                                    <td>View
                                    <a class=" btn btn-info" href="{{route('products.edit', $product_item->id)}}">Edit</a>
                                </td>
                                </form>
                                
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
                    <p class="text-muted small mb-0">
                        Showing 1 to 5 of 124 Products
                    </p>
                    <nav aria-label="Users pagination">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>
@endsection
