@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Blog Comment <a href="{{PREFIX}}admin/blogcomment/list" class="btn btn-default btn-rounded pull-right mb-4">List</a></div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}admin/blogcomment/edit" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="_token" value="{{csrf_token()}}">
              	<input type="hidden" name="user_id" value="{{$blog->id}}">
               
			

				<!-- ======================= Modal Create Ended ======================= -->

                <div class="panel-body">
                   <div class="modal-body mx-3">
                   	   <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Role</label>
				          @php $role = \App\User::All(); @endphp
				          <select name="role_id" class="form-control validate" disabled>
				          	@foreach($role as $r)
				          	  <option value="{{$r->id}}" @if($blog->user_id == $r->id) selected @endif>{{$r->name}}</option>
				          	@endforeach
				          </select>
				         
				        </div>
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Role</label>
				          @php $role = \App\Blog::All(); @endphp
				          <select name="role_id" class="form-control validate" disabled>
				          	@foreach($role as $r)
				          	  <option value="{{$r->id}}" @if($blog->blog_id == $r->id) selected @endif>{{$r->title}}</option>
				          	@endforeach
				          </select>
				         
				        </div>
				       

				       <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Comment</label>
				          <textarea  id="defaultForm-email" class="form-control validate" name="comment">{{$blog->comment}}</textarea>
				         
				        </div>
				       <!--  <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
				          <input type="password" id="defaultForm-email" class="form-control validate" name="password">
				         
				        </div> -->
				        

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