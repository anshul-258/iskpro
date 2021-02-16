@extends('layout.userlayout')
@section('content')



<div class="container" style="margin-top: 100px;">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                @if(Session::has('message'))
                <div class="alert alert-success">
                     <strong>Success!</strong>{{ Session::get('message') }}
                </div>
                @endif
                <div class="panel-heading">Contact</div>


               <!-- =====================Modal for Create Blogs=================== -->
              <form action="{{PREFIX}}contact" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
               
            

                <!-- ======================= Modal Create Ended ======================= -->

                <div class="panel-body">
                   <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
                          <input type="text" id="defaultForm-email" class="form-control validate" name="name" value="" required>
                         
                        </div>
                         <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                          <input type="email" id="defaultForm-email" class="form-control validate" name="email" value="" required>
                         
                        </div>
                         <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="defaultForm-email">Phone</label>
                          <input type="text" id="defaultForm-email" class="form-control validate" name="phone" value="" required>
                         
                        </div>

                        <div class="md-form mb-4">
                           <label data-error="wrong" data-success="right" for="editor">Message</label>
                          <textarea class="form-control validate" name="message" required></textarea>
                         
                        </div>
                       

                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Send</button>
                      </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection