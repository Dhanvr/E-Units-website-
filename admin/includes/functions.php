<?php
  include "db.php";
  
  function add_category(){
  global $connection;

  if (isset($_POST['cat_add'])) {
      if (empty($_POST['cat_title'])) {
        header("Location: ../categories.php?Field_cannot_be_empty");
      }else{
        $cat_title = $_POST['cat_title'];
        $query = "INSERT INTO categories (cat_title)VALUES('$cat_title')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location: ../categories.php?category_added");
        }

      }
  }
}
add_category();

function show_category(){
  global $connection;
  $query = "SELECT * FROM categories";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete_cat={$cat_id}'>Delete</a></td>";
    echo "</tr>";
  }
}


function delete_category(){
  global $connection;
  if (isset($_GET['delete_cat'])) {
    $cat_id = $_GET['delete_cat'];
    $query = "DELETE FROM categories WHERE cat_id = $cat_id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Could not delete data " . mysqli_error($connection));
    }
    else{
      header("Location: categories.php?category_deleted");
    }
  }
}
delete_category();


function add_post(){
  global $connection;
  if (isset($_POST['publish'])) {
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_category = $_POST['category'];
    $post_category_id = $_POST['category_id'];
    $post_content = mysqli_real_escape_string($connection,$_POST['content']);
    $post_tags = $_POST['tags'];
    $post_status = $_POST['status'];

    $date = date("l d F Y");
    $post_views = 0;
    $post_comment_count = 0;

    if (isset($_FILES['post_image'])) {
      $dir = "../images/";
      $target_file = $dir.basename($_FILES['post_image']['name']);
      if (move_uploaded_file($_FILES['post_image']['tmp_name'],$target_file)) {
        echo "Image was uploaded";
      }else{
        echo "Something went wrong while uploading image";
      }
    }
    $query = "INSERT INTO posts (post_title,post_author,post_category,post_category_id,post_content,post_image,post_date,post_comment_count,post_views,post_tags,post_status) VALUES('$post_title','$post_author','$post_category','$post_category_id','$post_content','$target_file','$date','$post_comment_count','$post_views','$post_tags','$post_status')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Could not send data " . mysqli_error($connection));
      header("Location: ../posts.php?source=add_new");
    }else{
      header("Location: ../posts.php?source=");
    }
  }
}
  add_post();




function show_posts(){
  global $connection;
  $query = "SELECT * FROM posts";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_category = $row['post_category'];
    $post_category_id = $row['post_category_id'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $date = $row['post_date'];
    $post_views = $row['post_views'];
    $post_comment_count = $row['post_comment_count'];

    echo "<tr>";
    echo "<td>{$post_id}</td>";
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_author}</td>";
    echo "<td>{$post_category}</td>";
    echo "<td>{$post_status}</td>";
    echo "<td><img src='images/{$post_image}' width='50px'></td>";
    echo "<td>{$post_content}</td>";
    echo "<td>{$date}</td>";
    echo "<td>{$post_tags}</td>";
    echo "<td>{$post_comment_count}</td>";
    echo "<td>{$post_views}</td>";
    echo "<td><a href='posts.php?approve_post=$post_id'>Approve</a></td>";
    echo "<td><a href='posts.php?unapprove_post=$post_id'>Unapprove</a></td>";
    echo "<td><a href='posts.php?edit_post=$post_id'>Edit</a></td>";
    echo "<td><a href='posts.php?delete_post=$post_id'>Delete</a></td>";
    echo "</tr>";

  }
}  




 
   function add_contact(){
  global $connection;

  if (isset($_POST['contact_us'])) {
      if (empty($_POST['comment'])) {
        header("Location: ../contact.php?comment_Field_cannot_be_empty");
      }
else if(empty($_POST['name'])){
header("Location: ../contact.php?name_Field_cannot_be_empty");
}

      else{
        $body = $_POST['comment'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $year = $_POST['year'];
        $query = "INSERT INTO contect (body,name,email,phone,year) VALUES('$body','$name','$email','$phone','$year')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location:../../contact.php?contact=contact_view");
        }

      }
    
  
  }
 }

add_contact();



function show_contact_form(){
  global $connection;
  $query = "SELECT * FROM contect";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $body = $row['body'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $year = $row['year'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$body}</td>";
    echo "<td>{$name}</td>";
    echo "<td>{$email}</td>";
    echo "<td>{$phone}</td>";
    echo "<td>{$year}</td>";
    echo "<td><a href='view_contact_form.php?reply={$id}'>Reply</a></td>";
    echo "<td><a href='view_contact_form.php?delete={$id}'>Delete</a></td>";
    echo "</tr>";

  }
}


   function add_notification(){
  global $connection;

  if (isset($_POST['noti_title'])) {
      if (empty($_POST['noti_title'])) {
        header("Location: ../contact.php?noti_title_Field_cannot_be_empty");
      }
else if(empty($_POST['noti_content'])){
header("Location: ../contact.php?name_Field_cannot_be_empty");
}

      else{
        $ntitle = $_POST['noti_title'];
        $nmessage = $_POST['noti_content'];
       
        $query = "INSERT INTO notification ( noti_title, message)  VALUES('$ntitle ','$nmessage')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location:../posts.php?source=add_noti");
        }

      }
    
  
  }
 }
add_notification();



 function register(){
  global $connection;

  if (isset($_POST['register_btn'])) {

 if (empty($_POST['unitname'])) {
        header("Location: ../ssu.php?unitname_Field_cannot_be_empty");
      }
else if(empty($_POST['username'])){
header("Location: ../ssu.php?username_Field_cannot_be_empty");
}
else if(empty($_POST['cyear'])){
header("Location: ../ssu.php?cyear_Field_cannot_be_empty");
}
else if(empty($_POST['enrollno'])){
header("Location: ../ssu.php?enrollno_Field_cannot_be_empty");
}

else if(empty($_POST['course'])){
header("Location: ../ssu.php?course_Field_cannot_be_empty");
}
      else{
        $unit = $_POST['unitname'];
        $name = $_POST['username'];
        $sex = $_POST['gender'];
        $year = $_POST['cyear'];
        $enrollno = $_POST['enrollno'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];
        $pwd=$_POST['password'];
        $date = date("d F Y");
        $password=md5($pwd);
       
        $query = "INSERT INTO register (unitname,username, sex, year, enrollment, user_email, user_phone, course, reg_date, pssword) VALUES('$unit','$name',' $sex ','$year',' $enrollno ','$email','$phone',' $course ','$date','$password')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
             header("Location:../../ssu.php?Could not send data");
          // die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location:../../ssu.php?source=register_success");
        }

      }
    
  
  }
 }
register();





function show_register(){
  global $connection;
  $query = "SELECT * FROM register";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['reg_id'];
    $unitname = $row['unitname'];
    $name = $row['username'];
    $gender = $row['sex'];
    $year = $row['year'];
    $enroll = $row['enrollment'];
    $email = $row['user_email'];
    $phone = $row['user_phone'];
    $course = $row['course'];
    $date = $row['reg_date'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$unitname}</td>";
    echo "<td>{$name}</td>";
    echo "<td>{$gender}</td>";
    echo "<td>{$year}</td>";
    echo "<td>{$enroll}</td>";
    echo "<td>{$email}</td>";
    echo "<td>{$phone}</td>";
    echo "<td>{$course}</td>";
    echo "<td>{$date}</td>";

    echo "<td><a href='view_contact_form.php?reply={$id}'>Edit</a></td>";
    echo "<td><a href='view_contact_form.php?delete={$id}'>Delete</a></td>";
    echo "</tr>";

  }
}