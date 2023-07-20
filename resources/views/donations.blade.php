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

              <div class="mx-auto" style="max-width: 800px;">
                <div class="card mb-3 m-3">
                  <img class="card-img-top" src="https://i.ibb.co/KzGWt7Y/header-palilab.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">PaliLab Application (แอพบาลี)</h5>
                    <p class="card-text">แอปพลิเคชันที่ทำให้ภาษาบาลีสนุก ง่าย ทันสมัย ไม่ตกยุค เน้นการสร้างความคุ้นเคยกับภาษาบาลี มีเนื้อหาสำหรับนักศึกษาภาษาบาลีประโยค 1-3  <small style="color:var(--bs-code-color)">| สถานะ:<i style="color:#1357af">กำลังพัฒนา</i> | หมวดหมู่:การศึกษา</small></p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;background-color:#1357af" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                    <p class="card-text d-flex justify-content-between"><small class="text-muted">บริจาคแล้ว 55,635 บาท</small><small style="color:#1357af">ยอด 65,350 บาท</small></p>
                    {{-- <p class="card-text text-muted">สถานะ : เตรียมจะพัฒนาต่อ , หมวดหมู่ : สมาธิ<br/>ขั้นตอนการทำงาน<br/>1. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>2. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>3. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>4. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์</p> --}}
                  </div>
                </div>
                <div class="card mb-3 m-3">
                  <img class="card-img-top" src="https://i.ibb.co/4JP5Z2r/header-jaimyapp.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">JaiMy Application (แอพใจมาย)</h5>
                    <p class="card-text">แอพสำหรับคนห่างวัด แต่ใจยังนึกถึง *รวบรวมธรรมะ ที่จำเป็นต่อชีวิตประจำวัน *อัพเดตข่าวสาร บทความเกี่ยวกับการดูแลใจ *มีนำนั่งสมาธิ ไว้เวลาต้องการความสงบ  <small style="color:var(--bs-code-color)">| สถานะ:<i style="color:#777777">เตรียมจะพัฒนาต่อ</i> | หมวดหมู่:สมาธิ</small></p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 15%;background-color:#005f5f" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <p class="card-text d-flex justify-content-between"><small class="text-muted">บริจาคแล้ว 0 บาท</small><small style="color:#005f5f">ยอด 0 บาท</small></p>
                    {{-- <p class="card-text text-muted">สถานะ : เตรียมจะพัฒนาต่อ , หมวดหมู่ : สมาธิ<br/>ขั้นตอนการทำงาน<br/>1. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>2. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>3. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>4. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์</p> --}}
                  </div>
                </div>
                <div class="card mb-3 m-3">
                  <img class="card-img-top" src="https://i.ibb.co/5Bv2zqd/header-boonna.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">บุญอีเวนต์ Application (แอพนึกถึงบุญ)</h5>
                    <p class="card-text">แอพสำหรับคนห่างวัด แต่ใจยังนึกถึง *รวบรวมธรรมะ ที่จำเป็นต่อชีวิตประจำวัน *อัพเดตข่าวสาร บทความเกี่ยวกับการดูแลใจ *มีนำนั่งสมาธิ ไว้เวลาต้องการความสงบ  <small style="color:var(--bs-code-color)">| สถานะ:<i style="color:#777777">รอทีมงาน</i> | หมวดหมู่:ศาสนา</small></p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 15%;background-color:#8f6124" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <p class="card-text d-flex justify-content-between"><small class="text-muted">บริจาคแล้ว 0 บาท</small><small class="text-muted">ยอด 0 บาท</small></p>
                    {{-- <p class="card-text text-muted">สถานะ : เตรียมจะพัฒนาต่อ , หมวดหมู่ : สมาธิ<br/>ขั้นตอนการทำงาน<br/>1. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>2. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>3. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์<br/>4. นำเงินนี้ไปว่าจ้างโปรแกรมเมอร์</p> --}}
                  </div>
                </div>
              </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
</html>
