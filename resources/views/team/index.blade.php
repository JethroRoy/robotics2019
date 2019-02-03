<!doctype html>
<html lang="en" style="height:100%">
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

    <link rel="stylesheet" href="{{ asset('css/team_styles.css') }}"/>
    <!-- Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body style="height: 100%; overflow: hidden; background-color: #1b1e21">
@include('layouts.navbar')

<div class="fill" >

    <div class="blue-ring neon-blue">
        <?php 
            $files = glob('img/teams/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        ?>
        @foreach($files as $file) 
            <div class="image member">
                <img class="member-image" src="{{ asset($file) }}" alt="member">
               
            </div>
        @endforeach


      
    </div>
</div><!-- /.container -->
<div class="panel" >
    <img id="panel-image" src="{{ asset('img/teams/test.png') }}"/>
</div>

@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function()
    {
        $('.image').click(function(){
            var path = $(this).attr('src');
            $('#panel-image').attr('src', path);

            /*var modal = $('.viewer');
            modal.show();

            $('.close').click(function(){
                modal.hide();
            });*/
        });
    });
</script>


</body>
</html>
