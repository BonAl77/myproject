@extends ('layout')

@section('title')Категории@endsection
@section('main_content')

<div class="container">
	<h1>{{$category->name}}</h1>
	<ol>
		@foreach($dishes as $dish)
		<li><a href="{{route('dish_id', $dish)}}">{{$dish->name}}</a></li>
		@endforeach
	</ol>

</div>

@endsection