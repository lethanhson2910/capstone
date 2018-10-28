<form action="{{('postFile')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
    <input type="file" name="upfile">
    <input type="submit">
</form>
