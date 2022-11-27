@extends('layouts.admin')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Category</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Category</a></li>
                                    <li class="breadcrumb-item active">Add Category</li>
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
                                <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

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
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="description" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="formCheck1" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck1" name="status">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label">Popular</label>
                                        <div class="col-sm-1">
                                            <input class="form-check-input" type="checkbox" id="example-tel-input"
                                                name="popular">
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
                                            <textarea class="form-control" name="meta_keywords" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Meta
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" rows="5"></textarea>
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
