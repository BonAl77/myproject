@extends ('layout')
@section('title')Добавить@endsection

@section('main_content')

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Адрес электронной почты</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Ввести текст</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

@endsection