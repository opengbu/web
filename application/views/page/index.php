<div class="container">
<div class="push"></div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="span3" class="bs-docs-sidebar">                         
                    <ul class="nav nav-list bs-docs-sidenav">
                    <li class="nav-header">About Us</li>
                    <?php foreach ($page as $page_item): ?>
                    <li><a class="button" href="#" id="<?php echo $page_item['id'] ?>"><?php echo $page_item['sectiontitle'] ?></a></li>
                    <?php endforeach ?>
                    </ul>
        </div>
        <div class="span9">
 
        <section id="vcmsg" class="card">
                <div class="card-body">
                <div id="mycontent">
                Here you can have varius information regarding GBU.
                </div>
               </div>         
        </section>
       </div>
                
      </div>
      

