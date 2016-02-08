<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Wakili Hub</title>

  <!-- Stylesheets -->
  {!! Html::style('assets/css/style.css') !!}
  {!! Html::style('assets/css/jquery-ui.css') !!}


  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

  <!--[if IE 9]>
  {!! Html::script('assets/js/media.match.min.js') !!}
  <![endif]-->

</head>

<body>
@yield('body')

@yield('scripts')
</body>
</html>
