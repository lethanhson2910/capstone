@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('home.user.create')}}" method="post">
    {{csrf_field()}}
    <label>Email </label>
    <br />
    <input type="text" name="email" placeholder="Vui lòng nhập Email">
    <br />
    <label>Name </label>
    <br />
    <input type="text" name="name" placeholder="Vui lòng nhập Tên">
    <br />
    <label>Gender</label>
    <select name="gender">
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
    </select>
    <br />
    <input type="submit">

</form>
