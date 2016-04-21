@extends('admin.layouts.master')

@section('title', 'Sửa sản phẩm')

@section('css')
    @parent

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa sản phẩm</h1>
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
                    Sửa sản phẩm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.products.update', $product->id) }}" role="form">
                                @include('admin.layouts.partials.errors')
                                {{ csrf_field() }}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm <span class="require">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Danh mục</label>
                                    <select type="text" name="category_id" id="category_id" class="form-control" value="{{ old('category_id', $product->category_id) }}">
                                        <option value="">--</option>
                                        @foreach($categoryOptions as $key => $value)
                                            <option value="{{ $key }}" {{ $key == $product->category_id ? 'selected' : '' }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá</label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" placeholder="VNĐ">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Giảm giá</label>
                                    <input type="text" name="discount" id="discount" class="form-control" value="{{ old('discount', $product->discount) }}" placeholder="%">
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-xs-8">
                                        <label for="amount">Dung tích/Khối lượng</label>
                                        <input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount', $product->amount) }}">
                                    </div>
                                    <div class="form-group col-xs-4">
                                        <label for="unit_id">Đơn vị</label>
                                        <select type="text" name="unit_id" id="unit_id" class="form-control" value="{{ old('unit_id', $product->unit_id) }}">
                                            @foreach($arrUnits as $key => $value)
                                                <option value="{{ $key }}" {{ $key == $product->unit_id ? 'selected' : '' }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="detail">Chi tiết sản phẩm</label>
                                    <textarea name="detail" id="detail">{{ old('detail', $product->detail) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Tiêu đề trang</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title', $product->page_title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Từ khóa</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword', $product->meta_keyword) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Mô tả</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description', $product->meta_description) }}">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="status" id="status" value="1" {{ old('status', $product->status) ? ' checked="checked"' : '' }}> Còn hàng</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 gallery">
                                            @foreach ($product->images->chunk(3) as $set)
                                                <div class="row">
                                                    @foreach ($set as $image)
                                                        <div class="col-md-4 gallery__image">
                                                            <img src="/{{ $image->thumbnail_path }}" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="dropzone" id="image"></div>
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

@section('javascript')
    @parent

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
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

    <script type="text/javascript">
        $(document).ready(function() {
            Dropzone.options.image = {
                url: "{{ route('admin.products.images', $product->id) }}",
                paramName: 'image', // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                acceptedFiles: 'image/*',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
                },
                thumbnailWidth: {{ config('product.thumbnail_width') }},
                thumbnailHeight: {{ config('product.thumbnail_height') }}
            };
        });
    </script>
@endsection