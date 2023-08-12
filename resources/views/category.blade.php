@extends ('layout')

@section('title')Категории@endsection
@section('main_content')

<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($categories as $category)
        <div class="col-md-3">
          <div class="card shadow-sm">
            <img src="{{$category->preview}}" class="bd-placeholder-img card-img-top" width="100%" height="225">
              <p class="card-text">{{$category->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('category_id', $category)}}" class="btn btn-sm btn-outline-secondary">Перейти</a>
                  <a href="#" class="btn btn-sm btn-outline-secondary">Добавить</a>
                </div>
                
              </div>
            </div>
          </div>
        
        @endforeach
      </div>
    </div>
  </div>


@endsection