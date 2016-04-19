@extends('admin.layouts.master')

@section('title', 'Danh sách sản phẩm')

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
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.products.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm sản phẩm</a>
        </div>
    </div>
    <br />

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách sản phẩm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-products">
                                    <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Khối lượng/Dung tích</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="text-center">{{ $product->name }}</td>
                                            <td>{{ $product->price ? display_money($product->price) : '' }}</td>
                                            <td>{{ $product->amount or '' }} {{ $product->unit_id ? $arrUnits[$product->unit_id] : '' }}</td>
                                            <td><span class="label {{ $product->status ? 'label-success' : 'label-danger' }}">{{ $product->status ? 'còn hàng' : 'hết hàng' }}</span></td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info" title="Edit"><i class="fa fa-edit"> Sửa</i></a>
                                                <button class="btn btn-danger btn-delete" data-link="{{ route('admin.products.destroy', $product->id) }}" onclick="delete_item(this);"><i class="fa fa-remove"></i> Xóa</button>
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
    <script src="/templates/admin/sbadmin2/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#dataTables-products").DataTable({
                responsive: true,
                "aoColumns": [
                    null,
                    null,
                    null,
                    null,
                    { bSortable: false }
                ]
            });
        });
    </script>

    <script type="text/javascript">
        var indexUrl = '{{ URL::route('admin.products.index') }}';
    </script>

    <script src="/templates/admin/js/delete-item.js"></script>
@endsection