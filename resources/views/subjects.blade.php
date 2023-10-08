<?php 
$json = File::get('sample.json');
$stories = json_decode($json);
// $data['name']; // John Doe
// echo $data->name;
?>

 <?php //echo $id_subject ?><br />

<?php// } ?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>ระบบกรอกประโยค สำหรับ พัฒนาแอปพลิเคชัน PaliLab</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <style>
   .error{ color:red; } 
   #main {
            border: 0px solid black;
            display: flex;
            flex-wrap: wrap;
        }
         
        #main div {
             margin-right:10px;
             margin-bottom: 10px;
             padding: 7px 0px 7px 0px;
             color: #ffffff;

        }
        h1 {
            color:#009900;
            font-size:42px;
            margin-left:50px;
        }
        h3 {
            color:#ce0000;
        } 
        h5 {
          margin-top:20px;
        }
        
  </style>
</head>
 
<body>
 
<div class="container">
    <h2 style="margin-top: 10px;">ระบบกรอกประโยค สำหรับ พัฒนาแอปพลิเคชัน PaliLab</h2>
    <p>พร้อมสำหรับเอาประโยคคำแปลภาษาไทยมาใส่ ตามที่ประโยคบาลี โดยมีขั้นตอนคือ Copy ประโยคมาวางให้ครบ แล้วก็กดปุ่มดาวน์โหลดข้างล่างสุด หนึ่งครั้ง เพื่อโหลด JSON ลงเครื่อง</p>
    <br>
    <br>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif
   
    <form id="laravel_json" method="post" action="{{url('json-file-download')}}">
      {{-- <form id="laravel_json" method="post" action="/laravel-json"> --}}

      @csrf
      <?php

foreach ($stories as $story){
  $storyid         = $story->id;
  $storyName         = $story->storyName;
  $chapterName         = $story->chapterName;
  $chapterInt         = $story->chapterInt;
  $chapterHost         = $story->chapterHost;
  $blogs        = $story->chapters;
  echo "<h3>หน้าที่ {$storyid} - เรื่อง {$storyName}</h3>";
  echo "<input type='hidden' name='idChapter[]' value='$storyid'>";
  echo "<input type='hidden' name='storyName[]' value='$storyName'>";
  echo "<input type='hidden' name='chapterName[]' value='$chapterName'>";
  echo "<input type='hidden' name='chapterInt[]' value='$chapterInt'>";
  echo "<input type='hidden' name='chapterHost[]' value='$chapterHost'>";

foreach ($blogs as $blog) {
        $id         = $blog->id;
        $subjects      = $blog->subjects;
        $thaiSubject         = $blog->thaiSubject;


        echo "<h5>ประโยคที่ {$id}</h5>";
        echo '<div id="main">';
        echo "<input type='hidden' name='array{$storyid}[]' value='$id'>";
        $subject = "";
        foreach ($subjects as $value){  
            //Go through every value in the row
            $idsubject = $value->word;
            $isMeanings = $value->isMeaning;
            $meanings = $value->meaning;
            $types = $value->type;
            $matters = $value->matter;
            $details = $value->detail;
            $subject =  $subject.' '.$idsubject;

            // $idsubject = $value->word;
            echo "<div style='background-color:#144b14;'><input type='text' name='word{$id}[]' style='width: ".(strlen($idsubject)*5.5)."px;color: #fff;background: #144b14;border: 0px;text-align: center;'   value='$idsubject'></div>";
            echo "<tr><td></td></tr>";
            echo "<tr><td><input type='hidden' name='isMeaning{$id}[]' value='".json_encode($isMeanings)."'></td></tr>";
            echo "<tr><td><input type='hidden' name='meaning{$id}[]' value='$meanings'></td></tr>";
            echo "<tr><td><input type='hidden' name='type{$id}[]' value='$types'></td></tr>";
            echo "<tr><td><input type='hidden' name='matter{$id}[]' value='$matters'></td></tr>";
            echo "<tr><td><input type='hidden' name='detail{$id}[]' value='$details'></td></tr>";
        }
        echo '</div>';
        echo '<p>'.$subject.'</p>';
        echo "<input type='text' class='form-control' name='arraythai{$storyid}[]' value='$thaiSubject'>";


        // $content    = $blog->content;
//         foreach ($subjects as $subject) {
//           // echo $subject->id
//           $id_subject         = $subject->id;
//           # code...
   }     
// ?>
<br /><br /><br />
<?php }  ?> 
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" value="{{$json}}" id="formGroupExampleInput" placeholder="Please enter name">
      </div>
      <input type="hidden" name="datajson" id="datajson">


      <div class="form-group">
       <button type="button" class="btn btn-success" onclick="Geeks()">DOWNLOAD</button>
       {{-- <button type="submit" class="btn btn-success" >Submitto</button> --}}
      </div>
      <p>กดดาวน์โหลดได้แค่ครั้งเดียวเท่านั้น</p>
    </form>
 
</div>
<p id="par"></p>

<script type="text/javascript">
var input = document.querySelector('input'); // get the input element
input.addEventListener('input', resizeInput); // bind the "resizeInput" callback on "input" event
resizeInput.call(input); // immediately call the function

function resizeInput() {
  this.style.width = this.value.length + "ch";
}
  var k = "[";
  function Geeks() {
    var chapterId = document.getElementsByName('idChapter[]');
    var storyName = document.getElementsByName('storyName[]');
    var chapterName = document.getElementsByName('chapterName[]');
    var chapterInt = document.getElementsByName('chapterInt[]');
    var chapterHost = document.getElementsByName('chapterHost[]');
    for (var x = 0; x < chapterId.length; x++) {

      var b = chapterId[x];
      k = k + '{"id":' + b.value + 
      ', "storyName":"'+ storyName[x].value + 
      '", "chapterName":"'+ chapterName[x].value + 
      '", "chapterInt":'+ chapterInt[x].value + 
      ', "chapterHost":"'+ chapterHost[x].value.replace(/[\r\n]/gm, ' ') + '" ,"chapters":[';

      var input = document.getElementsByName('array'+b.value+'[]');
      var thaiSubjectInput = document.getElementsByName('arraythai'+b.value+'[]');
      console.log('1'); 
      // เหลือทำตัวเงื่อนไข -  ###ทำไม่ได้คิดบัคบางอย่าง
      // เหลือจับใส่ ใน Chapter เหลือบางค่าเท่านั้น ChapterName
      for (var i = 0; i < input.length; i++) {
          console.log('1_1');  
          var a = input[i];
          k = k + '{"id":' + a.value + ',"subjects":[';
          var wordinput = document.getElementsByName('word'+a.value+'[]');
          var isMeaninginput = document.getElementsByName('isMeaning'+a.value+'[]');
          var meaninginput = document.getElementsByName('meaning'+a.value+'[]');
          var typeinput = document.getElementsByName('type'+a.value+'[]');
          var matterinput = document.getElementsByName('matter'+a.value+'[]');
          var detailinput = document.getElementsByName('detail'+a.value+'[]');
          var subinput = document.getElementsByName('word'+a.value+'[]');
          for (var j = 0; j < subinput.length; j++) {
            var b = subinput[j];
            k = k + 
            '{"word":"' + wordinput[j].value +  '",'+
            '"isMeaning":' + isMeaninginput[j].value +  ','+
            '"meaning":"' + meaninginput[j].value +  '",'+
            '"type":"' + typeinput[j].value +  '",'+
            '"matter":"' + matterinput[j].value +  '",'+
            '"detail":"' + detailinput[j].value +  '"'+
            '}';
            if(j != (subinput.length-1)){
              k = k + ','
            } 
            //   k = k + "array"+ i +"[" + j + "].value= "
            //  + b.value + " ";
          } 

          k = k + '],"thaiSubject":"' +thaiSubjectInput[i].value +'"}';
          if(i != (input.length-1)){
              k = k + ','
          }
      }
      k = k + ']}';
      if(x != (chapterId.length-1)){
        k = k + ','
      }
    }
    k = k + ']'
    var myform = document.getElementById('laravel_json');
    var form = new FormData(myform);
    console.log('2'); 

    hiddenInput = document.getElementById("datajson");
    console.log('3'); 

    hiddenInput.value = k;
    console.log('4'); 

    form.set("datajson", k); 
      
      // พอไฟล์ใหญ่แล้วมันไม่ยอมโหลดให้
    myform.submit();
    document.getElementById("par").innerHTML = k;
   }
</script>
</body>
</html>