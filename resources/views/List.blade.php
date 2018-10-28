<!DOCTYPE html>
<html>
<head>
    {{csrf_field()}} //
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
</head>
<body>

<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <table class="table table-hover">
     <tr>
         <td>Id</td>
         <td>name</td>
         <td>email</td>
         <td>gender</td>
         <td>Action</td>
     </tr>
     <?php foreach($nhanvien as $nhanvien):  ?>
        <tr>
            <td> <?php echo $nhanvien['id']; ?> </td>
            <td> <?php echo $nhanvien['name']; ?></td>
            <td> <?php echo $nhanvien['email']; ?></td>
            <td> <?php echo $nhanvien['gender']; ?> </td>
            <td>
                <a href='user/<?php echo $nhanvien['id'];?>/edit'> Edit</a>
                <a href='user/<?php echo $nhanvien['id'];?>/delete'> Delete</a>
            </td>
        </tr>
      <?php endforeach; ?>
    </table>
</div>
<a href="{{route('nhanvien.add')}}"><button type="button" class="btn btn-default">Add</button></a>
</body>
</html>
