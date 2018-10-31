<!DOCTYPE html>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
</head>

<body>
    <div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
        <form class="form-horizontal form-row-seperated" action="{{route('home.user.edit',$nhanvien->id)}}" method="Post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="{{$nhanvien->name}}" name="name">
                <br />
                <br />
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" value="{{$nhanvien->email}}" name="email">
                <br />
                <br />
                <label for="exampleInputEmail1">Gender</label>
                <select name="gender">
                    <option value="Nam" {{ $nhanvien->gender == 'Nam' ? "selected" : ""  }} >Nam</option>
                    <option value="Nữ" {{ $nhanvien->gender == 'Nữ' ? "selected" : ""  }}>Nữ</option>
                </select>
                <br />
                <br />
                <label for="exampleInputEmail1">Udated at</label>
                <input type="date" class="form-control" value="{{$nhanvien->updated_at}}" name="updated">
            </div>


            <button type="submit" class="btn btn-default">Gửi</button>
        </form>
    </div>
</body>

</html>
