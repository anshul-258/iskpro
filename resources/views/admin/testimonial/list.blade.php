@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">testimonials <a href="{{PREFIX}}admin/testimonial/create" class="btn btn-default btn-rounded pull-right mb-4">Create testimonial</a></div>


              

                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%" id="testitable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Date</th>
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