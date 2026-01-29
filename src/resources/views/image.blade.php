<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/image" enctype="multipart/form-data">
        @csrf

    <div class="form-group">
            <label for="product-price">写真</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
    <button type="submit"></button>
</form>
<img src="{{asset('storage/'.'1Px8lyTzicSKNESZcW67d6qXCBzFE7Mi0SU0uxEK.jpg')}}" alt="">
</body>
</html>