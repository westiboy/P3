@extends('layouts.master')


@section('title')
    Generate Lorem Ipsum
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Generate some Lorem Ipsum</h1>

    <form method='POST' action='/Lorem'>
    	
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>

    	Number of paragraphs: <input type='integer' name='paragraphs' value='{{old('paragraphs')}}'><br>
    	
    	@if(count($errors) > 0)
		    <ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		@endif

    	Generate <input type='submit' name='generate'>

    </form>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop