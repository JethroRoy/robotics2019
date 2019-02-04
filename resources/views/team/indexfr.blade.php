@extends ('layouts.master')

@section('content')
<link href="{{asset('css/team_styles.css')}}" rel="stylesheet" type="text/css"/>
<?php 
    $buildCaptains = glob('img/teams/build/captain/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $build = glob('img/teams/build/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    $kioskCaptains = glob('img/teams/kiosk/captain/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $kiosk = glob('img/teams/kiosk/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    $mentorCaptains = glob('img/teams/mentor/captain/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $mentor = glob('img/teams/mentor/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    $webCaptains = glob('img/teams/web/captain/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $web = glob('img/teams/web/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    $videoCaptains = glob('img/teams/video/captain/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $video = glob('img/teams/video/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<div class="fill pic-list" >

    <div class="but-div">
        <button id="build" class="button">Construction</button>
        <button id="kiosk" class="button">Kiosque</button>
        <button id="web" class="button">Site Web</button>
        <button id="video" class="button">Vidéo</button>
        <button id="mentor" class="button">Mentor</button>
    </div>

    <div class="team build blue-ring neon-blue">
        @foreach($buildCaptains as $file)           
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>       
        @endforeach
         @foreach($build as $file)           
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>       
        @endforeach
    </div>

    <div class="team kiosk blue-ring neon-blue" hidden> 
        @foreach($kioskCaptains as $file) 
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>            
        @endforeach      
        @foreach($kiosk as $file) 
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>            
        @endforeach  
    </div>

    <div class="team mentor blue-ring neon-blue" hidden>
        @foreach($mentorCaptains as $file)
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>
        @endforeach
        @foreach($mentor as $file)
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>
        @endforeach      
    </div>

    <div class="team web blue-ring neon-blue" hidden>
        @foreach($webCaptains as $file) 
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>            
        @endforeach
        @foreach($web as $file) 
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>            
        @endforeach
      
    </div>
    <div class="team video blue-ring neon-blue" hidden>
        @foreach($videoCaptains as $file)  
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>
        @endforeach
        @foreach($video as $file)  
            <img class="image double-border" src="{{ asset($file) }}" alt="member"/>
        @endforeach
    </div>

</div><!-- /.container -->


<div class="panel" >
    <img id="panel-image" src="{{ asset('img/teams/test.png') }}"/>

    <div id="bio">

    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function()
    {
        $('.image').click(function(){
            var path = $(this).attr('src');
            console.log(path);

            var pathArr = path.split("/");

            var path = pathArr[0].concat("//", "localhost/img/teams/", pathArr[5], "/zoomfr/",pathArr[6]);
            console.log(path);

            $('#panel-image').attr('src', path);

          /*  if ($bioFile = fopen("{{ asset('bios/Houara,\ Hummam.txt') }}", "r")) {
                while (!feof($bioFile)) {
                    $line = fgets($bioFile);
                    echo $line;
                }
                fclose($bioFile);
            }*/

        });
        $('.image').first().click();
        $('button').click(function() {
            var team = $(this).attr('id');
            var teams = $('.team');
            for(var i = 0; i < teams.length; i++){
               // teams[i].attr('hidden')
                teams[i].hidden = true;
            }
            console.log(team);
            var toShow = $('.'+team);
            console.log(toShow);
            toShow.removeAttr('hidden');
        });
    });
</script>
