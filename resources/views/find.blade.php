@extends ('layout')

@section('title')Поиск@endsection
@section('main_content')
<div class="container">
	<h1>Результаты поиска</h1>
	<ol>
		@foreach($dishes as $dish)
		<li><a href="{{route('dish_id', $dish)}}">{{$dish->name}}</a></li>
		@endforeach
	</ol>

</div>


@endsection