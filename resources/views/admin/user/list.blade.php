@extends('layout.adminlayout')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users <a href="" class="btn btn-default btn-rounded pull-right mb-4" data-toggle="modal" data-target="#create">Create User</a></div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}admin/user/create" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				  aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header text-center">
				        <h4 class="modal-title w-100 font-weight-bold">Create User</h4>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body mx-3">
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
				          <input type="text" id="defaultForm-email" class="form-control validate" name="name" required>
				         
				        </div>

				       <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
				          <input type="email" id="defaultForm-email" class="form-control validate" name="email" required>
				         
				        </div>
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
				          <input type="password" id="defaultForm-email" class="form-control validate" name="password" required>
				         
				        </div>
				        <div class="md-form mb-5">
				          <label data-error="wrong" data-success="right" for="defaultForm-email">Role</label>
				          @php $role = \App\Role::All(); @endphp
				          <select name="role_id" class="form-control validate">
				          	@foreach($role as $r)
				          	  @if(Auth::user()->role_id == 1)
				          	  <option value="{{$r->id}}">{{$r->name}}</option>
				          	  @elseif(Auth::user()->role_id == 2)
				          	  @if($r->id == 3 || $r->id == 4)
				          	  <option value="{{$r->id}}">{{$r->name}}</option>
				          	  @endif
				          	  @elseif(Auth::user()->role_id == 3)
				          	   @if($r->id == 4)
				          	   <option value="{{$r->id}}">{{$r->name}}</option>
				          	   @endif
				          	  @endif
				          	@endforeach
				          </select>
				         
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
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%" id="usertable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
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
