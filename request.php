<?php include_once "global_path.php";?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<title>SEO Company in Noida | Online Marketing Company in Noida, India</title>
<meta name="description" content="IS Global Web is an Web Development and SEO company in Noida(India) offering wide range of services from SEO, SEM, PPC, Email Marketing, Website Design, Web Development and much more."/>
<meta name="keywords" content="Search Engine Optimization, Search Engine Marketing, SEM, SEO, internet marketing, Website marketing, Google SEO, SEO Company, Google Adwords management, pay per click , PPC , Email marketing"/>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="apple-touch-icon" href="favicon.ico"/>
<link href="<?php echo GLOBAL_PATH;?>/css/style.css" rel="stylesheet" type="text/css">
<!-- IE 6/7/8/9 Fix Script Starts Here-->
<script type="text/javascript">
      document.createElement('figure');
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
</script>
<!-- IE 6/7/8/9 Fix Script Ends Here-->
<script type="text/javascript" src="<?php echo GLOBAL_PATH;?>/js/jquery-1.10.1.js"></script>
<script src="<?php echo GLOBAL_PATH;?>/js/tinynav.min.js"></script>
<script>
$(document).ready(function() {
  // TinyNav.js 1
      $('#nav').tinyNav({
        active: 'selected',
        label: 'Menu'
      });
    });
  </script>
</head>
<body>
<!-- Page Starts Here-->
<figure class="page">
  <?php include "include/tele-info.php";?>
  <!-- Header Starts Here-->
  <header class="max_95 alpha_20">
    <?php include "include/header.php";?>
  </header>
  <!-- Header End Here-->
  <!-- Banner Starts Here-->
  <article class="about_banner">
    <div class="max_95">
      <aside class="alignleft bigfont_30">Get A Quote</aside>
      <aside class="alignright"><img src="<?php echo GLOBAL_PATH;?>/images/contact_banner.png"></aside>
    </div>
    <div class="clearfix"></div>
  </article>
  <!-- Banner end Here-->
  <article class="breadcrumbs">
    <section class="max_95">
      <ul>
        <li class="padding_left">You are here: <a href="<?php echo GLOBAL_PATH;?>">Home</a></li>
        <li class="green">Get A Quote</li>
      </ul>
      <div class="clearfix"></div>
    </section>
  </article>
  <article class="max_95 maincontent">
    <aside class="alignleft col_72 vertical_20">
    <div class="contact">
      <form onSubmit="return check_requestform(event)" name="request_quote" action="http://www.isglobalweb.com/submit-requestform.php" id="request_quote" method="post">
        <p class="green">If you would like to benefit from our services, then you can fill up the form below and send us your query. We will get back to you soon!</p>
         <fieldset style="border: #ddd 1px solid; margin:10px 0 0; background:#f4f4f4;">
        <legend><strong>Make Request</strong></legend>
        <div class="con_row">
          <div class="frm-left">
            <label>Name* :</label>
          </div>
          <input type="text" name="ZipCode" id="ZipCode" class="ZipCodeStyle">
          <div class="frm-right">
            <input type="text" name="name" id="name" placeholder="Your Name">
          </div>
        </div>
        <div class="con_row">
          <div class="frm-left">
            <label>Email* :</label>
          </div>
          <div class="frm-right">
            <input type="text" name="email" id="email" placeholder="Your Email">
          </div>
        </div>
        <div class="con_row">
          <div class="frm-left">
            <label>Website Url :</label>
          </div>
          <div class="frm-right">
            <input type="text" name="website_url" id="website_url" placeholder="Website">
          </div>
        </div>
        <div class="con_row">
          <div class="frm-left">
            <label>Message* :</label>
          </div>
          <div class="frm-right">
            <textarea name="message" id="message" rows="5" cols="" placeholder="Your Message"></textarea>
          </div>
        </div>
        <div class="con_row">
         <div class="frm-left">
          &nbsp;
          </div>
          <div class="frm-right">
          <input type="submit" value="Submit" class="greenBtn"></div>
        </div>
        </fieldset>
      </form>
      </div>
    </aside>
    <aside class="alignright vertical_20">
      <section class="cta-links">
        <ul>
          <li><a href="#">Hire Developer</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Our Clients</a></li>
        </ul>
      </section>
            <div class="vertical_20">
      <?php include "include/newsletter.php";?></div>
    </aside>
  </article>
  <div class="clearfix"></div>
  <br>
  <footer class="black_bg">
    <?php include "include/footer.php";?>
  </footer>
</figure>
</body>
</html>
