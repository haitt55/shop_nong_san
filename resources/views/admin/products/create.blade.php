@extends('admin.layouts.master')

@section('title', 'Thêm mới sản phẩm')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới sản phẩm</h1>
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
                    Thêm mới sản phẩm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.products.store') }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm <span class="require">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Danh mục</label>
                                    <select type="text" name="category_id" id="category_id" class="form-control" value="{{ old('category_id') }}">
                                        <option value="">--</option>
                                        @foreach($categoryOptions as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá</label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="VNĐ">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Giảm giá</label>
                                    <input type="text" name="discount" id="discount" class="form-control" value="{{ old('discount') }}" placeholder="%">
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-xs-8">
                                        <label for="amount">Dung tích/Khối lượng</label>
                                        <input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount') }}">
                                    </div>
                                    <div class="form-group col-xs-4">
                                        <label for="unit_id">Đơn vị</label>
                                        <select type="text" name="unit_id" id="unit_id" class="form-control" value="{{ old('unit_id') }}">
                                            @foreach($arrUnits as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="made_in">Xuất xứ</label>
                                    <input type="text" name="made_in" id="made_in" class="form-control" value="{{ old('made_in') }}" placeholder="VD: Hà nội, TP HCM ...">
                                </div>
                                <div class="form-group">
                                    <label for="image">Ảnh đại diện</label>
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="image1">Ảnh phụ 1</label>
                                    <input type="file" name="image1" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="image2">Ảnh phụ 2</label>
                                    <input type="file" name="image2" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="image3">Ảnh phụ 3</label>
                                    <input type="file" name="image3" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Chi tiết sản phẩm</label>
                                    <textarea name="detail" id="detail">{{ old('detail') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Tiêu đề trang</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Từ khóa</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Mô tả</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="status" id="status" value="1" {{ old('status', true) ? ' checked="checked"' : '' }}> Còn hàng</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
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

@section('inline_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#detail').summernote({
                height: 300,
                minHeight: null,
                maxHeight: null
            });
        });
    </script>
@endsection

