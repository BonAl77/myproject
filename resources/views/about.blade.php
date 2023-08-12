@extends ('layout')

@section('title')Страница о нас@endsection
@section('main_content')

<main>
  


  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="public\img\about-photo.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Страница о нас</h1>
        <p class="lead">Добро пожаловать на наш кулинарный портал, где страсть к еде сочетается с творчеством и знанием! Мы - команда энтузиастов, объединенных общей любовью к кулинарии и желанием делиться своим опытом, рецептами и секретами с вами.

Наша миссия заключается в том, чтобы вдохновлять вас на новые кулинарные подвиги, помогать вам развивать навыки готовки и радовать близких восхитительными блюдами. Независимо от вашего уровня подготовки - будь то начинающий повар или опытный гурман - у нас вы найдете полезные советы, пошаговые инструкции и интересные идеи. Приятного аппетита и кулинарных успехов!

С любовью и вкусом,
Команда <img src="public\img\logo .jpg" width="90" height="50" alt="logo"></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a button type="button" href="/" class="btn btn-outline-danger btn-lg px-4 me-md-2">Главная страница</button></a>
          
        </div>
      </div>
    </div>
  </div>

  
</main>
@endsection

