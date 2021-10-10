@extends('layouts.appLogin')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Contact Message</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Location</th>
    <th>Delete</th>
   </tr>
   @foreach($contacts as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
     <td>{{$row['subject']}}</td>
    <td>{{$row['message']}}</td>
    <td>{{$row['location']}}</td>
    <td>
     <form method="post" class="delete_form" action="{{action('ContactController@destroy', $row['id'])}}">
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



