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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dunclop</a></li>
                                    <li class="breadcrumb-item active">Products</li>
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

                                <h4 class="card-title">Datatable Editable</h4>

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td data-field="id" style="width: 80px">{{ $item->id }}</td>
                                                    <td data-field="name">{{ $item->name }}</td>
                                                    <td data-field="age">{{ $item->description }}</td>
                                                    <td data-field="gender">
                                                        <img src="{{ asset('assets/uploads/products/' . $item->image) }}"
                                                            alt="Image Product" class="cate-image">
                                                    </td>
                                                    <td style="width: 100px">
                                                        <a href="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                        <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
