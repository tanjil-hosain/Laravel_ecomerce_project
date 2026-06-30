@extends('admin.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Unit</p>
                        <h1 class="h3 mb-1">List</h1>

                    </div>

                </div>

            </div>

            <section class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Unit
                                Table</span></h2>

                    </div>

                    <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders"
                        data-table-search="ordersTable" aria-label="Search orders">
                    <div class="heading-actions text-end">
                        <a class="btn btn-primary btn-sm" href="{{ route('unit-list.create') }}"><i
                                class="bi bi-person-plus" aria-hidden="true"></i>
                            Add Unit</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>UnitName</th>
                                <th>Short Name</th>

                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unit_items as $unit_item)
                                @csrf


                                <tr>
                                    <td class="fw-semibold">{{ $unit_item->id }}</td>
                                    <td>{{ $unit_item->name }}</td>
                                    <td>{{ $unit_item->short_name }}</td>
                                    <form action="{{ route('unit-list.destroy', $unit_item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <td class="text-end"><a href="{{ route('unit-list.edit', $unit_item->id) }}"
                                                class="btn btn-info ">Edit</a>


                                            <button onclick="return confirm('Are you sure Delete this category')"
                                                class="btn btn-danger ">Delete</button>

                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
