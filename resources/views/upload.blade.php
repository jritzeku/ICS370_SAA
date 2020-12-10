<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>

<body>

<h1>Upload File</h1>

    <form method="POST" action="{{route("uploadfile")}}">
        @csrf
        <label for="file">Choose File</label>
        <input type="file" name="file">
        <button type ="submit" name="submit"> Upload</button>

    </form>

</body>
</html>