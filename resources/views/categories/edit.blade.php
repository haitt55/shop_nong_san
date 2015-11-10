@extends('layouts.master')

@section('title', 'Create Category')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('categories.index') }}" class="btn btn-success">Listing</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Category
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('categories.store') }}" role="form">
                                @include('layouts.partials.errors')

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="parent_id">Parent:</label>
                                    <select type="text" name="parent_id" id="parent_id" class="form-control" value="{{ old('parent_id') }}">
                                        <option value="">--</option>
                                        @foreach($categoryOptions as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="parent_id">Type:</label>
                                    <select type="text" name="type" id="type" class="form-control" value="{{ old('type') }}">
                                        <option value="">--</option>
                                        @foreach($typeOptions as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="page_title">Page Title:</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_keyword">Key word:</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Description:</label>
                                    <textarea type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="active">Active:</label>
                                    <input type="checkbox" name="active" value="1" checked>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection