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
            <h1 class="page-header">Khuyến mại</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('admin.discount.update') }}" id="form" role="form">
                @include('admin.layouts.partials.errors')
                {{ csrf_field() }}
                {!! method_field('put') !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-discount">
                                        <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Khối lượng/Dung tích</th>
                                            <th>Khuyến mại</th>
                                            <th>
                                                <button type="button" id="check-all" class="btn btn-primary" onclick="check_all();">Chọn tất cả</button>
                                                <button type="button" id="uncheck-all" class="btn btn-primary" onclick="uncheck_all();">Bỏ chọn</button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><a href="{{ route('admin.products.show', $product->id) }}">{{ $product->name }}</a></td>
                                                <td>{{ $product->price ? display_money($product->price) : '' }}</td>
                                                <td>{{ $product->amount or '' }} {{ $product->unit_id ? $arrUnits[$product->unit_id] : '' }}</td>
                                                <td><input type="text" name="discount[{{ $product->id }}]" id="discount_{{ $product->id }}" class="form-control discount" value="{{ old('discount', $product->discount) }}" style="width: 50px">%</td>
                                                <td><input type="checkbox" name="check_discount[{{ $product->id }}]" class="check-discount"></td>
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
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <button type="button" id="submit-btn" class="btn btn-primary">Lưu</button>
                        <button type="button" id="clear-btn" class="btn btn-danger">Bỏ khuyến mại</button>
                    </div>
                </div>
            </form>
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
            $("#dataTables-discount").DataTable({
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

    <script type="text/javascript">
        $(document).ready(function() {
            changeStatusSubmitButton();

            $('.discount').each(function() {
                $(this).change(function() {
                    changeStatusSubmitButton();
                });
                $(this).keyup(function() {
                    changeStatusSubmitButton();
                });
            });

            $('#submit-btn').click(function() {
                $('#form').append("<input type='text' name='mode' value='save'/>");
                $('#form').submit();
            });

            $('#clear-btn').click(function() {
                $('#form').append("<input type='text' name='mode' value='clear'/>");
                $('#form').submit();
            });

            fnShowHideDeleteButton();
        });

        function changeStatusSubmitButton() {
            var enable = true;
            $('.discount').each(function() {
                var val = $(this).val();
                if (!$.isNumeric(val) || (val < 0 || val > 100)) {
                    enable = false;
                }
            });
            if (enable) {
                if (!$('#submit-btn').hasClass('active')) {
                    $('#submit-btn').addClass('active');
                }
                if ($('#submit-btn').hasClass('disabled')) {
                    $('#submit-btn').removeClass('disabled');
                }
            } else {
                if (!$('#submit-btn').hasClass('disabled')) {
                    $('#submit-btn').addClass('disabled');
                }
                if ($('#submit-btn').hasClass('active')) {
                    $('#submit-btn').removeClass('active');
                }
            }
        }

        function check_all() {
            $(".check-discount").each(function () {
                if (!$(this).prop( "checked" )) {
                    $(this).prop('checked', true);
                }
            });
            fnShowHideDeleteButton();
        }

        function uncheck_all() {
            $(".check-discount").each(function () {
                if ($(this).prop( "checked" )) {
                    $(this).prop('checked', false);
                }
            });
            fnShowHideDeleteButton();
        }

        function fnShowHideDeleteButton() {
            var checked = false;
            $('.check-discount').each(function() {
                if ($(this).prop( "checked" )) {
                    checked = true;
                }
            });
            if (!checked) {
                document.getElementById('clear-btn').style.pointerEvents = 'none';
                document.getElementById('clear-btn').style.opacity = '0.5';
            } else {
                document.getElementById('clear-btn').style.pointerEvents = 'auto';
                document.getElementById('clear-btn').style.opacity = '1';
            }
        }

    </script>
@endsection