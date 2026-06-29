@extends('admin.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1"> Product Management</p>
                        <h1 class="h3 mb-1">Add Sub_Category</h1>
                        <p class="text-muted mb-0">Create a new Sub_Category</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary " href="{{ route('sub_category.index') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Category</a></div>
            </div>

            <section class="row g-3">
                <div class="col-12 col-xl-8">
                    <form class="panel needs-validation" action="{{ route('sub_category.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>Sub_Category Information</span></h2>

                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="firstName">Sub_Category Name</label><input
                                    class="form-control" id="firstName" type="text" required name="name">
                                <div class="invalid-feedback">Sub_Category name is required.</div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="{{ route('sub_category.index') }}">Cancel</a><button class="btn btn-primary"
                                type="submit"><i class="bi bi-person-check" aria-hidden="true"></i> Create
                                Sub_Category</button></div>
                    </form>
                </div>

            </section>
        </div>
    </main>
@endsection
