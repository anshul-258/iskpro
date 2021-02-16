@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Blog <a href="{{PREFIX}}admin/blog/list" class="btn btn-default btn-rounded pull-right mb-4">List</a></div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}admin/blog/edit" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="_token" value="{{csrf_token()}}">
              	<input type="hidden" name="blog_id" value="{{$blog->id}}">
               
			

				<!-- ======================= Modal Create Ended ======================= -->

                <div class="panel-body">
                   <div class="modal-body mx-3">
                   	    <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Role</label>
				          @php $role = \App\Blogcat::All(); @endphp
				          <select name="cat_id" class="form-control validate" required>
				          	@foreach($role as $r)
				          	  <option value="{{$r->id}}" @if($blog->cat_id == $r->id) selected @endif>{{$r->name}}</option>
				          	@endforeach
				          </select>
				        </div>

				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Title</label>
				          <input type="text" id="defaultForm-email" class="form-control validate" name="title" value="{{$blog->title}}" required>
				         
				        </div>

				        <div class="md-form mb-4">
				           <label data-error="wrong" data-success="right" for="editor">Content</label>
				          <textarea  id="editor" class="form-control validate" name="content" style="height: 200px;" required>{{$blog->content}}</textarea>
				         
				        </div>
				        @if($blog->image)
				        <br>
				        <div class="md-form mb-4">
				           <label data-error="wrong" data-success="right" for="image">Uploaded Image</label>
				           <br>
				          <img src="{{PREFIX}}uploads/blog/{{$blog->image}}" style="width: 100px;">
				         
				        </div>
				        <br>
				        @endif
				        <div class="md-form mb-4">
				           <label data-error="wrong" data-success="right" for="image">Image</label>
				          <input type="file" id="image" class="form-control validate" name="image">
				         
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