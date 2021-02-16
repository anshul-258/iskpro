@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Blog category <a href="{{PREFIX}}admin/blogcat/list" class="btn btn-default btn-rounded pull-right mb-4">List</a></div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}admin/blogcat/edit" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="_token" value="{{csrf_token()}}">
              	<input type="hidden" name="blog_id" value="{{$blog->id}}">
               
			

				<!-- ======================= Modal Create Ended ======================= -->

                <div class="panel-body">
                   <div class="modal-body mx-3">
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
				          <input type="text" id="defaultForm-email" class="form-control validate" name="name" value="{{$blog->name}}" required>
				         
				        </div>

				      </div>
				      <div class="modal-footer d-flex justify-content-center">
				        <button class="btn btn-default">Update</button>
				      </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection