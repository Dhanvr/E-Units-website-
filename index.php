 <?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>
	<!-- Modal -->
	
	<!-- End header -->
	
<?php include 'includes/pagination1.php'; ?>
	
	
	<div id="domain" class="section wb">
        <div class="container">
            <div class="row text-center">			
 <div class="col-lg-12">
                    <div class="customwidget text-center">
                        <h1>Find Your Unit here</h1>
                        <p>If you are preparing to enter college and want to do all that you can to excel as a student, you may have found yourself asking an important question: “Where do I find clubs on a college campus?” Below you can obtain an answer to this question and several others that pertain to successful participation in college units.</p>
                    </div>
                </div>
                <!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
<!-- blog start -->

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
          
<!-- 
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-330a68ab-a3b8-4d3f-88c0-78bcaf88d308"></div> -->
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    
<!-- blog end -->



	

        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'includes/footer.php'; ?>
