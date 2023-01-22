
<?php
session_start();

class LoginController extends database {
 
   // -----------------------------------------
   public function admin()
   {
     
    if(isset($_POST['submit']))
    {
      $username=$_POST['username'];
      echo $_POST['username'];
      die();
    
      $password=htmlspecialchars(trim(sha1($_POST['password'])));
      $admin=new admin;
      $auth=$admin->check_login($username,$password);
   if(mysqli_num_rows($auth)==1) { 
       
        $_SESSION['check'] = true;
        $_SESSION['username'] = $username;
          
        header("location:".url2('gestion/index'));
      
     
     
    }else{ 
      $_SESSION['check'] == false;


    
      header("location:".url2('home/index'));
         
       }
   }
   }

   
   
  }
  ?>