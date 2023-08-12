@extends ('layout')

@section('title')Блюда@endsection
@section('main_content')

<h1>{{$dish->name}}</h1>
<p>{{$dish->text}}</p>



@endsection