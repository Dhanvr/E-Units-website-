<?php include 'includes/header.php'; ?>

    <div class="wrap">

<?php include 'includes/navigation.php'; ?>
      <!-- END header -->


      <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Search Results</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
<?php include 'includes/search_post.php'; ?>
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

              <!-- END sidebar-box -->
<?php include 'includes/sidebar.php'; ?>
              <!-- END sidebar-box -->
<?php include 'includes/category.php'; ?>

              <!-- END sidebar-box -->

<?php include 'includes/tags.php'; ?>
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>



    </div>

<?php include 'includes/footer.php'; ?>