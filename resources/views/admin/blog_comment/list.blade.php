@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users </div>

                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%" id="blogcommenttable">
                        <thead>
                            <tr>
                                <th>Blog Title</th>
                                <th>comment</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
