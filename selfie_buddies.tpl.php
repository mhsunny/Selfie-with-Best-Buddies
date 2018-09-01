<?php
global $user;
if ($primary_local_tasks and $user->uid != 0 ): ?>
  <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
<?php endif; ?>

<?php $layout_basepath = '/sites/all/themes/tds/layouts/page/selfie_buddies/' ?>


<!--<div id="snowflakeContainer">
    <p class="snowflake">*</p>
</div> -->
    <div class="container">
  <div class="main">
     <div class="header" style="margin: 0 auto;text-align: center;">
      <img alt="img03" src="<?php print $layout_basepath; ?>images/selfie-buddy2.png" width="100%">
     </div>
     <div style="clear:both;"><ul class="menu"><li class="first leaf active menu-mlid-1162 home">
     <a href="http://www.thedailystar.net/" class="active">Home</a></li><li class="leaf menu-mlid-1085"><a href="http://eltec.co/#section-about-us">About Elite Mobile </a></li></ul></div>
    <div class="gamma-container gamma-loading" id="gamma-container">
      <ul class="gamma-gallery">
      <?php

          $activec = ""; $inc = 1;
          $pageno = $_GET['page'];
          if(isset($pageno) && $pageno == 1){ 
            $activec = "activec ";$inc = 1;
          }elseif(isset($pageno) && $pageno == 2){ 
            $activec = "activec ";$inc = 27;
          }elseif(isset($pageno) && $pageno == 3){
              $activec = "activec ";$inc = 52;
          }elseif(isset($pageno) && $pageno == 4){
              $activec = "activec ";$inc = 78;
          }elseif(isset($pageno) && $pageno == 5){
              $activec = "activec ";$inc = 104;
          }elseif(isset($pageno) && $pageno == 6){
              $activec = "activec ";$inc = 130;
          }elseif(isset($pageno) && $pageno == 7){
              $activec = "activec ";$inc = 156;
          }elseif(isset($pageno) && $pageno == 8){
              $activec = "activec ";$inc = 182;
          }else{
            $pageno = 1;$inc = 1;
          } 

       for($i=$inc; $i<($inc+26); $i++){
        ?>
        <li>
          <div data-alt="img03" data-description="<p class='fcaption'>&nbsp;</p>" data-max-width="1800" data-max-height="1350">
            <div data-src="<?php print $layout_basepath; ?>images/test/<?php echo $i; ?>.jpg"></div>
          </div>
        </li>
       <?php
        }
      ?>
      </ul>
      <div class="gamma-overlay"></div>
      <!--<div id="loadmore" class="loadmore">Example for loading more items...</div>-->
    </div>


<style type="text/css">
  #footer-menu li{ padding: 10px 15px;}
  #footer-menu .pagination{ background: #ccc; color: #fff;     padding: 12px;}
  #footer-menu .activec{ background: #FFF !important; color: #000 !important; }
</style> 
 
<ul class="menu " id="footer-menu"  style="color:#fff; padding:10px; text-align:right;">
  <li><a class="<?php if(isset($pageno) && $pageno == 1): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=1">Page 1</a></li>
  <li><a   class="<?php if(isset($pageno) && $pageno == 2): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=2">Page 2</a></li>
  <li><a   class="<?php if(isset($pageno) && $pageno == 3): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=3">Page 3</a></li>
  <li><a   class="<?php if(isset($pageno) && $pageno == 4): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=4">Page 4</a></li>
   <li><a   class="<?php if(isset($pageno) && $pageno == 5): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=5">Page 5</a></li>
    <li><a   class="<?php if(isset($pageno) && $pageno == 6): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=6">Page 6</a></li>
     <li><a   class="<?php if(isset($pageno) && $pageno == 7): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=7">Page 7</a></li>
      <li><a   class="<?php if(isset($pageno) && $pageno == 8): echo "activec "; endif; ?> pagination" href="/selfie-best-buddies?page=8">Page 8</a></li>
</ul>


  </div><!--/main-->

  <div style="margin: 0 auto;text-align: center; clear:both;">
      <img alt="img03" src="<?php print $layout_basepath; ?>images/footer-bg.png" width="100%">
  </div>
  <div class="footer"><p>Copyright @ The Daily Star</p></div>
</div>
