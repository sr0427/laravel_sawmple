<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Search</h2>
    <form action="/search" method="get">
        <input type="text" name="q" value="{{ $keyword }}">
        <button>Search</button>
    </form>
    <h3>{{ $keyword }}の検索結果</h3>
    <div>
        .....
    </div>

</body>
</html>