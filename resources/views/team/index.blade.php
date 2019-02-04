@extends ('layouts.master')

@section('content')
<link href="{{asset('css/team_styles.css')}}" rel="stylesheet" type="text/css"/>
<?php 
    $files = glob('img/teams/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<div class="fill" >

    <div class="blue-ring neon-blue">
        
        @foreach($files as $file) 
           
                <img class="image" src="{{ asset($file) }}" alt="member"/>
               
            
        @endforeach


      
    </div>
</div><!-- /.container -->
<div class="panel" >
    <img id="panel-image" src="{{ asset('img/teams/test.png') }}"/>
</div>
@endsection

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
