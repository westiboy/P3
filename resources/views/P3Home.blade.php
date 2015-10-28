@extends('Layouts.master')


@section('title')
    Lorem Ipsum Users and Text generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Lorem Ipsum Users and Text generator</h1>

    <p>Copywriters and graphic designers user random text when designing, in order to focus on the design rather than the text.<br>
    The most common of these types of text is referred to as Lorem Ipsum, as it's essentially random words in Latin.<br>
    The first of the links below will generate some paragraphs of Lorem Ipsum text.<br>
    The second will generate a series of random users.<br>
    <br>
    You can also use the links in the upper right corner of this page to navigate between this homepage, and the generators<br>
    </p>

    <a href="/Lorem" id="Lorem">Generate some Lorem Ipsum</a><br>
    <a href="/User" id="Lorem">Generate random users</a><br>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop