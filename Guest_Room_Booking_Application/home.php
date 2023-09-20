
<?php include "availability_search.php"; ?>
   <!-- Projects Row -->
        <div class="row">
            <div class="col-md-9 img-portfolio">
            <div class="page-header"><h1>Guest Room Booking</h1></div>
             
            <div class="col-md-8">
               <a href="portfolio-item.html">
                    <img class="img-rounded" src="<?php echo WEB_ROOT; ?>images/logo.jpg" alt="">
                </a>  
            </div>
                
                <div class="col-md-4">
                 <h3>Contact Info</h3>
      <div class="space"></div>
      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Nehru Street, Sathyamangalam,<br>
         Mark City, Tamil Nadu.</p>
      <div class="space"></div>
      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>Housemate@gmail.com</p>
      <div class="space"></div>
      <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+91 45687 - 55532</p>
                </div>
            </div>
          
            <div class="col-md-3 img-portfolio"> 
           <div class="page-header"><h2>Type Of Rooms</h2></div>
              <div class="roomdesc">
                       <ul  class="a"> 
                      <?php
                          $query = "SELECT distinct(ROOM) FROM `tblroom` ";
                         $mydb->setQuery($query);
                         $cur = $mydb->loadResultList();  
                            ?>
                            
                      <?php  foreach ($cur as $result) { ?>
                       <li><h4><a  href="<?php echo WEB_ROOT; ?>index.php?p=rooms&q=<?php echo $result->ROOM; ?>" ><p ><?php echo $result->ROOM; ?></p></a></h4></li> 
                      <?php  } ?>
                                
                   
                    </ul>
              </div>
       
          </div>

 
 
          </div>  
         <!-- Projects Row -->
        <div class="row">
            <div class="col-md-12 ">
             <div class="page-header"><h1></h1></div> 
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                     <div class="item active">
                     <img  class="img-responsive" width="100%"  src="<?php echo WEB_ROOT; ?>images/header-bg1.jpg">
                              <figcaption class="img-title-active">
                                <h5>Warm Welcome</h5> 
                                       
                            </figcaption>
                        </div>
            
                        <!-- <div class="item ">
                            <img  class="img-responsive" width="100%"  src="<?php echo WEB_ROOT; ?>images/header-bg1.jpg">
                              <figcaption class="img-title-active">
                                <h5>Family Room</h5> 
                                <h1> &#8377 1500 per day</h1>       
                            </figcaption> 
                        </div>
                         <div class="item">
                             <img  class="img-responsive" width="100%"  src="<?php echo WEB_ROOT; ?>images/header-bg1.jpg">
                               <figcaption class="img-title-active">
                                <h5>Paying Guest</h5>
                                <h1> &#8377 300 per day</h1>        
                            </figcaption>
                            <div class="item">
                             <img  class="img-responsive" width="100%"  src="<?php echo WEB_ROOT; ?>images/header-bg1.jpg">
                               <figcaption class="img-title-active">
                                <h5>Standard Rooms</h5>
                                <h1> &#8377 400 per day</h1>        
                            </figcaption>
                            <div class="item">
                             <img  class="img-responsive" width="100%"  src="<?php echo WEB_ROOT; ?>images/header-bg1.jpg">
                               <figcaption class="img-title-active">
                                <h5>Business Room</h5>
                                <h1> &#8377 2000 per day</h1>        
                            </figcaption>

                        </div>
                    </div> 

                     Controls 
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span> -->
                </div>
            </div> 
        </div>