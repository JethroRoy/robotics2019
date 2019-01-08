<<<<<<< HEAD
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


	<title>Gallery</title>

<style>
	body {
		/*background-image: url('https://static.gamespot.com/uploads/screen_medium/1179/11799911/3471748-screen+shot+2018-12-06+at+3.20.53+pm.png');*/
		background-repeat: no-repeat;
	}


	
</style>
</head>
<body>
	<div>
		<img src="{{asset('default.png')}}" alt="huh?"/>
		<?php

			$files = glob('../resources/images/gallery/*.{jpg,png,gif}', GLOB_BRACE);
		//$files = scandir('../resources/images/gallery');
			
			foreach($files as $file) {
			 print("<img src='default.png' />");
			}
		?>
	</div>

</body>
</html>









=======

@extends ('layouts.master')

@section('content')

    <p>gallery</p>

@endsection
>>>>>>> ed3ff1b3fe1f2a55a134eaf8fc29bfafd02b9d9d
