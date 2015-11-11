@extends('admin.layouts.master')

@section('title', 'Create Article')

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
            <a href="{{ route('admin.articles.index') }}" class="btn btn-success">Listing</a>
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
                            <form method="POST" action="{{ route('admin.articles.store') }}" role="form">
                                @include('admin.layouts.partials.errors')

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="excerpt">Excerpt:</label>
                                    <textarea type="text" name="excerpt" id="excerpt" class="form-control" value="{{ old('excerpt') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content">Content:</label>
                                    <textarea type="text" name="content" id="content" class="form-control" value="{{ old('content') }}"></textarea>
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
                                    <label for="published">Publish:</label>
                                    <input type="checkbox" name="published" value="1" checked>
                                </div>

                                <div class="form-group">
                                    <label for="published_date">Published date:</label>
                                    <input type="text" name="published_date" id="published_date" class="form-control" value="{{ old('published_date') }}">
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