<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Upload Files</h2>

    <form action="{{ route('unisharp.lfm.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>

    <h2>Uploaded Files</h2>
    @foreach ($uploadedFiles as $file)
        <a href="{{ $file['url'] }}" target="_blank">{{ $file['name'] }}</a><br>
    @endforeach
</body>
</html>
