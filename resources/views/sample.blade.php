<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    @vite(['resources/scss/style.scss'])
    @php echo "\n"; @endphp
    @vite(['resources/js/app.js'])
    @php echo "\n"; @endphp
</head>
<body>
    <h1>Sample Page.</h1>
    <div id="app"></div>
</body>
</html>