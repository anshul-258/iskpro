@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Blogs <a href="{{PREFIX}}admin/blog/create" class="btn btn-default btn-rounded pull-right mb-4">Create Blog</a></div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}admin/blog/create" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				  aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header text-center">
				        <h4 class="modal-title w-100 font-weight-bold">Create Blog</h4>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body mx-3">
				      	<div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Role</label>
				          @php $role = \App\Blogcat::All(); @endphp
				          <select name="cat_id" class="form-control validate" required>
				          	@foreach($role as $r)
				          	  <option value="{{$r->id}}">{{$r->name}}</option>
				          	@endforeach
				          </select>
				         
				        </div>


				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Title</label>
				          <input type="text" id="defaultForm-email" class="form-control validate" name="title" required>
				         
				        </div>

				        <div class="md-form mb-4">
				           <label data-error="wrong" data-success="right" for="editor">Content</label>
				          <textarea  id="editor" class="form-control validate" name="content" required></textarea>
				         
				        </div>
				        <div class="md-form mb-4">
				           <label data-error="wrong" data-success="right" for="image">Image</label>
				          <input type="file" id="image" class="form-control validate" name="image">
				         
				        </div>

				      </div>
				      <div class="modal-footer d-flex justify-content-center">
				        <button class="btn btn-default">Create</button>
				      </div>
				    </div>
				  </div>
				</div>
			</form>

				<!-- ======================= Modal Create Ended ======================= -->

                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%" id="blogtable">
                        <thead>
                            <tr>
                            	<th>Category</th>
                                <th>Title</th>
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