@extends ('layout')

@section('title')Блюда@endsection
@section('main_content')

<h1>Добавить блюдо</h1>

<form action="/dishes/submit" method="post">
<div class="from-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placholder="Введите имя" id="name">
</div>
</form>

@endsection