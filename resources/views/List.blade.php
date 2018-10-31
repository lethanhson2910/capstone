<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
</head>
<body>

<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <table class="table table-hover">
     <tr>
         <td>id</td>
         <td>name</td>
         <td>email</td>
         <td>gender</td>
         <td>Action</td>
     </tr>
     @foreach($nhanvien as $nv)
       <tr>
         <td>{{$nv->id}}</td>
         <td>{{$nv->name}}</td>
         <td>{{$nv->email}}</td>
           <td>{{$nv->gender}}</td>
           <td>
               <a href='{{route('home.user.edit',$nv->id)}}'> Edit</a>
               <a href='{{route('home.user.delete',$nv->id)}}'> Delete</a>
           </td>
       </tr>
     @endforeach

    </table>
</div>
<a href="{{route('home.user.create')}}"><button type="button" class="btn btn-default">Add</button></a>
</body>
</html>
