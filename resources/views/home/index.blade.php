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

<body style="height: 100%; overflow: hidden;">
@include('layouts.navbar')
<div class="container">

</div>

    <img src="{{ asset('img/vanier.jpg') }}" alt="Home img" class="background">


<main role="main" class="container">

   <!-- <img src="{{ asset('img/ufo.png') }}" alt="Ufo" style="margin-top:10%; margin-left:20%" height="50%" width="50%"> -->

</main>

@include('layouts.footer')


</body>
</html>
