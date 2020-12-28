<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site - @yield('page_title')</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <script src="js/mobile.js" type="text/javascript"></script>
    @yield('cssCode')
</head>
<body>
<div id="page">

   @include('frontSite.layouts.menue')


   @yield('content')

   @include('frontSite.layouts.foater')
   @yield('jsCode')

</div>
</body>
</html>
