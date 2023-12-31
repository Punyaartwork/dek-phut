<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>สมัครเป็นสมาชิก - เด็กพุทธ</title>
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
            <div class="container px-4 py-5" id="icon-grid">
                <h2 class="pb-2 border-bottom">เป็นสมาชิกเด็กพุทธ</h2>
            
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 py-5">
                  <div class="col d-flex align-items-start">
                    <img src="https://i.ibb.co/hRJ9vzh/promote.png" class="bi text-body-secondary flex-shrink-0 me-3" width="28px" height="28px"  />
                    <div>
                      <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">รับข้อมูลข่าวทางตรง</h3>
                      <p>สิทธิ์ในการรับข้อมูลข่าวสารทางตรง (SMS หรือ e-mail) heading to explain the heading.</p>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <img src="https://i.ibb.co/hRJ9vzh/promote.png" class="bi text-body-secondary flex-shrink-0 me-3" width="28px" height="28px"  />
                    <div>
                      <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">เข้าร่วมกิจกรรมต่าง ๆ</h3>
                      <p>สิทธิ์เข้าร่วมกิจกรรมต่างๆ ที่ระบุเฉพาะสมาชิก heading to explain the heading.</p>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <img src="https://i.ibb.co/hRJ9vzh/promote.png" class="bi text-body-secondary flex-shrink-0 me-3" width="28px" height="28px"  />
                    <div>
                      <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">เสนอโปรเจค</h3>
                      <p>สิทธิ์ในการเสนอความคิดเห็น นโยบายและโปรเจค ing to explain the heading.</p>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <img src="https://i.ibb.co/hRJ9vzh/promote.png" class="bi text-body-secondary flex-shrink-0 me-3" width="28px" height="28px"  />
                    <div>
                      <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">ร่วมประชุมได้</h3>
                      <p>สิทธิ์ในการเข้าร่วมประชุมสามัญและวิสามัญ heading to explain the heading.</p>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <img src="https://i.ibb.co/hRJ9vzh/promote.png" class="bi text-body-secondary flex-shrink-0 me-3" width="28px" height="28px"  />
                    <div>
                      <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">ลงคะแนนเสียง</h3>
                      <p>สิทธิ์ในการออกเสียงลงคะแนนเลือกตั้งกรรมการบริหาร รวมถึงการถอดถอน the heading.</p>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <img src="https://i.ibb.co/hRJ9vzh/promote.png" class="bi text-body-secondary flex-shrink-0 me-3" width="28px" height="28px"  />
                    <div>
                      <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                      <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                  </div>
                </div>
              </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
</html>
