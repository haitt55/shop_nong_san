@extends('admin.layouts.master')

@section('title', 'Tin tức')

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
            <h1 class="page-header">Tin tức</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.news.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tin tức</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tin tức
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-news">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th width="10%">Ngày sửa</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $index = 0; ?>
                                        @foreach ($arrNews as $news)
                                            <?php $index ++; ?>
                                        <tr>
                                            <td>#{{ $index }}</td>
                                            <td>{{ $news->title }}</td>
                                            <td>{!! $news->content ? string_limit($news->content) : '' !!} </td>
                                            <td>{{ $news->updated_at }}</td>
                                            <td width="18%">
                                                <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Sửa</a>
                                                <button class="btn btn-danger btn-delete" data-link="{{ route('admin.news.destroy', $news->id) }}" onclick="delete_item(this);"><i class="fa fa-remove"></i> Xóa</button>
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
@endsection

@section('inline_scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $("#dataTables-news").DataTable({
            responsive: true,
            "order": [[ 3, "desc" ]],
            "aoColumns": [
                { bSortable: false },
                null,
                { bSortable: false },
                null,
                { bSortable: false }
            ]
        });
    });
    </script>

    <script type="text/javascript">
        var indexUrl = '{{ URL::route('admin.news.index') }}';
    </script>

    <script src="/templates/admin/js/delete-item.js"></script>
@endsection