@extends('layouts.admin')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Products</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Products</a></li>
                                    <li class="breadcrumb-item active">Add Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Select a
                                            Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="cate_id" aria-label="Default select example">
                                                <option value="">Open this select menu</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input"
                                                name="name">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-search-input"
                                                name="slug">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Small
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="small_description" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="formCheck1" class="col-sm-2 col-form-label">Original Price</label>
                                        <div class="col-sm-10">
                                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                                    class="input-group-btn input-group-prepend"><button
                                                        class="btn btn-primary bootstrap-touchspin-down"
                                                        type="button">-</button></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span
                                                        class="input-group-text">$</span></span><input id="demo2"
                                                    type="number" value="0" name="original_price"
                                                    class="form-control"><span
                                                    class="input-group-btn input-group-append"><button
                                                        class="btn btn-primary bootstrap-touchspin-up"
                                                        type="button">+</button></span></div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="formCheck1" class="col-sm-2 col-form-label">Selling Price</label>
                                        <div class="col-sm-10">
                                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                                    class="input-group-btn input-group-prepend"><button
                                                        class="btn btn-primary bootstrap-touchspin-down"
                                                        type="button">-</button></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span
                                                        class="input-group-text">$</span></span><input id="demo2"
                                                    type="number" value="0" name="selling_price"
                                                    class="form-control"><span
                                                    class="input-group-btn input-group-append"><button
                                                        class="btn btn-primary bootstrap-touchspin-up"
                                                        type="button">+</button></span></div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="formCheck1" class="col-sm-2 col-form-label">Tax</label>
                                        <div class="col-sm-10">
                                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                                    class="input-group-btn input-group-prepend"><button
                                                        class="btn btn-primary bootstrap-touchspin-down"
                                                        type="button">-</button></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span
                                                        class="input-group-text">$</span></span><input id="demo2"
                                                    type="number" value="0" name="tax"
                                                    class="form-control"><span
                                                    class="input-group-btn input-group-append"><button
                                                        class="btn btn-primary bootstrap-touchspin-up"
                                                        type="button">+</button></span></div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="formCheck1" class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-10">
                                            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span
                                                    class="input-group-btn input-group-prepend"><button
                                                        class="btn btn-primary bootstrap-touchspin-down"
                                                        type="button">-</button></span><input id="demo3"
                                                    type="number" value="" name="qty"
                                                    class="form-control"><span
                                                    class="input-group-btn input-group-append"><button
                                                        class="btn btn-primary bootstrap-touchspin-up"
                                                        type="button">+</button></span></div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-1">
                                            <input class="form-check-input" type="checkbox" id="example-tel-input"
                                                name="status">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label">Trending</label>
                                        <div class="col-sm-1">
                                            <input class="form-check-input" type="checkbox" id="example-tel-input"
                                                name="trending">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-password-input" class="col-sm-2 col-form-label">Meta
                                            Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-password-input"
                                                name="meta_title">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Meta
                                            Keywords</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_keywords" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Meta
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="customFile" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="customFile" name="image">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="col-mb-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>
                                <!-- end row -->
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

            </div>

        </div>
        <!-- End Page-content -->

        @include('layouts.inc.adminfooter')

    </div>
@endsection
