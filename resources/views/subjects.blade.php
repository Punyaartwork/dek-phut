<?php 
$json = File::get('sample.json');
$blogs = json_decode($json);
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
  <title>Laravel Store Data To Json Format In Database - Tutsmake.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <style>
   .error{ color:red; } 
  </style>
</head>
 
<body>
 
<div class="container">
    <h2 style="margin-top: 10px;">ตารางแก้ไขคำศัพท์</h2>
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
foreach ($blogs as $blog) {
        $id         = $blog->id;
        $subjects      = $blog->subjects;
        echo "<input type='text' name='array[]' value='$id'>";
        foreach ($subjects as $value){  
            //Go through every value in the row
            $idsubject = $value->word;
            $isMeanings = $value->isMeaning;
            $meanings = $value->meaning;
            $types = $value->type;
            $matters = $value->matter;
            $details = $value->detail;
            // $idsubject = $value->word;
            echo "<tr><td><input type='text' name='word{$id}[]' value='$idsubject'></td></tr>";
            echo "<tr><td><input type='text' name='isMeaning{$id}[]' value='".json_encode($isMeanings)."'></td></tr>";
            echo "<tr><td><input type='text' name='meaning{$id}[]' value='$meanings'></td></tr>";
            echo "<tr><td><input type='text' name='type{$id}[]' value='$types'></td></tr>";
            echo "<tr><td><input type='text' name='matter{$id}[]' value='$matters'></td></tr>";
            echo "<tr><td><input type='text' name='detail{$id}[]' value='$details'></td></tr>";
        }
        
        // $content    = $blog->content;
//         foreach ($subjects as $subject) {
//           // echo $subject->id
//           $id_subject         = $subject->id;
//           # code...
        
// ?>
<?php echo $id ?><br />
<?php } ?> 
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" value="{{$json}}" id="formGroupExampleInput" placeholder="Please enter name">
      </div>
      <div class="form-group">
        <label for="email">Email Id</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
      </div>      
      <div class="form-group">
        <label for="mobile_number">Mobile Number</label>
        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter mobile number">
      </div>
      <input type="hidden" name="datajson" id="datajson">


      <div class="form-group">
       <button type="button" class="btn btn-success" onclick="Geeks()">Submit</button>
       <button type="submit" class="btn btn-success" >Submitto</button>
      </div>
    </form>
 
</div>
<p id="par"></p>

<script type="text/javascript">
  var k = "[";
  function Geeks() {
      var input = document.getElementsByName('array[]');
      for (var i = 0; i < input.length; i++) {
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
          k = k + '],"thaiSubject":""}';
          if(i != (input.length-1)){
              k = k + ','
          }
      }
      k = k + ']'
      var myform = document.getElementById('laravel_json');
      var form = new FormData(myform);
      hiddenInput = document.getElementById("datajson");
      hiddenInput.value = k;
      form.set("datajson", k);
      myform.submit();
      document.getElementById("par").innerHTML = k;
      document.getElementById("po").innerHTML = "Output";
  }
</script>
</body>
</html>