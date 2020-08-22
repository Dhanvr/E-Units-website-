<?php include 'includes/header.php' ?>
<?php include 'includes/footer.php' ?>

<div class="formRig">
  <center>
  <fieldset style="float:center; width:500px; background-color:#FFD39B;">
     <legend><h2> Registration Form</h2></legend>
    <form action="Registration.php" name="myform" id="myform" method="post">
  
      <table cellspacing="3" cellpadding="6" border="0" width="80%">
    <tr width="800px">
          <td align="right">
            Year
          </td>
          <td>
            <div id='myform_category_errorloc' class="error_strings"></div>
            <select name="category">
            <option value="000" selected="selected">
              [choose yours]
            </option>
            <option value="donor">
              Year I
            </option>
            <option value="reciever">
             Year II
            </option>

             <option value="reci">
             Year III
            </option>
      </selected>
      <td>
      </tr>
        <tr>
          <td align="right" >
            Username
          </td>
          <td >
            <div id='myform_name_errorloc' class="error_strings"></div>
            <input type="text" style=" width: 300px;" name="name" width="800px"/>
          </td>
        </tr>
        
        
        <tr>
          <td align="right">
            Phone
          </td>
          <td>
            <div id='myform_phone_errorloc' class="error_strings"></div>
            <input type="text"style=" width: 300px;" name="phone" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Enrollment no
          </td>
          <td >
            <div id='myform_enroll_errorloc' class="error_strings"></div>
           <input type="text" style=" width: 300px;"  name="enroll" />
          </td>
        </tr>
         <tr>
          <td align="right">
            Password
          </td>
          <td>
            <div id='myform_password_errorloc' class="error_strings"></div>
            <input type="password" style=" width: 300px;" name="password" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Confirm Password
          </td>
          <td>
            <div id='myform_confpassword_errorloc' class="error_strings"></div>
            <input type="password" style=" width: 300px;" name="confpassword" />
          </td>
        </tr>
    <tr>
    <td align="right">Gender</td>
      <td allign="left">
         <div id='myform_gender_errorloc' class="error_strings"></div>
    <input type="radio" class="genderr" value="Male" name="gender"/>M
      <input type="radio" class="genderr" value="Female" name="gender"/>F
    </td>
    </tr>
        
        
    
          
          <td colspan="2" align="center">
            <input name="submit" type="submit" value="Submit" style="background-color:#008cba; height:30px; width:100px"/>
          </td>
        </tr>
      </table>
    </form>
  </fieldset>
  </center>
  </div>
