<? 	session_start(); ?>

<? require_once 'page/includes/htmlhead.php' ?>
<body>
  <!--header-->
 
  <? require_once 'page/includes/navbar.php' ?>

  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Contact Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Главная</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
<!-- contact-form -->
<section class="w3l-contact" id="contact">
  <div class="contact-infubd py-5">
    <div class="container py-lg-3">
      <div class="contact-grids row">
        <div class="col-lg-6 contact-left">
        <div class="partners">
            <div class="cont-details">
              <h5>Связаться</h5>
              <p class="mt-3 mb-4">Привет всем, мы доступны 24/7 по факсу, электронной почте или по телефону. Напишите нам, чтобы мы могли поговорить
об этом дальше.</p>
            </div>
            <div class="hours">
              <h6 class="mt-4">Email:</h6>
              <p> <a href="mailto:mail@traversal.com">
                mail@traversal.com</a></p>
              <h6 class="mt-4">Посетите нас:</h6>
              <p> Чебоксары</p>
              <h6 class="mt-4">Контакт:</h6>
              <p class="margin-top"><a href="#">+7-900-000-00-00</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">
              <div class="form-group">
                <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" />
              </div>
              <div class="form-group">
                <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
              </div>
              <div class="form-group">
                <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" />
              </div>
            </div>
            <div class="form-group">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="text-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>

      </div>
      <div class="map mt-5 pt-md-5">
        <h5>Map</h5>
        <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/45/cheboksary/search/%D1%87%D0%B5%D0%B1%D0%BE%D0%BA%D1%81%D0%B0%D1%80%D1%8B%20%D0%B4%D0%BE%D1%81%D1%82%D0%BE%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%87%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">чебоксары достопримечательности в Чебоксарах</a><a href="https://yandex.ru/maps/45/cheboksary/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Чебоксары</a><iframe src="https://yandex.ru/map-widget/v1/?filter=category_id%3A89683368508%2C184105894%2C53436519791%2C89667443116%2C89667445721&from=tabbar&ll=47.237867%2C56.136471&mode=search&sctx=ZAAAAAgCEAAaKAoSCUqaP6a1n0dAETUHCOboEUxAEhIJZcdGIF7X1T8Ra0QwDi4duz8iBgABAgMEBSgKOABALUgBagJydYIBRWNhdGVnb3J5X2lkOjg5NjgzMzY4NTA4LDE4NDEwNTg5NCw1MzQzNjUxOTc5MSw4OTY2NzQ0MzExNiw4OTY2NzQ0NTcyMZ0BzcxMPaABAKgBAL0BtId4PcIBjAHTipvvvwbT1u%2FZwgPQ3Jyd6wSjic3zmgOKk7PJrwWIvc2BCKDO8LjZA8iCkbDpAbGvqeeCA7TllMtL%2FPr1%2F06Djon41QK0hLTKuAOLptGOBOSn57YGmuugogWO257HBuSSvYztA4%2BIt8GzBMiJp4wFruGcjwS3%2FrbRvwP2sMytBpOY57L8Atbihsy2BuoBAPIBAPgBAIICPdGH0LXQsdC%2B0LrRgdCw0YDRiyDQtNC%2B0YHRgtC%2B0L%2FRgNC40LzQtdGH0LDRgtC10LvRjNC90L7RgdGC0LiKAtkBODk2Njc0NDMxMTYkODk2ODMzNjg1MDgkMTg0MTA1ODk0JDE4NDEwNjM1NCQxODQxMDYzNzAkNTM0MzY1MTk3OTEkMTg0MTA2MzQ0JDg5NjY3MjE1NjQyJDg5NjY3MTc1NzQ2JDUwOTAwNDc2NDM4JDg5NjY3ODUwNDc4JDUyOTg2Mzk5MzAxJDUyOTg2MDIzNzU2JDkwMDc4NzI0Mzk0JDIwNTM5OTg2Mjk3OCQxODQxMDYyOTgkMTU4NzI4NTU0MTEyJDE4NDEwNjM4MCQ4OTY2NzI1NjQxNpICAjQ1mgIMZGVza3RvcC1tYXBz&sll=47.237867%2C56.136471&source=serp_navig&sspn=0.190494%2C0.064125&text=%D1%87%D0%B5%D0%B1%D0%BE%D0%BA%D1%81%D0%B0%D1%80%D1%8B%20%D0%B4%D0%BE%D1%81%D1%82%D0%BE%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%87%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8&z=12.6" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
      </div>
    </div>
</section>
<!-- /contact-form -->

<? require_once 'page/includes/navbarf.php' ?>

</body>

</html>