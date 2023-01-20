
<?php
session_start();
class admin extends database
{
   private $conn ;
   private $selectadmin;
     
   public function __Construct()
   {
  
    $this->conn = $this->connection();

      } 
    public function check_login($username,$password) {
      
      $this->conn = $this->connection();
      $username1 = htmlspecialchars(trim(strtolower($username)));
    $password1 = htmlspecialchars(trim(strtolower(sha1($password))));

       $this->selectadmin= mysqli_query($this->conn,"SELECT * FROM `user` WHERE  username = '$username' && password = '$password' ");
       
       if($this->selectadmin){
      
        return $this->selectadmin;
       
     }
       
       

   
  }
}
?>