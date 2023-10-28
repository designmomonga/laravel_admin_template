<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/scss/style_admin.scss'])
    @php echo "\n"; @endphp
    <link href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" rel="stylesheet">
</head>
<body class="{{ $page_name }}">
 {{ $slot }}
 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('/assets/js/common.js') }}"></script>
</body>
</html>