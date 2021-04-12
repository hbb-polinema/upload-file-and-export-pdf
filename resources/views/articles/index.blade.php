@extends('layouts.app')

@section('content')
<?php
foreach($articles as $article){
  echo '<p>'.$article->title.'</p>';
?>
  <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
<?php
}
?>
@endsection