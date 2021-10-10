@extends('layouts.appLogin')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Category</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif

  <div align="right">
   <a href="{{route('category.create')}}" class="btn btn-primary">Add</a>

   <br />
   <br />
  </div>

  <table class="table table-bordered table-striped">
   <tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>Delete</th>
   </tr>
   @foreach($category as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['c_name']}}</td>
  
    <td>
     <form method="post" class="delete_form" action="{{action('CategoryController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>

@endsection



