<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>รับงานอาสาสมัคร - เด็กพุทธ</title>
          <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li><a href="{{ url('/') }}" class="nav-link px-2 link-secondary">หน้าแรก</a></li>
                <li><a href="{{ url('/donations') }}" class="nav-link px-2 link-secondary">บริจาค</a></li>
                <li><a href="{{ url('/projects') }}" class="nav-link px-2 link-secondary">งานอาสา</a></li>
                <li><a href="{{ url('/register') }}" class="nav-link px-2 link-secondary">สมัครสมาชิก</a></li>
            </ul>
          </header>
          <style>
            body {
  font-family: 'Athiti', sans-serif;
  background: #ffffff;
  color: #34495e;
}
          </style>
        <body>
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                  <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                  </div>
                  <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">ใช้พลังและความสามารถ<br>เปลี่ยน Mindset สังคม</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div> --}}
                  </div>
                </div>
              </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
</html>
