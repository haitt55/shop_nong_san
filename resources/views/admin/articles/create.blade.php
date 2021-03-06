@extends('admin.layouts.master')

@section('title', 'Add Article')

@section('css')
    @parent

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">
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
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.articles.index') }}" class="btn btn-success"><i class="fa fa-list"></i> List</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Article
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data" role="form">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="excerpt">Excerpt</label>
                                    <textarea name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content">{{ old('content') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="author">Author</label>
                                    <select name="author_id" id="author_id" class="form-control">
                                        @foreach ($authorsList as $k => $v)
                                        <option value="{{ $k }}"{{ (old('author_id') == $k) ? ' selected="selected"' : '' }}>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="published" id="published" value="1"{{ old('published', true) ? ' checked="checked"' : '' }}> Visible</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Featured Image</label>
                                    <div class="dropzone" id="photo"></div>
                                    <input type="hidden" name="image" value="{{ old('image') }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
        $('#excerpt').summernote({
            height: 200,
            minHeight: null,
            maxHeight: null
        });
        $('#content').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        Dropzone.options.photo = {
            url: "{{ route('admin.articles.addPhoto') }}",
            paramName: 'photo', // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            acceptedFiles: 'image/*',
            maxFiles: 1,
            headers: {
                'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
            },
            thumbnailWidth: {{ config('article.thumbnail_width') }},
            thumbnailHeight: {{ config('article.thumbnail_height') }},
            addRemoveLinks: true,
            removedfile: function(file) {
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function() {
                @if ($article->image && file_exists(public_path(config('article.image_path') . '/' . $article->image)))
                var thisDropzone = this;
                var fileName = $('input[name="image"]').val();
                if (fileName != '') {
                    var mockFile = { name: '{{ config("article.image_path") }}/' + fileName, size: 12345 };
                    thisDropzone.emit('addedfile', mockFile);
                    thisDropzone.emit('thumbnail', mockFile, '{{ config("article.image_path") }}/tn-' + fileName);
                    thisDropzone.emit("complete", mockFile);
                    var existingFileCount = 1;
                    thisDropzone.options.maxFiles = thisDropzone.options.maxFiles - existingFileCount;
                }
                @endif
                this.on("success", function(file, response) {
                    $('input[name="image"]').val(response.fileName);
                });
                this.on("removedfile", function(file) {
                    this.options.maxFiles = this.options.maxFiles + 1;
                    var image = $('input[name="image"]');
                    var fileName = image.val();
                    image.val('');
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('admin.articles.deletePhoto') }}",
                        data: 'fileName=' + fileName,
                        dataType: 'html',
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
                        }
                    });
                });
                this.on("maxfilesexceeded", function(file) {
                    this.removeFile(file);
                });
            }
        };
    });
    </script>
@endsection