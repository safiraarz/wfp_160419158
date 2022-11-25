@extends('layouts.conquer')
<!-- @section('judul_halaman')
    Welcome
@endsection -->
@section('content')

@endsection
@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("products.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection