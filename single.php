<?php include 'includes/header.php'; ?>

    <div class="wrap">

<?php include 'includes/navigation.php'; ?>
      <!-- END header -->

   
    <section class="site-section py-lg">

      <div class="container">
        <hr>
<h2 class="text-info">
  Activities that are done by the  <b>UNITS</b> of the <b>Sherubtse College</b>
</h2>
<hr>
        <div class="row blog-entries element-animate">
<?php
  if(isset($_GET['post'])){
    $p_id = $_GET['post'];

    $query = "SELECT * FROM posts WHERE post_id = $p_id";
    $result = mysqli_query($connection,$query);
  }else{
    header("Location: index.php");
  }

?>
    <?php

      while($row = mysqli_fetch_assoc($result)){

          $post_id = $row['post_id'];
          $post_title = $row['post_title'];
          $post_author = $row['post_author'];
          $post_category = $row['post_category'];
          $post_category_id = $row['post_category_id'];
          $post_content = $row['post_content'];
          $post_tags = explode(',',$row['post_tags']);
          $post_status = $row['post_status'];
          $post_image = $row['post_image'];
          $date = $row['post_date'];
          $post_views = $row['post_views'];
          $post_comment_count = $row['post_comment_count'];
          ?>
          <div class="col-md-12 col-lg-8 main-content">
            <img src="admin/images/<?php echo $post_image; ?>" alt="Image" class="img-responsive mb-5" width="100%">
             <div class="post-meta">
                        <span class="author mr-2"><?php echo $post_author; ?> </span>&bullet;
                        <span class="mr-2"><?php echo $date; ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment_count; ?></span>
                      </div>
            <h1 class="mb-4"><?php echo $post_title; ?></h1>
            <a class="category mb-5" href="category.php?cat_id=<?php echo $post_category_id; ?>"><?php echo $post_category; ?></a>

            <div class="post-content-body">
              <p><?php echo $post_content; ?></p>
            </div>
            <div class="pt-5">
              <p>Categories:  <a href="#"><?php echo $post_category; ?></a>  Tags: <a href="#" ><?php foreach($post_tags as $tag) {
                echo "<a href=''class='btn btn-primary' style='margin:2px;'>#$tag</a>";
              }
              ?></a></p>
            </div>






   <?php }




    ?>



              <h3 class="mb-5">
                <?php
                  (isset($_GET['post'])) ? $post_id = $_GET['post'] : $post_id = 0; //status='Approved' AND
                  $query = mysqli_query($connection, "SELECT * FROM comments WHERE  post_id=$post_id");
                  $num_comments = mysqli_num_rows($query);
                  echo $num_comments . " comment(s)";
                 ?>
               </h3>
              <ul class="comment-list">
                <li class="comment">
                 
                  <div class="comment-body">
                     <?php
                         if(isset($_GET['post'])) {
                            $id = $_GET['post'];
                        $comment_obj->getApprovedComments($id);
                      }
                        ?>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              <?php
                if(isset($_GET['post'])) {
                  $id = $_GET['post'];
                  if(isset($_POST['comment'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $body = $_POST['body'];
                    $comment_obj->addComments($id, $name, $email, $body);
                  }
                }
              ?>
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="single.php?post=<?php echo $post_id; ?>" method="POST" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" name="comment" class="btn btn-primary">
                  </div>

                </form>

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
      </section>

</div>
</div>


    </div>

    <!-- loader -->
   
<?php include 'includes/footer.php'; ?>