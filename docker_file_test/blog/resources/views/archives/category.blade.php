
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カテゴリー</title>
</head>
<body>
    <h1>{{ $category }}のページ</h1>
    @if ($category == 'news')
        <p>newsが選択されました</p>
    @endif
</body>
</html>