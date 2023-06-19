<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>โครงการบริจาค - เด็กพุทธ</title>
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
            <div class="p-5 text-center bg-body-tertiary">
                <div class="container py-5">
                  <h1 class="text-body-emphasis">ร่วมผลักดันโปรเจคเด็กพุทธให้เกิดขึ้น</h1>
                  <p class="col-lg-8 mx-auto lead">
                    สนับสนุนเราให้ทำงานสุดกำลังและยั่งยืน above and makes its background edge-to-edge with a <code>.container</code> inside to align content. Similar to above, it's been recreated with built-in grid and utility classes.
                  </p>
                </div>
              </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
</html>
