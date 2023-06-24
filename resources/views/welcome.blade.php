<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>เด็กพุทธ - Dek Phut Club</title>
        <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li><a href="#" class="nav-link px-2 link-secondary">หน้าแรก</a></li>
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
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://i.ibb.co/DLRmtYv/lotus-2.png" alt="" width="72" height="72">
                <h1 class="display-5 fw-bold text-body-emphasis">เด็กพุทธ</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">เด็ก คือ ผู้ที่ต้องการเติบโต พร้อมที่จะเรียนรู้อยู่เสมอ<br/>ส่วนคำว่า พุทธ ในที่นี้ คือ การตื่นรู้ การดำเนินชีวิตตามคำสอนของพระพุทธศาสนา<br/>ดังนั้น เด็กพุทธ จึงหมายถึง ผู้ที่พร้อมจะเติบโตและเรียนรู้ในวิถีของพระพุทธศาสนา<br/>เป็นตัวแทนของคนรุ่นใหม่ที่เข้ามาสู่ทางธรรม<br/>เพื่อสร้างสังคมสีขาวให้เกิดขึ้นจริง</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" onclick="window.location='{{ url('/donations') }}'" class="btn btn-lg px-4 gap-3" style="background:#F9322C;color:#ffffff">สมัครเป็นสมาชิก</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">ดูโครงการ</button>
                  </div>
                </div>
              </div>

              <div class="container">
              <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                      <h3 class="mb-0">Featured post</h3>
                      <div class="mb-1 text-body-secondary">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                      </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                      <h3 class="mb-0">Post title</h3>
                      <div class="mb-1 text-body-secondary">Nov 11</div>
                      <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                      </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                      <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
</html>
