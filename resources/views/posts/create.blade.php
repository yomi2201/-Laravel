
<form method="post" action="create" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="image" value=''>
    <input type="submit">
</form>
<a href="/" class="btn btn-primary">一覧に戻る</a>