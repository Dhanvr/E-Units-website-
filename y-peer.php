<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

	<div class="all-title-box">
		<div class="container text-center">
			<h1>Y_VIA<span class="m_1">Youth Volunteer in Action.</span></h1>
		</div>
	</div>
	<!-- container -->
	
        <div class="container">
            <div class="section-title text-center">
                <h3>Youth Volunteer in Action.</h3>
                <p>The Y-VIA, Young Volunteers in Action is an active network of young
volunteers organized by Bhutan Youth Development Fund (YDF). Under the
leadership of Her Majesty Ashi Tshering Pem Wangchuck as President to
YDF, the main aim of establishing such body is to encourage and enhance
greater youth participation in youth development programs and activities in
the country. It was also envisaged that such a group would also create
awareness and build the value of volunteerism into the minds of our young
citizens. The initiative also hopes to build leadership including analytical,
management and teamwork skills in members.</p>
            </div><!-- end title -->

			<div class="row">
                <div class="col-md-4 col-sm-6">
				
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Vision</h3>
                            </span>
                            <span>
                              <p>  A better today, a brighter tomorrow for the youth of Bhutan. <br><br> <br>
							                 </p>
            </span>
                        </div>                     
                    </div>
               
			
             </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <span class="heading">
                                <h3>Mission</h3>
                            </span>
                            <span>Through active participation and volunteerism in the community, Y-VIA
will encourage young people to play an active role and contribute positively
to the Society.
</span>
                       </div>
                    </div>
                </div>
			
	 <div class="col-md-4 col-sm-6">
				
                    <div class="pricingTable">
                        <div class="pricingTable-header">
					
				<br>
				
					
                           <ul>
                                <li>total student</li>
                                <li>50 boys plus</li>
                                <li>50 girls plus</li>
                                	<br>
                            
	<form>
    <div class="col-12">
               <div class="form-group ">
            <button class="btn btn-primary" name="signup" id="signup">Sign up</button>
         </div>
         <br>
      </div>
  </form>

					</div>
               
			
             </div>		
			 </div>
			 </div>
	
			</div>

	<!-- end container -->
	
  
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
    
   <!--================Blog Area end =================-->
						
<?php include 'includes/footer.php'; ?>