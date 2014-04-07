<article class="max_95">
  <section class="bottom_col">
    <div class="white_heading">I:S Global Web</div>
    <div class="bottom_list">
      <ul>
        <li><a href="<?php echo GLOBAL_PATH;?>/about/">About I:S Global Web</a></li>
        <!--<li><a href="#">I:S Global Web News</a></li>-->
        <li><a href="<?php echo GLOBAL_PATH;?>/portfolio/">Client Portfolio</a></li>
        <li><a href="<?php echo GLOBAL_PATH;?>/career/">Career @ I:S Global Web</a></li>
        <li><a href="<?php echo GLOBAL_PATH;?>/contact/">Contact I:S Global Web</a></li>
      </ul>
    </div>
  </section>
  <section class="bottom_col">
    <div class="white_heading">Quick Links</div>
    <div class="bottom_list">
      <ul>
        <li><a href="<?php echo GLOBAL_PATH;?>/service/" onClick="_gaq.push(['_trackEvent', 'Page_Bottom', 'Web_Design_Development', 'http://www.isglobalweb.com/']);">Web Design &amp; Development</a></li>
        <li><a href="<?php echo GLOBAL_PATH;?>/service/" onClick="_gaq.push(['_trackEvent', 'Page_Bottom', 'SEO_SMO', 'http://www.isglobalweb.com/']);">SEO/SMO</a></li>
        <li><a href="<?php echo GLOBAL_PATH;?>/service/" onClick="_gaq.push(['_trackEvent', 'Page_Bottom', 'Pay_Per_Click_Management', 'http://www.isglobalweb.com/']);">Pay Per Click Management </a></li>
        <li><a href="<?php echo GLOBAL_PATH;?>/service/" onClick="_gaq.push(['_trackEvent', 'Page_Bottom', 'Conversion_Rate_Optimization', 'http://www.isglobalweb.com/']);">Conversion Rate Optimization</a></li>
      </ul>
    </div>
  </section>
  <section class="bottom_col_last">
    <div class="white_heading">Get in Touch</div>
    <div class="bottom_list">
      <p class="green">London Office</p>
      <p>51-53 Heath Street
        Hampstead<br>
        London NW3 6UG</p>
      <p class="green">Tel: +44 (0)20 7433 6670</p>
      <p class="green">Email: <a href="mailto:london@isglobalweb.com" onClick="_gaq.push(['_trackEvent', 'Page_Bottom', 'mail_to_london', 'http://www.isglobalweb.com/']);">london@isglobalweb.com</a></p>
    </div>
    <div class="bottom_list">
      <p class="green">India Office</p>
      <p>2317, Tower-A,
        The Corenthum,</p>
      <p>Sec-62, Noida - 201301</p>
      <p class="green">Tel: +91 (120) 4307858</p>
      <p class="green">Email: <a href="mailto:info@isglobalweb.com" onClick="_gaq.push(['_trackEvent', 'Page_Bottom', 'mail_to_info', 'http://www.isglobalweb.com/']);">info@isglobalweb.com</a></p>
    </div>
  </section>
  <div class="clearfix"></div>
  <div class="footer_nav">
    <ul>
      <li><span class="green">© 2014 I:S Global Web</span> </li>
    </ul>
  </div>
</article>
 <div id='fixed-bar' style="right: 0px;">
  <div id='bar-inner'>
    <a class='go-top' href='#page-wrapper' title='back to top'><img src="<?php echo GLOBAL_PATH;?>/images/back_top.jpg" width="32" height="30"></a>
  </div>
</div>
<script>
$(function () {
  $("#fixed-bar")
    .css({position:'fixed',bottom:'0px'})
    .hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $('#fixed-bar').fadeIn(200);
    } else {
      $('#fixed-bar').fadeOut(200);
    }
  });
  $('.go-top').click(function () {
    $('html,body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});
</script>