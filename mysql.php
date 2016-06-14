
<?php include("layouts/header.php"); ?>
<?php include("includes/db_connection.php"); ?>
<body style="background:#999">
<div class="container" style="background: #F7F7F7;box-shadow: 0 0 6px #000;">
    <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
     <h1 class="text-center">BESS Training<h1>
     <h3>Topics Covered:</h3>
     <ul>
     <li>Moving domains from one account to another</li>
     <li>Properly moving settings from Global to Per Domain</li>
     <li>How to properly handle "Spam getting through" cases</li>
     </ul>
    <h2>We can do definitions!</h2>
    <dl>
      <dt>BAFI</dt>
      <dd>BAFI is a bayesian-like, 3-gram, scoring system used by BESS.  The primary goal is to detect text-only (no url) messages that cannot be caught by domain/IP reputation.</dd>

      <dt>We can format code</dt>
      <dd>If we need to format code <code>we can format it like this</code></dd>

      <dt>Quia</dt>
      <dd>Corporis ut, quisquam sed optio debitis eveniet ad provident soluta, aspernatur ducimus placeat illum. Similique quas odio repudiandae perferendis facilis quos, consectetur suscipit, ad velit error, enim, minus quidem!</dd>
    </dl>

    <h2>We can do better formatted definitions!</h2>
    <dl class="dl-horizontal">
      <dt>BAFI</dt>
      <dd>BAFI is a bayesian-like, 3-gram, scoring system used by BESS.  The primary goal is to detect text-only (no url) messages that cannot be caught by domain/IP reputation.</dd>

      <dt>Sed</dt>
      <dd>Doloremque quam porro ab ratione facilis, magni quo, velit impedit facere, error, rem obcaecati asperiores veniam vitae. Culpa vel dolorem fugiat odit numquam voluptates ut, quasi minima est unde? Lorem*5</dd>

      <dt>Quia</dt>
      <dd>Corporis ut, quisquam sed optio debitis eveniet ad provident soluta, aspernatur ducimus placeat illum. Similique quas odio repudiandae perferendis facilis quos, consectetur suscipit, ad velit error, enim, minus quidem!</dd>
    </dl>


    <section class="col-xs-12">

      <h2>Inline Code</h2>
      <p>To emphasize text, you can use the <code>code</code> tag.</p>

      <h2>Control Keys</h2>
      <p>To stop the execution of a process use <kbd>control-c</kbd> or <kbd>q</kbd></p>


      <h2>Short Script</h2>
<pre>
//replace IMG inside carousels with a background image
$('#featured .item img').each(function() {
  var imgSrc = $(this).attr('src');
  $(this).parent().css({'background-image': 'url('+imgSrc+')'});
  $(this).remove();
});
</pre>


      <h2>Long Script</h2>
<pre class="pre-scrollable">
//replace IMG inside carousels with a background image
$('#featured .item img').each(function() {
  var imgSrc = $(this).attr('src');
  $(this).parent().css({'background-image': 'url('+imgSrc+')'});
  $(this).remove();
});

//Use smooth scrolling when clicking on navigation
$('.navbar a[href*=#]:not([href=#])').click(function() {
  if (location.pathname.replace(/^\//,'') === 
    this.pathname.replace(/^\//,'') && 
    location.hostname === this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top-topoffset+2
      }, 500);
      return false;
    } //target.length
  } //click function
}); //smooth scrolling
</pre>
    </section>
    </div>
    </div>
    <div class="row">

     <div class="col-xs-10 col-xs-offset-1">
<iframe width=100% height=100% allowfullscreen="allowfullscreen" src="http://10.40.139.163/cudablog/images/2016-04-20%2007.34%20Spam%20Bi-Weekly%20Training.mp4">
</iframe>
     </div>
    </div>

</div>
</body>

<?php include ("layouts/footer.php"); ?>
