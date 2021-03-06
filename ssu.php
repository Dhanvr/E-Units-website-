<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>


    <!-- Modal -->
  <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header tit-up">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">SignUp</h4>
      </div>
      <div class="modal-body customer-box">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li><a class="active" href="#Login" data-toggle="tab">Registration</a></li>
       
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="Login">
            <form  action="admin/includes/functions.php" method="post" role="form" class="form-horizontal">
    
              <div class="form-group">
                <div class="col-sm-12">
                   <input class="form-control" id="unitname" name="unitname" placeholder="Unit name" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                   <input class="form-control" placeholder="Name" name="username" type="text">
                </div>
              </div>

                <div class="form-group">
                <div class="col-sm-12">
                  <h5 class="form-control ">Sex:
                        <input type="radio" class="gender" value="Male" name="gender" checked />M
                       <input type="radio" class="gender" value="Female" name="gender"/>F</h5>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <select name="cyear" class="form-control">
            <option value="I" selected="selected">
              [choose yours]
            </option>
            <option value="I">
              Year I
            </option>
            <option value="II">
             Year II
            </option>

             <option value="III">
             Year III
            </option>
            </select>
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="enrollno" id="enrollno" placeholder="Enroll no" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                </div>
              </div>
              
             
                <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" id="phone" name="phone" placeholder="phone" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                 <input type="text" name="course" class="form-control" placeholder="course">
                </div>
              </div>

               
              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                </div>
              </div>
              
              
              <div class="row">             
                <div class="col-sm-10">
                  <button name="register_btn" class="btn btn-light btn-radius btn-brd grd1">
                    Save &amp; Continue
                  </button>
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

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
  $sq = mysqli_query($connection, "SELECT * FROM register WHERE unitname= 'ssu' AND sex ='Male'");
        $span = mysqli_num_rows($sq);
        echo "<li>boys  <span>( $span )</span></li>";

  $sql = mysqli_query($connection, "SELECT * FROM register WHERE unitname= 'ssu' AND sex ='Female'");
        $span = mysqli_num_rows($sql);
        echo "<li>girls  <span>( $span )</span></li>";

    ?>


                                 <br>
                            
 <div class="container">
  <button type="button" class="hover-btn-new log btn btn-info" href="#Registration" data-toggle="modal" data-target="#registration"><span >SignUp</span></button>
  <div id="demo" class="collapse">

        </div>
    </div>
    <br>
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
                  <?php include 'includes/sidebar.php'; ?>
             
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