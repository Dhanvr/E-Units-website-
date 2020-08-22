<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact<span class="m_1">General enquiries</span></h1>
		</div>
	</div>
	
    <div id="support" class="section wb">
        <div class="container-fulid">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 justify-content-center">
                   

 <div class="comment-form justify-content text-center" >

                  <h4>Leave a Reply</h4>
                  <form action="admin/includes/functions.php" method="POST">
                     <div class="row ">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment"  cols="30" rows="3"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" type="email" placeholder="Email">
                           </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="phone"  type="phone" placeholder="contact no">
                           </div>
                        </div>
                         <div class="col-sm-6">
                           <div class="form-group">
                            <select name="year" class="form-control">
                            <option>Select the year</option>
                              <option value="1">I year</option>
                              <option value="2">II year</option>
                              <option value="3">III year</option>

                            </select>
                            
                           </div>
                        </div>
                      
                     </div>
                         <div class="form-group">
                            <input type="submit" name="contact_us" value="SUBMIT " class="btn btn-primary">

                     </div>  
                  </form>
               </div>

                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	


  
	
	<?php include 'includes/footer.php'; ?>