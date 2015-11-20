@extends('layouts.master')

@section('title', 'Page Title')

@section('menu')
    @parent
	<ul><li><a href="#">home</a></li></ul>    
@endsection

@section('content')
    <p>This is my body content.</p>

		<h1>Contact</h1>{{$myname}} </br> 
		{{$id}} <br/>
		{{$phone}} <br/>
		{{--$addres--}}
		@if($addres)
			{{$addres}}
		@endif

		@if($addres=="Dhaka")
			{{$addres}}
		@elseif($addres=="sherpur")
			{{"yes sherpur"}}
		@else
			{{"not sherpur"}}
		@endif

		{{$id or "No id"}}</br>

		@for ($i = 0; $i < 10; $i++)
  		  The current value is {{ $i }}</br>
		@endfor
@endsection
 @section('footer')
  <h1>footer</h1>
  @endsection