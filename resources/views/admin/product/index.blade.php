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
      <a class="btn btn-primary btn" href="{{route('products.create')}}"><i class="bi bi-person-plus"
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
                        <input class="form-control form-control-sm table-search" type="search" placeholder="Search products"
                            data-table-search="usersTable" aria-label="Search products" />
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th scope="col">User</th>
                                <th scope="col">Role</th>
                                <th scope="col">Team</th>
                                <th scope="col">Status</th>
                                <th scope="col">Joined</th>
                                <th scope="col" class="text-end">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-1.jpg"
                                            alt="Sarah Ahmed" />
                                        <div>
                                            <p class="fw-semibold mb-0">
                                                Sarah Ahmed
                                            </p>
                                            <p class="text-muted small mb-0">
                                                sarah@example.com
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>Admin</td>
                                <td>Operations</td>
                                <td>
                                    <span class="badge text-bg-success">Active</span>
                                </td>
                                <td>Jan 12, 2026</td>
                                <td class="text-end">
                                    <a class="btn btn-light btn-sm" href="user-details.html">View</a>
                                </td>
                            </tr>

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
