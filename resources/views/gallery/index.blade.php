@extends ('layouts.master')

@section('content')

<?php 
	$arr = ["hi", "there", "amiga"]; 
	$files = glob('./images/gallery/*.{jpg,png,gif}', GLOB_BRACE);
	
?>

  @foreach($files as $file)
  	<img src='{{$file}}'/>
  @endforeach
@endsection

<style>
	body {
		background-image: url('./images/mib_bg.png');
		background-repeat: no-repeat;
		background-size: 100% 200%; 
	}
</style>
