@extends('admin.master')

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Product Management</p>
                        <h1 class="h3 mb-1">Add Product</h1>
                        <p class="text-muted mb-0">Create a new Product.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm"
                        href="{{ route('products.index') }}"><i class="bi bi-arrow-left" aria-hidden="true"></i> Back to
                        Products</a></div>
            </div>

            <section class="row g-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <h3>OOps!! There are some problems your input</h3>
                    <ul>
                        @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                            
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-12 col-xl-12">
                    <form class="panel needs-validation" novalidate action="{{ route('products.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>Product Information</span></h2>

                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="firstName">Product name</label><input
                                    class="form-control" id="firstName" type="text" required name="name" value="{{old('name')}}">
                                <div class="invalid-feedback">Product name is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="lastName">SKU</label><input
                                    class="form-control" id="lastName" type="text" required name="sku" value="{{old('sku')}}">
                                <div class="invalid-feedback">SKU is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Price</label><input
                                    class="form-control" id="email" type="text" required name="price" value="{{old('price')}}">
                                <div class="invalid-feedback">Price is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="phone">Buying Price</label><input
                                    class="form-control" id="phone" type="tel" required name="buying_price"  value="{{old('buying_price')}}">
                                <div class="invalid-feedback">Buying Price is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Product Image</label><input
                                    class="form-control" id="email" type="file" name="image" value="{{old('image')}}">

                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Stock</label><input
                                    class="form-control" id="email" type="text" required name="stock" value="{{old('stock')}}">
                                <div class="invalid-feedback">Stock is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="role">Category</label><select
                                    class="form-select" id="role" required name="category_id">
                                    <option value="">Choose category</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}" {{old('category_id')==$category->id ? 'selected':''}}>{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                <div class="invalid-feedback">Choose a Category.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="team">Sub_category</label><select
                                    class="form-select" id="team" required name="sub_category_id">
                                    <option value="">Choose sub_category</option>
                                    @foreach ($sub_categorys as $sub_cat)
                                        
                                    <option value="{{$sub_cat->id}}" {{old('sub_category_id')==$sub_cat->id ? 'selected':''}}> {{$sub_cat->name}}</option>
                                     @endforeach

                                </select>
                                <div class="invalid-feedback">Choose a Sub_category.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="team">Unit</label><select
                                    class="form-select" id="team" required name="unit_id">
                                    <option value="">Choose unit</option>
                                    @foreach ($units as $unit)
                                    <option value="{{$unit->id}}" {{old('unit_id')==$unit->id ? 'selected':''}}>{{$unit->Short_name}}</option>
                                        
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Choose a Unit.</div>
                            </div>
                            <div class="col-12"><label class="form-label" for="notes">Description</label>
                                <textarea class="form-control" id="notes" rows="4" placeholder="Optional onboarding notes"
                                    name="description">{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="{{ route('products.index') }}">Cancel</a><button class="btn btn-primary"
                                type="submit"><i class="bi bi-person-check" aria-hidden="true"></i> Create
                                Product</button></div>
                    </form>
                </div>

            </section>
        </div>
    </main>
@endsection
