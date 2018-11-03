<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List User</h2>
  <table class="table">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
      @foreach($nhanvien as $nv)
         <tr>
           <th>{{$nv->id}}</th>
           <th>{{$nv->name}}</th>
           <th>{{$nv->email}}</th>
             <th>{{$nv->gender}}</th>
             <th>
                 <a href='{{route('home.user.edit',$nv->id)}}'> Edit</a>
                 <a href='{{route('home.user.delete',$nv->id)}}'> Delete</a>
             </th>
         </tr>
       @endforeach
  </table>
</div>
<div class="container">
<a href="{{route('home.user.create')}}"><button type="button" class="btn btn-default">Add</button></a>
</div>

</body>
</html>
