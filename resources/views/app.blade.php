<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GreatCV</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

        <!-- <link href="/css/app.css" rel="stylesheet" type="text/css"> -->
        <link href="/css/vendor.css" rel="stylesheet" type="text/css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

        <script src="/js/vendor.js" type="text/javascript"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    </head>
    <body>
        @yield('body')

        <script src="/js/app.js" type="text/javascript"></script>
    </body>
</html>
