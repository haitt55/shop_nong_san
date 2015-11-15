@extends('admin.layouts.master')

@section('title', 'Message Details')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Messages</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('admin.messages.index') }}" class="btn btn-success"><i class="fa fa-list"></i> List</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Message Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <p class="form-control-static">{{ $message->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <p class="form-control-static">{{ $message->email }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <p class="form-control-static">{{ $message->phone_number }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <p class="form-control-static">{{ $message->content }}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-danger" id="btn-delete" data-link="{{ route('admin.messages.destroy', $message->id) }}"><i class="fa fa-remove"></i> Delete message</button>
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
        var edit_url = '{{ URL::route('admin.messages.edit', $message->id) }}';
        var index_url = '{{ URL::route('admin.messages.index') }}';
    </script>
    <script src="/templates/admin/sbadmin2/js/delete.js"></script>
@endsection