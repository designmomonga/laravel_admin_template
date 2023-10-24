<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/scss/style_front.scss'])
    @php echo "\n"; @endphp
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body class="{{ $page_name }}">
 {{ $slot }}

<script src="{{ asset('/assets/js/common.js') }}"></script>
</body>
</html>