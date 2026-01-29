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
        <input type="file" id="imageInput" accept="image/*" name="image">
        <img id="preview" src="" alt="画像プレビュー" style="max-width: 300px; display: none;">

        <script>
            const imageInput = document.getElementById('imageInput');
            const preview = document.getElementById('preview');

            imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
        </script>
        </div>

    <button type="submit"></button>
</form>
</body>
</html>