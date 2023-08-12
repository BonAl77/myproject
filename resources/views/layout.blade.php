<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <!-- <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Главная страница</a></li>
          
          <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white" placeholder="Поиск..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Логин</button>
          <button type="button" class="btn btn-outline-light me-2">Зарегистрироваться</button>
           <a class="btn btn-outline-light me-2" href="/review">Отзывы</a>
        </div>
      </div>
    </div>

        
   
   </header>-->
   <nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="/" class="nav-link link-body-emphasis px-2 active" aria-current="page"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная страница</font></font></a></li>
        <!--<li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Блюда</font></font></a></li>-->
        <li class="nav-item"><a href="/category" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Категории</font></font></a></li>
        <li class="nav-item"><a href="/review" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Отзывы</font></font></a></li>
        <li class="nav-item"><a href="/about" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">О нас</font></font></a></li>
      </ul>
      @guest
      <ul class="nav">
        <li class="nav-item"><a href="/login" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Авторизоваться</font></font></a></li>
        <li class="nav-item"><a href="/register" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Зарегистрироваться</font></font></a></li>
      </ul>
      @endguest
      @auth
      <ul class="nav">
        <li class="nav-item"><a href="/logout" class="nav-link link-body-emphasis px-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выход</font></font></a></li>
       
      </ul>
      @endauth
    </div>
  </nav>
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/category" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><img src="\public\img\logo_photo.png" width="50" height="50" alt="logo photo">
        <img src="\public\img\logo .jpg" width="90" height="50" alt="logo"></font></font></span>
      </a>
    
      <form action="{{route('find')}}" class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" name="search" placeholder="Найти..." aria-label="Найти">
      </form>
      
    </div>
  </header>
<div class="container">
  @yield('main_content')
</div>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2023 <img src="\public\img\logo_photo.png" width="50" height="50" alt="logo photo"><img src="\public\img\logo .jpg" width="90" height="50" alt="logo"></font></font></span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="https://wa.me/qr/WHYTTQEIM5PVM1"><img src="\public\img\whatsApp.png" class="bi" width="24" height="24"><use xlink:href="#WhatsApp"></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/bondarenko4637/"><img src="\public\img\instagram.png" class="bi" width="24" height="24"><use xlink:href="#instagram"></use></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="https://vk.com/id330305591"><img src="\public\img\vk.png" class="bi" width="24" height="24"><use xlink:href="#vk"></use></a></li>
    </ul>
  </footer>
</div>

</body>
</html>