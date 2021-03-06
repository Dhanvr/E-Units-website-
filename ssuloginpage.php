<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

  <!-- End header -->
  
  <div class="all-title-box">
    <div class="container text-center">
      <h1>SSU<span class="m_1">Student Service Unit</span></h1>
    </div>
    
  </div>
  
  <div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Student Service Unit.</h3>
                <p>Revered Father Laclaire formed the Social Service Unit on 9thSeptember, 1984. It is a voluntary group of College students joined to serve the community especially the disadvantaged section of community in and around the college. At the time of inception, the unit had fifteen members.  The SSU’s motto: “Love through Service” which expresses both the motives of our social action (Love) and the means of performing (Service). Consequently not only mutual cooperation but also a spirit of selfless sacrifice, complete generosity and compassion are the values to be inculcated in all the members. </p>
            </div><!-- end title -->

      <div class="row">
                <div class="col-md-4 col-sm-6">
        
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Vision</h3>
                
                            </span>
                            <span><p>
          To develop social awareness along with a social conscience in our society.
             To help our unfortunate and distress fellow citizens in and around the College.
              </p></span>
                        </div>                     
                    </div>
          
               
      
             </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Mission</h3>
                            </span>
                            <span>
         To inform villagers of the government policies and programs.
              To develop self-confidence and leadership quality.</li>
       To instill in the members the joy of shouldering responsibility and promote volunteerism
</span>
                       </div>
                    </div>
                </div>
      
   <div class="col-md-4 col-sm-6">
        
                    <div class="pricingTable">
                     <div class="pricingTable-header">
          <i class="fa fa-adjust fa-3x"></i>
                           <ul>
                                 <?php
    $query = "SELECT * FROM register";
$result = mysqli_query($connection, $query);
       
        $s = mysqli_query($connection, "SELECT * FROM register WHERE unitname= 'ssu'");
        $span = mysqli_num_rows($s);
        echo "<li>total studen register  <span>( $span )</span></li>";
  $sq = mysqli_query($connection, "SELECT * FROM register WHERE unitname= 'ssu' AND sex='male'");
        $span = mysqli_num_rows($sq);
        echo "<li>boys  <span>( $span )</span></li>";

  $sql = mysqli_query($connection, "SELECT * FROM register WHERE unitname= 'ssu' AND sex='female'");
        $span = mysqli_num_rows($sql);
        echo "<li>girls  <span>( $span )</span></li>";



    ?>
                                 <!-- <div class="pricingTable-sign-up"> -->  <br><br>
                              
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
   <!--================Blog Area =================-->
   
  <div class="wrap">
      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                     <?php include 'includes/posts.php'; ?>
              </div>
            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="search.php" class="search-form" method="post">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" name="search" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <!-- END sidebar-box -->  

              <div class="sidebar-box">
               
             
              </div>
              <!-- END sidebar-box -->
<?php include 'includes/category.php'; ?>
          
<?php include 'includes/tags.php'; ?>
            
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    </div>
    
   <!--================Blog Area end =================-->

<?php include 'includes/footer.php'; ?>