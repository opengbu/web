  
<div id="wrap">
<div class="container">
    <div class="breadcrumb">
       <?php echo set_breadcrumb(); ?>
    </div>
    <div class="push"></div>      
    <div class="row">
        <div class="span3">

            <div class="card">
               <h3 class="card-heading simple">Schools </h3>
               <div class="card-body">
                <?php foreach ($nav as $k=>$v){?>
                <ul><li><a href="<?php echo $nav[$k]['link'];?>"><?php echo $nav[$k]['caption'];?></a></li></ul>
                <?php }?>
               </div>
               <div class="card-actions">
                  <button class="btn btn-block">View Details</button>
               </div>
            </div>
        </div>