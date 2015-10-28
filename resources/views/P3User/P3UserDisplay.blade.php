@extends('Layouts.master')


@section('title')
    Display Random Users
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Your Random Users</h1>

		// generate data by accessing properties
	    echo $faker->name;
	      // 'Lucy Cechtelar';
	    echo $faker->address;
	      // "426 Jordy Lodge
	      // Cartwrightshire, SC 88120-6700"
	    echo $faker->text;
	    

	    @foreach($faker as $text)

	    {{ $text }} <br>

	    @endforeach

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop