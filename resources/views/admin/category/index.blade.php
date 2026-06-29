@extends('admin.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Category</p>
                        <h1 class="h3 mb-1">List</h1>

                    </div>

                </div>

            </div>

            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Category
                                Table</span></h2>

                    </div>

                    <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders"
                        data-table-search="ordersTable" aria-label="Search orders">
                    <div class="heading-actions text-end">
                        <a class="btn btn-primary btn-sm" href="{{route('category.create')}}"><i class="bi bi-person-plus"
                                aria-hidden="true"></i>
                            Add Category</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>

                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cat_items as $cat_item )
                            @csrf
                                
                         
                            <tr>
                                <td class="fw-semibold">{{$cat_item->id}}</td>
                                <td>{{$cat_item->name}}</td>
                                <td class="text-end"><button class="btn btn-light btn-sm" type="button">View</button></td>
                            </tr>
                               @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
