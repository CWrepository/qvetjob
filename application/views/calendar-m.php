<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo asset_url()?>"/>
  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name=description content="ผู้นำด้านบุคลากร ที่เชี่ยวชาญสัตวแพทย์">
  <meta name="keyword" content="ผู้นำด้านบุคลากร ที่เชี่ยวชาญสัตวแพทย์">
  <meta name=author content>

  <title>ผู้นำด้านบุคลากร ที่เชี่ยวชาญสัตวแพทย์</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Icons -->
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <!-- Animate -->
  <link href="css/animate.css" rel="stylesheet">

  <!-- Bootsnav -->
  <link href="css/bootsnav.css" rel="stylesheet">

  <!-- Custom style -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bg.css" rel="stylesheet">
  <link href="css/d-text.css" rel="stylesheet">
  <link href="css/d-box.css" rel="stylesheet">
  <link href="css/dos-nav.css" rel="stylesheet">
  <link href="css/bootstrap-touch-slider.css" rel="stylesheet" media="all">
  <link href="css/dos-bt.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/particles.css">
  <link rel="stylesheet" href="css/parallax.css?v=1001" type="text/css" />
  <link rel="stylesheet" href="css/dos-socialbar.css">
  <link rel="stylesheet" href="js/fullcalendar-2.1.1/fullcalendar.css">
  <!-- include the calendar js and css files -->
  

  <!-- <link href="css/dos-checkbox.css" rel="stylesheet" media="all"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>

    <body>

     <?php include("header.php");?>
     <?php include("navigator.php");?>






     <section class="d-padding">
       <div class="container">
         <div class="row">

           <div class="col-md-3">
            <?php include("m-menu.php");?>
          </div>
          <div class="col-md-9">


            <h2 class="sp-text-black page-header" style="text-align:left; margin:20px 0 20px 0; font-size:22px;">
             ตารางการทำงาน
           </h2>


           <!-- define the calendar element -->

           <div id="bootstrapModalFullCalendar"></div>



           <div class="clearfix"></div>
         </div> 


       </div>
     </div>
   </section>

   <!-- Footer -->
   <?php include("footer.php");?>

   <div id="fullCalModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
          <h4 id="modalTitle" class="modal-title"></h4>
        </div>
        <div id="modalBody" class="modal-body">

        </div>
        <div class="modal-footer">
          <span class="red">*ตามกฏสมาชิก กรณียกเลิกฉุกเฉิน ต้องยกเลิกก่อนถึงวันทำงานจริง 5วัน </span>
          <button type="button" class="btn-submit btn btn-warning" data-dismiss="modal">ยกเลิก</button>

        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
  h1.hidden {
    visibility: hidden
  }
</style>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Bootsnavs -->
<script src="js/bootsnav.js"></script>

<script src="js/jquery.touchSwipe.min.js"></script>


<!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
<script src="js/bootstrap-touch-slider.js"></script>

<script type="text/javascript">
  $('#bootstrap-touch-slider').bsTouchSlider();
</script>

<script src="js/dos-bt.js"></script>
<script src="js/SmoothScroll.min.js"></script>

<script src="js/bootstrap-select.min.js"></script>

<!-- Js-Files --> 
<!-- //Js-Files --> 

<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#zav').localScroll(800);

  //.parallax(xPosition, speedFactor, outerHeight) options:
  //xPosition - Horizontal position of the element
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
  $('#bg_top').parallax("50%", 0.4);
  $('#bg_top01').parallax("50%", 0.4);
  $('#bg_recommended').parallax("50%", 0.4);

})
</script>

<script type="text/javascript" src="js/fullcalendar-2.1.1/lib/moment.min.js"></script>
<script type="text/javascript" src="js/fullcalendar-2.1.1/fullcalendar.js"></script>
<script type="text/javascript" src="js/fullcalendar-2.1.1/lang/th.js"></script>
<script type="text/javascript" src="script.js"></script>

<script>
  $(document).ready(function() {
    $('#bootstrapModalFullCalendar').fullCalendar({
      header: {
            left: 'prev,next today',  //  prevYear nextYea
            center: '',
            right: 'title',
          },  
          buttonIcons:{
            prev: 'left-single-arrow',
            next: 'right-single-arrow',
            prevYear: 'left-double-arrow',
            nextYear: 'right-double-arrow'         
          }, 
          eventClick:  function(event, jsEvent, view) {
            $('#modalTitle').html(event.title);
            $('#modalBody').html(event.description);
            $('#eventUrl').attr('href',event.url);
            $('#fullCalModal').modal();
            return false;
          },
          events:
          [
          {
            "title": "รพ.รัตนโกสินทร์",
            "start": "2017-12-01",
            "end": "2017-12-01",
            "description":"<p><b>ชื่อสถานที่ทำงาน</b> : รพ.รัตนโกสินทร์</p><p><b>ลักษณะงาน</b> : Full-time</p><p><b>ตำเเหน่ง</b> : สัตวแพทย์ Advance </p><p><b>สถานที่ทํางาน</b> : รพ.รัตนโกสินทร์ 89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </p><p><b>เวลา</b> : 08.00 น - 19.00 น </p><p><b>วันที่</b> : 1-12-2560 </p><p><b>ลำดับการทำงานของคุณ</b> : <span  class='red'><b>1</b><span> </p>",
            "color":"#f00"
          },
          {
            "title": "รพ.ทองหล่อ",
            "start": "2017-12-07",
            "end": "2017-12-10",
            "description":"<p><b>ชื่อสถานที่ทำงาน</b> : รพ.ทองหล่อ</p><p><b>ลักษณะงาน</b> : Full-time</p><p><b>ตำเเหน่ง</b> : สัตวแพทย์ Advance </p><p><b>สถานที่ทํางาน</b> : รพ.ทองหล่อ 89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </p><p><b>เวลา</b> : 08.00 น - 19.00 น </p><p><b>วันที่</b> : 1-12-2560 </p><p><b>ลำดับการทำงานของคุณ</b> : <span  class='red'><b>1</b><span> </p>",
            "color":"#f00"
          },
          {
            "id": "999",
            "title": "รพ.คริสตัลเพ็ท",
            "start": "2017-12-09",
            "end": "2017-12-09",
            "description":"<p><b>ชื่อสถานที่ทำงาน</b> : รพ.คริสตัลเพ็ท</p><p><b>ลักษณะงาน</b> : Full-time</p><p><b>ตำเเหน่ง</b> : สัตวแพทย์ Advance </p><p><b>สถานที่ทํางาน</b> : รพ.คริสตัลเพ็ท 89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </p><p><b>เวลา</b> : 08.00 น - 19.00 น </p><p><b>วันที่</b> : 1-12-2560 </p><p><b>ลำดับการทำงานของคุณ</b> : <span  class='red'><b>1</b><span> </p>",
            "color":"#f00"
          },
          {
            "id": "999",
            "title": "คลินิครักษาสัตว์",
            "start": "2017-12-16",
            "description":"<p><b>ชื่อสถานที่ทำงาน</b> : คลินิครักษาสัตว์</p><p><b>ลักษณะงาน</b> : Full-time</p><p><b>ตำเเหน่ง</b> : สัตวแพทย์ Advance </p><p><b>สถานที่ทํางาน</b> : คลินิครักษาสัตว์ 89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </p><p><b>เวลา</b> : 08.00 น - 19.00 น </p><p><b>วันที่</b> : 1-12-2560 </p><p><b>ลำดับการทำงานของคุณ</b> : <span  class='red'><b>1</b><span> </p>",
            "color":"#4caf50"    
          },
          {
            "title": "รพ.สัตว์ เกษตร",
            "start": "2017-12-11",
            "end": "2017-12-13",
            "description":"<p><b>ชื่อสถานที่ทำงาน</b> : รพ.สัตว์ เกษตร</p><p><b>ลักษณะงาน</b> : Full-time</p><p><b>ตำเเหน่ง</b> : สัตวแพทย์ Advance </p><p><b>สถานที่ทํางาน</b> : รพ.สัตว์ เกษตร 89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </p><p><b>เวลา</b> : 08.00 น - 19.00 น </p><p><b>วันที่</b> : 1-12-2560 </p><p><b>ลำดับการทำงานของคุณ</b> : <span  class='red'><b>1</b><span> </p>",
            "color":"#4caf50"    
          },
          {
            "title": "คลินิกผิวหนังเฉพาะ",
            "start": "2017-12-12",
            "end": "2017-12-12",
           "description":"<p><b>ชื่อสถานที่ทำงาน</b> : คลินิกผิวหนังเฉพาะ</p><p><b>ลักษณะงาน</b> : Full-time</p><p><b>ตำเเหน่ง</b> : สัตวแพทย์ Advance </p><p><b>สถานที่ทํางาน</b> : คลินิกผิวหนังเฉพาะ 89/27 หมู่บ้านศุภาลัย วิลล์ ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </p><p><b>เวลา</b> : 08.00 น - 19.00 น </p><p><b>วันที่</b> : 1-12-2560 </p><p><b>ลำดับการทำงานของคุณ</b> : <span  class='red'><b>1</b><span> </p>",
            "color":"#4caf50"
          },




          ]
        });
  });
</script>



</body>

</html>

