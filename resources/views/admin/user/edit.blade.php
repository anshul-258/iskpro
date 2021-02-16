@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User <a href="{{PREFIX}}admin/user/list" class="btn btn-default btn-rounded pull-right mb-4">List</a></div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}admin/user/edit" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="_token" value="{{csrf_token()}}">
              	<input type="hidden" name="user_id" value="{{$blog->id}}">
               
			

				<!-- ======================= Modal Create Ended ======================= -->

                <div class="panel-body">
                   <div class="modal-body mx-3">
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
				          <input type="text" id="defaultForm-email" class="form-control validate" name="name" value="{{$blog->name}}">
				         
				        </div>

				       <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
				          <input type="email" id="defaultForm-email" class="form-control validate" name="email" value="{{$blog->email}}" readonly>
				         
				        </div>
				       <!--  <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
				          <input type="password" id="defaultForm-email" class="form-control validate" name="password">
				         
				        </div> -->
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Role</label>
				          @php $role = \App\Role::All(); @endphp
				          <select name="role_id" class="form-control validate">
				          	@foreach($role as $r)
				          	  @if(Auth::user()->role_id == 1)
				          	  <option value="{{$r->id}}" @if($blog->role_id == $r->id) selected @endif>{{$r->name}}</option>
				          	  @elseif(Auth::user()->role_id == 2)
				          	  @if($r->id == 3 || $r->id == 4)
				          	  <option value="{{$r->id}}" @if($blog->role_id == $r->id) selected @endif>{{$r->name}}</option>
				          	  @endif
				          	  @elseif(Auth::user()->role_id == 3)
				          	   @if($r->id == 4)
				          	   <option value="{{$r->id}}" @if($blog->role_id == $r->id) selected @endif>{{$r->name}}</option>
				          	   @endif
				          	  @endif
				          	@endforeach
				          </select>
				         
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