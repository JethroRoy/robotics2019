@extends ('layouts.master')

@section('content')

<?php 
	$arr = ["hi", "there", "amiga"]; 
	$files = glob('./images/gallery/*.{jpg,png,gif}', GLOB_BRACE);
	// @foreach($files as $file)
	//<img src='{{$file}}'/>
	//@endforeach
?>
	<div class="scrollable">
	 @for($i = 0; $i < 100; $i++)
	 	
	  		<img src='./images/gallery/default.png' style="width: 110px; height: 110px; border: 2px solid grey; margin: 3px;"/>
	 
	  @endfor
	</div>
@endsection

<style>
	body {
		background-image: url('./images/mib_bg.png');
		background-repeat: no-repeat;
		background-size: 100% 200%; 
	}

	.scrollable {
        float:left;
        height: 80%;
		overflow-y: scroll;		
		padding: 20px;
     }
</style>
