@extends('admin.layouts.master')

@section('title', 'Thông tin chi tiết sản phẩm')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chi tiết sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.products.index') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chi tiết sản phẩm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <div class="form-group thumbnail">
                                            <img width="100%" src=@if($product->images->first()) "/{{ $product->images->first()->path }}" @else '/img/no_image.png' @endif alt="">
                                        </div>
                                        <div class="form-group">
                                            @foreach ($product->images->chunk(4) as $set)
                                                <div class="row">
                                                    @foreach ($set as $image)
                                                        <div class="col-xs-3">
                                                            <img width="100%" src="/{{ $image->path }}" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <table class="table">
                                            <tr>
                                                <th><p class="form-control-static"><strong>Tên sản phẩm:</strong></p></th>
                                                <td><p class="form-control-static">{{ $product->name }}</p></td>
                                            </tr>
                                            <tr>
                                                <th><p class="form-control-static"><strong>Xuất xứ:</strong></p></th>
                                                <td><p class="form-control-static">{{ $product->made_in }}</p></td>
                                            </tr>
                                            <tr>
                                                <th><p class="form-control-static"><strong>Dung tích/Khối lượng:</strong></p></th>
                                                <td><p class="form-control-static">{{ $product->amount or '' }} {{ $product->unit_id ? $arrUnits[$product->unit_id] : '' }}</p></td>
                                            </tr>
                                            <tr>
                                                <th><p class="form-control-static"><strong>Giá:</strong></p></th>
                                                <td><p class="form-control-static">{{ display_money($product->price) }}</p></td>
                                            </tr>
                                            <tr>
                                                <th><p class="form-control-static"><strong>Khuyến mãi:</strong></p></th>
                                                <td><p class="form-control-static">{{ $product->discount ? $product->discount . '%' : '' }}</p></td>
                                            </tr>
                                            <tr>
                                                <th><p class="form-control-static"><strong>Trạng thái:</strong></p></th>
                                                <td><p class="form-control-static"><span class="label {{ $product->status ? 'label-success' : 'label-danger' }}">{{ $product->status ? 'còn hàng' : 'tạm hết' }}</span></p></td>
                                            </tr>
                                            <tr>
                                                <th><p class="form-control-static"><strong>Danh mục:</strong></p></th>
                                                <td><p class="form-control-static">{{ $product->category_id ? $product->category->name : '' }}</p></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <?php $articles = $product->articles->sortBy('order'); ?>
                                @if($articles)
                                    @foreach($articles as $article)
                                    <div>
                                        <div>
                                            <img src="/{{ $article->image }}" alt="">
                                        </div>
                                        <div>
                                            <p><i>{{ $article->image ? $article->image_comment : '' }}</i></p>
                                        </div>
                                        <div>
                                            {!! $article->paragraph !!}
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info" title="Edit"><i class="fa fa-edit"> Sửa</i></a>
                            <button class="btn btn-danger" id="btn-delete" data-link="{{ route('admin.products.destroy', $product->id) }}"><i class="fa fa-remove"></i> Xóa</button>
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
            if (confirm('Bạn có thực sự muốn xóa sản phẩm này?')) {
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
                            window.location.href = '{{ URL::route('admin.products.show', $product->id) }}';
                        } else {
                            window.location.href = '{{ URL::route('admin.products.index') }}';
                        }
                    },
                    error: function(data) {
                        window.location.href = '{{ URL::route('admin.products.show') }}';
                    }
                });
            }
        });
    });
    </script>
@endsection