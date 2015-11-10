@extends('layouts.master')

@section('title', 'List Categories')

@section('css')
    @parent

    <!-- DataTables CSS -->
    <link href="/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    @endsection

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
            <a href="{{ route('categories.create') }}" class="btn btn-success">Create</a>
        </div>
    </div>
    <br />

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listing Categories
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-categories">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Type</th>
                                        <th>Page Title</th>
                                        <th>Keyword</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->parent_id ? (!empty($category->parent()) ? $category->parent->name : '') : '' }}</td>
                                            <td>{{ $category->type ? config('app.category_types')[$category->type] : '' }}</td>
                                            <td>{{ $category->page_title }}</td>
                                            <td>{{ $category->meta_keyword }}</td>
                                            <td><span class="label {{ $category->active ? 'label-success' : 'label-danger' }}">{{ $category->active ? 'active' : 'unactive' }}</span></td>
                                            <td>
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection

@section('javascript')
@parent

    <!-- DataTables JavaScript -->
    <script src="/assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#dataTables-categories").DataTable({
                responsive: true,
                "aoColumns": [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    { bSortable: false }
                ]
            });
        });
    </script>
@endsection