@php
$routeValue= '';
@endphp

@if(!isset($route_as_url))
@php
$routeValue =  route($route);
@endphp
@else
@php
$routeValue = $route_as_url;
@endphp
@endif


@if(isset($bool))
@php $routeValue .= "\/".$bool;
@endphp
<script type="text/javascript">
console.log('{{ $routeValue }}');
</script>
@endif


@php 

$setData = array();
if(isset($table_columns))
{
foreach($table_columns as $col) {
$temp['data'] = $col;
$temp['name'] = $col;
array_push($setData, $temp);
}
$setData = json_encode($setData);
}
@endphp
 
@php
if(!isset($class_name)){
$class_name=".datatable";
}else{
dd($class_name);
}

dd($setData);
@endphp
  <script>

  $.fn.dataTable.ext.errMode = 'none';
  var tableObj;
 
    $(document).ready(function(){
    // debugger;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
   
    tableObj = $('{{ $class_name }}').DataTable({

           processing: true,
           serverSide: true,
            "aaSorting": [],
           cache: true,
           type: 'GET',
           ajax: '{{ $routeValue }}',
           @if(isset($table_columns))
           columns: {!!$setData!!}
           @endif

   });
   tableObj.columns().every( function () {
       var that = this;
       $( 'input', this.header() ).on( 'keyup change', function () {
           if ( that.search() !== this.value ) {
               that
                   .search( this.value )
                   .draw();
           }
        });
    });
    // debugger;
     $('.datatable').find('select.form-control').removeClass('form-control input-sm').addClass('full-width').attr('data-init-plugin','select2');
    });
    // console.log("it is working");
  </script>