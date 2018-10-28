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
        <form class="form-horizontal form-row-seperated" action="{{ URL::action('HomeController@update') }}" method="Post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ old('id', $getnhanvienById['id'])}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="{{ old('name', $getnhanvienById['name'])}}" name="name">
                <br />
                <br />
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" value="{{ old('email', $getnhanvienById['email'])}}" name="email">
                <br />
                <br />
                <label for="exampleInputEmail1">Gender</label>
                <input type="text" class="form-control" value="{{ old('gender', $getnhanvienById['gender'])}}" name="gender">
                <br />
                <br />
                <label for="exampleInputEmail1">Udated at</label>
                <input type="date" class="form-control" value="{{ old('updated_at', $getnhanvienById['updated_at'])}}" name="updated">
            </div>


            <button type="submit" class="btn btn-default">Gửi</button>
        </form>
    </div>
</body>

</html>