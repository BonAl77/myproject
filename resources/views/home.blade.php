@extends ('layout')
@section('title')Главная страница@endsection

@section('main_content')

<link href="bootstrap\img\myCarousel.css" rel="stylesheet" type="text/css">
<div class="container-img-fluid my-carousel">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\public\img\cake1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Торты</h1>
        <p style="color:orange">Каждый из наших тортов — это уникальная история, рассказываемая вкусом.</style></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\public\img\cake2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Рецепты национальной кухни</h1>
        <p style="color:orange">Откройте для себя богатство национальных вкусов через наш ассортимент блюд.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\public\img\cake3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Печенья</h1>
        <p style="color:orange">Дайте волю своей сладкой стороне с нашим ассортиментом печенья.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
 
</div>
</div>

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Ингредиенты.<span class="text-body-secondary">Ингредиенты играют ключевую роль в приготовлении вкусных и ароматных блюд.</span></h2>
    <p class="lead">Правильный выбор и качество потребления являются важными аспектами приготовления любой еды.
Для достижения наилучших результатов рекомендуется использовать свежие и качественные продукты.</p>
  </div>
  <div class="col-md-5">
    <img src="public\img\ингредиенты.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Ингредиенты</title>
      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading fw-normal lh-1">Кухонные гаджеты. <span class="text-body-secondary">Разнообразные инструменты и устройства, используемые на кухне для облегчения и улучшения процесса приготовления пищи.</span></h2>
    <p class="lead">Гаджеты ускоряют процессы нарезки, смешивания, перемешивания и другие операции, помогают повысить эффективность, точность и безопасность приготовления блюд, а также добавляют возможности для творчества и экспериментов. Они позволяют сэкономить время и усилия при подготовке ингредиентов и приготовлении блюд, ускоряют процессы нарезки, смешивания, перемешивания и другие операции.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="public\img\гаджеты.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Полезное питание. <span class="text-body-secondary">ПП рецепты выпечки обычно используют более здоровые ингредиенты и методы приготовления, чтобы создать более питательные и менее калорийные лакомства.</span></h2>
    <p class="lead">Примеры ПП рецептов выпечки включают здоровые маффины с ягодами и орехами, цельнозерновые печенья с добавлением сухофруктов, банановый хлеб с натуральным подсластителем, овсяно-ягодные батончики и многое другое. Эти рецепты позволяют наслаждаться вкусной выпечкой, не ущербом для здоровья.</p>
  </div>
  <div class="col-md-5">
    <img src="public\img\ПП.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Placeholder</title>
      <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
   
  </div>
</div>



<!-- /END THE FEATURETTES -->

</div>










@endsection