<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vanier Robotics</title>
    <link rel="icon" href="{{ asset('img/gear.png') }}">

    <!-- Fonts -->

    <!-- Optional theme -->

    <!-- Latest compiled and minified JavaScript -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <!-- Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
@include('layouts.navbar')
<div class="container">

    @yield('header')

</div>

<main role="main" class="container">
    <h1 style="font-size: 40px">Test Men In Black</h1>
    @yield('content')

</main><!-- /.container -->

@include('layouts.footer')



</body>
</html>


