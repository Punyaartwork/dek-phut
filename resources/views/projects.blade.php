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
                    <p class="lead">ร่วมงานอาสาสร้างสรรค์โปรเจคที่มาจากเด็กพุทธให้เกิดขึ้นจริง ผ่านการใช้พลังกายกับพลังใจที่เต็มเปี่ยม และความสามารถที่มีอยู่ ทั้งนี้โปรเจคของเราส่วนใหญ่ล้วนแต่เป็นการทำเพื่อต้องการจะเปลี่ยน Mindset ของคนในสังคมให้เห็นถึงความสำคัญของการเรียนรู้พระพุทธศาสนาในยุคปัจจุบัน มาช่วยกัน! ทำให้เกิดขึ้นจริงกันเถอะ!</p>
                    {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div> --}}
                  </div>
                </div>
              </div>
              <div class="mx-auto" style="max-width: 900px;">
                
                <div class="card mb-3 m-3 text-center" style="
                border: 0px;
            ">
                  <img class="card-img" alt="100%x270" src="https://i.ibb.co/3kT5rDP/project-7.png" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;  object-fit: none; /* Do not scale the image */
                  object-position: center">
                  <div class="card-img-overlay">
                    <h3 class="card-title">กรอกศัพท์ลงแอพ PaliLab</h3>
                    <p class="card-text">ร่วมงานอาสากรอกศัพท์ธรรมบทภาค 1 - 8 ลงในแอพบาลี เพื่อผลักดันให้เทคโนโลยีด้านการศึกษาในวงการพระพุทธศาสนาเกิดขึ้น</p>
                    <a href="#" class="btn" 
                    style="--bs-btn-color: #fff;
                    --bs-btn-bg: #F9322C;
                    --bs-btn-border-color: #F9322C;
                    --bs-btn-hover-color: #fff;
                    --bs-btn-hover-bg: #dd2621;
                    --bs-btn-hover-border-color: #dd2621;
                    --bs-btn-focus-shadow-rgb: 49,132,253;
                    --bs-btn-active-color: #fff;
                    --bs-btn-active-bg: #dd2621;
                    --bs-btn-active-border-color: #dd2621;
                    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                    --bs-btn-disabled-color: #fff;
                    --bs-btn-disabled-bg: #F9322C;
                    --bs-btn-disabled-border-color: #F9322C;">รับงานอาสา</a>
                    {{-- <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">Last updated 3 mins ago</p> --}}
                  </div>
                </div>
              </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
</html>
