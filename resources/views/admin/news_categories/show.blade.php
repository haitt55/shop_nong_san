@extends('admin.layouts.master')

@section('title', 'Category Details')

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
            <a href="{{ route('admin.categories.index') }}" class="btn btn-success"><i class="fa fa-list"></i> List</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <p class="form-control-static">{{ $category->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Parent</label>
                                    <p class="form-control-static">{{ $category->parent_id ? (!empty($category->parent()) ? $category->parent->name : '') : '' }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Type</label>
                                    <p class="form-control-static">{{ $category->type ? config('app.category_types')[$category->type] : '' }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Page title</label>
                                    <p class="form-control-static">{{ $category->page_title }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Key word</label>
                                    <p class="form-control-static">{{ $category->mete_keyword }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <p class="form-control-static">{{ $category->meta_description }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="content">Status</label>
                                    <p class="form-control-static"><span class="label {{ $category->active ? 'label-success' : 'label-danger' }}">{{ $category->active ? 'active' : 'unactive' }}</span></p>
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
                            window.location.href = '{{ URL::route('admin.categories.show', $category->id) }}';
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