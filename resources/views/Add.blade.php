<form action="{{('Them')}}" method="post">
    {{csrf_field()}}
    <label>Email </label>
    <br />
    <input type="text" name="txtEmail" placeholder="Vui lòng nhập Email">
    <br />
    <label>Name </label>
    <br />
    <input type="text" name="txtName" placeholder="Vui lòng nhập Tên">
    <br />
    <label>Gender</label>
    <br />
    <input type="text" name="txtGender" placeholder="Vui lòng nhập Giới Tính">
    <br />
    <br />
    <input type="submit">

</form>
