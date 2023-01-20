<?php

class HomeController
{
  public function index()
  {


    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = htmlspecialchars(trim(sha1($_POST['password'])));
      $admin = new admin;
      $auth = $admin->check_login($username, $password);
      if (mysqli_num_rows($auth) == 1) {

        $_SESSION['check'] = true;

        header("location:" . url2('gestion/index'));

        $test = "";

      } else {
        $_SESSION['check'] == false;



        $data['test'] = '<p class="text-danger">     
          Your username or pasword in not correct
          </p>';
        View::load('home', $data);

      }



    } else {
      $data['test'] = "";
      View::load('home', $data);

    }






  }
}




?>