<?php
$movies_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/fahxoxo/SCS211/main/json/data2.json"),true);
$movies = $movies_obj["people"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>มูลนิธิศูนย์เกิดใหม่ (หญิง) REBIRTH CENTER FOUNDETION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    </head>

<body>

<style>
  @import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');

  $bg: #fff;
  $text: #7288a2;
  $gray: #4d5974;
  $lightgray: #e5e5e5;
  $blue: #03b5d2;

  * {
    box-sizing: border-box;

    &::before,
    &::after {
      box-sizing: border-box;
    }
  }



  .accordion {
    .accordion-item {
      border-bottom: 1px solid $lightgray;

      button[aria-expanded='true'] {
        border-bottom: 1px solid $blue;
      }
    }

    button {
      position: relative;
      display: block;
      text-align: left;
      width: 100%;
      padding: 1em 0;
      color: $text;
      font-size: 1.15rem;
      font-weight: 400;
      border: none;
      background: none;
      outline: none;

      &:hover,
      &:focus {
        cursor: pointer;
        color: $blue;

        &::after {
          cursor: pointer;
          color: $blue;
          border: 1px solid $blue;
        }
      }

      .accordion-title {
        padding: 1em 1.5em 1em 0;
      }

      .icon {
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 0;
        width: 22px;
        height: 22px;
        border: 1px solid;
        border-radius: 22px;

        &::before {
          display: block;
          position: absolute;
          content: '';
          top: 9px;
          left: 5px;
          width: 10px;
          height: 2px;
          background: currentColor;
        }

        &::after {
          display: block;
          position: absolute;
          content: '';
          top: 5px;
          left: 9px;
          width: 2px;
          height: 10px;
          background: currentColor;
        }
      }
    }

    button[aria-expanded='true'] {
      color: $blue;

      .icon {
        &::after {
          width: 0;
        }
      }

      +.accordion-content {
        opacity: 1;
        max-height: 9em;
        transition: all 200ms linear;
        will-change: opacity, max-height;
      }
    }

    .accordion-content {
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      transition: opacity 200ms linear, max-height 200ms linear;
      will-change: opacity, max-height;

      p {
        font-size: 1rem;
        font-weight: 300;
        margin: 2em 0;
      }
    }
  }
</style>

<?php include("nav.php"); ?>

<div class="container">

  <div class="custom_heading-container center">
    <h2>
      คำถามที่พบบ่อย
    </h2>
  </div>
  <div class="layout_padding2">
    <div class="img-box center">
    <?php foreach($movies as $row){ ?>
    <div><img height="200px" src="<?=$row["image"]?>"></div>
<?php } ?>
    </div>
    <br /><br /><br />
  </div>

  <h2 class="ps-5">คำถามที่พบบ่อย</h2>
  <div class="accordion p-5">
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">แนวคิดในการบำบัดยาเสพติด ทำอย่างไรผู้ป่วยจึงสามารถเลิกยาเสพติดได้</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: เพราะเราเชื่อว่า ทุกคนมีคุณค่าและความสามารถในตนเอง อยากใช้ชีวิตอย่างมีความหมายและมีความสุข แต่ในบางครั้งอาจประสบกับปัญหาบางอย่างในชีวิต ทำให้เริ่มใช้ยาเสพติดเพื่อแก้ปัญหา จนนำไปสู่การเสพติด แต่หากผู้ที่ประสบปัญหามีความหวังและกำลังใจ ตั้งใจอย่างแน่วแน่ และมีแนวทางสู่การเลิกเสพอย่างถูกต้องย่อมสามารถทำได้สำเร็จ</p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">ระยะเวลาการบำบัดยาเสพติดนานเท่าไหร่</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: คอร์สบำบัดของเราใช้ระยะเวลา 1 ปี 6 เดือน แต่หากผู้รับการบำบัดยาเสพติดยังมีความเสี่ยงที่จะกลับไปเสพซ้ำ หรืออาการยังไม่คงที่ ก็สามารถที่จะอยู่ในโปรแกรมต่อได้อีก เพื่อให้ร่างกายและสมองปลอดสารเสพติดและกลับสู่สภาวะปกติ</p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">ทำไมถึงต้องใช้เวลานานขนาดนั้น</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: สำหรับระยะเวลาในการบำบัดนั้น ผู้เข้ารับการอบรมมีความจำเป็นต้องมีเวลาในการปรับตัว สร้างและปรับเปลี่ยนนิสัย ตลอดจนพฤติกรรมต่างๆ ที่มาจากผลกระทบจากการใช้ยาเสพติด ซึ่งผู้เข้ารับการอบรมยังมีความจำเป็นที่ต้องสร้างความคุ้นเคยจากสิ่งที่ได้เรียนรู้จากทางศูนย์ฯ ที่ต้องมีความสุขเป็น และทุกข์ให้เป็น โดยปราศจากการใช้สิ่งเสพติดเข้ามาเกี่ยวข้องกับความสุข ความทุกข์ของชีวิต

          จากนั้นทางผู้เข้ารับการอบรมยังมีความจำเป็นในการทดลองใช้ชีวิตที่ปราศจากยาเสพติดในการสร้างความสัมพันธ์กับครอบครัว และสังคมรอบข้าง เพื่อให้เกิดความเชื่อมั่น และสามารถออกไปใช้ชีวิตโดยปราศจากยาเสพติดที่ยังยืนได้</p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">หากญาติอยากพาผู้เสพยาเสพติดมาบำบัดยาเสพติด แต่ผู้เสพไม่ร่วมมือจะต้องทำอย่างไร?</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: เราแนะนำว่าต้องดูก่อนว่าผู้เสพมีอาการทางจิตหรือไม่ เช่น ก้าวร้าวรุนแรง หูแว่ว หวาดระแวง ถ้ามีอาการเล่านี้ให้โทรมาาปรึกษากับทางศูนย์ก่อน แต่หากไม่มีอาการเหล่านั้นตัวญาติเองอาจต้องหนักแน่น แล้วเกลี่ยกล่อม ใช้เหตุผลชี้ให้เห็นถึงความจำเป็นในการมาบำบัดยาเสพติดรักษาเพื่อตัวผู้เสพเอง
          แต่หากท่านไม่สามารถโน้มน้าวผู้เสพได้สำเร็จท่านสามารถโทรศัพท์ติดต่อเราได้ ทางเราจะแนะนำวิธีพาผู้เสพมาบำบัดยาเสพติดที่สถานฟื้นฟู
        </p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">ข้อมูลของผู้เข้ารับการบำบัดจะถูกเปิดเผยรึเปล่า</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: ข้อมูลของผู้รับการบำบัดยาเสพติดจะถูกเก็บเป็นความลับ ไม่สามารถนำไปเปิดเผยได้ ในกรณีที่ต้องการปกปิด ชื่อ-นามสกุล จริง ผู้รับการบำบัดยาเสพติดสามารถใช้นามสมมุติขณะเข้ารับการบำบัดยาเสพติดได้</p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">ระหว่างบำบัดยาเสพติด อนุญาตให้ใช้โทรศัพท์หรืออินเตอร์เน็ตหรือไม่</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: ระหว่างบำบัดยาเสพติด จำเป็นต้องงดใช้โทรศัพท์และอินเตอร์เน็ต เนื่องจากเราอยากให้ผู้รับการบำบัดยาเสพติดมีสมาธิจดจ่ออยู่กับตนเอง ลดสิ่งกระตุ้นจากภายนอก เพื่อการบำบัดยาเสพติดที่ดีที่สุด หากญาติต้องการติดต่อสอบถามอาการ สามารถโทรสอบถามได้กับเจ้าหน้าที่
        </p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">การเยี่ยมผู้เข้ารับการบำบัดยาเสพติด</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: ญาติสามารถเยี่ยมได้หลังผู้เข้ารับการบำบัด ยื่นเรื่องขอสิทธิ์พบผู้ปกครอง เมื่อผ่านการพิจารณาจากทีมเจ้าหน้าแล้วก็จะสามารถเข้าเยี่ยมได้ หากญาติต้องการติดต่อสอบถามอาการ สามารถโทรสอบถามได้กับเจ้าหน้าที่</p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">หากมียาที่ต้องทานประจำ ต้องทำอย่างไร</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: หากมียาที่ต้องรับประทาน ให้นำติดตัวมาด้วย ทางศูนย์จะจัดยาประจำตัวให้ทานตามหมอสั่ง</p>
      </div>
    </div>
    <div class="accordion-item ps-5 pe-5">
      <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">หากเจ็บป่วยระหว่างที่อยู่ภายในศูนย์บำบัดยาเสพติดจะทำอย่างไร</span><span class="icon" aria-hidden="true"></span></button>
      <div class="accordion-content">
        <p>A: หากเป็นการเจ็บป่วยเล็กน้อย ทางศูนย์มีห้องปฐมพยาบาล หากเจ็บป่วยรุนแรง ทางศูนย์จะแจ้งญาติเพื่อนำส่งไปตรวจรักษาเพิ่มเติมที่โรงพยาบาล</p>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>
<script>
  const items = document.querySelectorAll(".accordion button");

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }

  items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>


</body>

</html>