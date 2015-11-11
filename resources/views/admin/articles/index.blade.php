@extends('admin.layouts.master')

@section('title', 'Articles')

@section('css')
@parent

        <!-- DataTables CSS -->
<link href="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="/templates/admin/sbadmin2/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Articles</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> New</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Articles
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-articles">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>content</th>
                                        <th>Active</th>
                                        <th>Last Update</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td><a href="{{ route('admin.articles.show', $article->id) }}">{{ $article->title }}</td>
                                            <td><a href="{{ route('admin.users.show', $article->user() ? $article->user->id : '') }}">{{ $article->user() ? $article->user->name : '' }}</td>
                                            <td>{{ $article->content }}</td>
                                            <td><span class="label label-{{ $article->active ? 'success' : 'default' }}">{{ $article->active ? 'Active' : 'Inactive' }}</span></td>
                                            <td>{{ $article->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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

    @section('javascript')
    @parent
            <!-- DataTables JavaScript -->
    <script src="/templates/admin/sbadmin2/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#dataTables-articles").DataTable({
                responsive: true,
                "aoColumns": [
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