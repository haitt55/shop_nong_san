@extends('admin.layouts.master')

@section('title', 'Edit Category')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">categories</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-success"><i class="fa fa-list"></i> List</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit category
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.categories.update', $category->id) }}" role="form">
                                @include('admin.layouts.partials.errors')
                                {{ csrf_field() }}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Parent</label>
                                    <select type="text" name="parent_id" id="parent_id" class="form-control" value="{{ $category->parent_id }}">
                                        <option value="">--</option>
                                        @foreach($categoryOptions as $key => $value)
                                            <option value="{{ $key }}" {{ $key == $category->parent_id ? 'selected' : '' }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <select type="text" name="type" id="type" class="form-control" value="{{ $category->type }}">
                                        <option value="">--</option>
                                        @foreach($typeOptions as $key => $value)
                                            <option value="{{ $key }}  {{ $key == $category->type ? 'selected' : '' }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ $category->page_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ $category->meta_keyword }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ $category->meta_description }}">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="active" id="active" value="1"{{ $category->active ? ' checked="checked"' : '' }}> Active</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-danger" id="btn-delete" data-link="{{ route('admin.categories.destroy', $category->id) }}"><i class="fa fa-remove"></i> Delete category</button>
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

@section('inline_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn-delete").click(function() {
                if (confirm('Do you really want to delete this data?')) {
                    var url = $(this).attr('data-link');
                    $.ajax({
                        url : url,
                        type : 'DELETE',
                        beforeSend: function (xhr) {
                            var token = $('meta[name="csrf_token"]').attr('content');
                            if (token) {
                                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                            }
                        },
                        success: function(data) {
                            if (data.error) {
                                window.location.href = '{{ URL::route('admin.categories.edit', $category->id) }}';
                            } else {
                                window.location.href = '{{ URL::route('admin.categories.index') }}';
                            }
                        },
                        error: function(data) {
                            window.location.href = '{{ URL::route('admin.categories.index') }}';
                        }
                    });
                }
            });
        });
    </script>
@endsection