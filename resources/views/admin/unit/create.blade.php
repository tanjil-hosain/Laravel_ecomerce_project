@extends('admin.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1"> Product Management</p>
                        <h1 class="h3 mb-1">Add Unit</h1>
                        <p class="text-muted mb-0">Create a new Unit</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary " href="{{ route('unit-list.index') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to
                        Unit List</a></div>
            </div>

            <section class="row g-3">
                <div class="col-12 col-xl-8">
                    <form class="panel needs-validation" action="{{ route('unit-list.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>Unit Information</span></h2>

                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="firstName">Unit Name</label><input
                                    class="form-control" id="firstName" type="text" required name="name">
                                <div class="invalid-feedback">Unit name is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="Name">Short Name</label><input
                                    class="form-control" id="Name" type="text" required name="short_name">
                                <div class="invalid-feedback">Short name is required.</div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="{{ route('unit-list.index') }}">Cancel</a><button class="btn btn-primary"
                                type="submit"><i class="bi bi-person-check" aria-hidden="true"></i> Create
                                Sub_Category</button></div>
                    </form>
                </div>

            </section>
        </div>
    </main>
@endsection
