<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<title>Laravel 5.2</title>
{!! Html::style('assets/css/bootstrap.min.css') !!}
</head>
<body>
@yield('content')

{!! HTML::script('assets/js/jquery.min.js') !!}
{!! HTML::script('assets/js/bootstrap.min.js') !!}
</body>
</html>