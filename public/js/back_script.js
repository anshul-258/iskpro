
  $('#usertable').on('click','.status', function(){
    
    var id = $(this).attr('id');
    var val = $(this).data('value');
    $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/user/userstatus",
      data: {'id':id,'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        if(data == 'active'){
          $("#"+id).removeClass('btn-danger');
          $("#"+id).addClass('btn-success');
          $("#"+id).text('Active');
          $("#"+id).data('value','active');
        }
        else
        {
          $("#"+id).removeClass('btn-success');
          $("#"+id).addClass('btn-danger');
          $("#"+id).text('Inactive');
          $("#"+id).data('value','pending');
        }

      }
    });

});

CKEDITOR.replace( 'editor', {

    filebrowserImageUploadUrl: '{{route("ckeditor.upload")}}',
    filebrowserBrowseUrl: '{{PREFIX}}uploads/blog'
  });



$(document).ready(function() {
    $('#blogtable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin/blog/getData') }}',
        columns: [
            {data: 'cat_id', name: 'cat_id'},
            {data: 'title', name: 'title'},
             {data: 'image', name: 'image',render: function( data, type, full, meta ) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
                    }},
            {data: 'content', name: 'content'},
            {data: 'created_at', name: 'created_at'},
             {data: 'action', name: 'action'},
        ]
    });
});
$(document).ready(function() {
    $('#testitable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin/testimonial/getData') }}',
        columns: [
            {data: 'name', name: 'name'},
             {data: 'image', name: 'image',render: function( data, type, full, meta ) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
                    }},
            {data: 'content', name: 'content'},
            {data: 'created_at', name: 'created_at'},
             {data: 'action', name: 'action'},
        ]
    });
});
$(document).ready(function() {
    $('#usertable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin/user/getData') }}',
        columns: [
            {data: 'uname', name: 'uname'},
            {data: 'uemail', name: 'uemail'},
            {data: 'rname', name: 'rname'},
            {data: 'status', name: 'status'},
             {data: 'action', name: 'action'},
        ]
    });
});
$(document).ready(function() {
    $('#contacttable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin/contact/getContact') }}',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'message', name: 'message'},
            {data: 'created_at', name: 'created_at'},
             
        ]
    });
});
$(document).ready(function() {
    $('#blogcattable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin/blogcat/getBlogCat') }}',
        columns: [
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action'},
             
        ]
    });
});
