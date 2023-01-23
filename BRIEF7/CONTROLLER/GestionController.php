<?php
session_start();
class GestionController
{

  public function index()
  {
    if ($_SESSION['check'] != true) {
      header('location:' . url2('home/index'));

    } else if ($_SESSION['check'] = true) {
     
      if (isset($_POST['sumbitsearch'])) {

        
       
        $db = new product();
        $data['products'] = $db->search($_POST['search']);
        $data['min'] = $db->getMin();
        $data['max'] = $db->getMAX();
        $data['countP'] = $db->CountProducts();
        $data['moyenne'] = $db->moyen();

        View::load('gestion', $data);
      }else{
        $db = new product();
        $data['min'] = $db->getMin();
        $data['max'] = $db->getMAX();
        $data['countP'] = $db->CountProducts();
        $data['moyenne'] = $db->moyen();
        if(isset($_POST['croissant'])){
          
          $data['products'] = $db->getAllProductsASC();
          
        }else if(isset($_POST['decroissant'])){
          $data['products'] = $db->getAllProductsDesc();
        }else{
          $data['products'] = $db->getAllProducts();
        }
       
        
        View::load('gestion', $data);

      }
    }





  }
  //  -----------------------------------------------
  public function add()
  {
    if (isset($_POST['sumbitsearch'])) {

      
      $db = new product();
      $data['products'] = $db->search($_POST['search']);
      $data['min'] = $db->getMin();
      $data['max'] = $db->getMAX();
      $data['countP'] = $db->CountProducts();
      $data['moyenne'] = $db->moyen();

      View::load('add', $data);
    }else{
      $db = new product();
      $data['min'] = $db->getMin();
      $data['max'] = $db->getMAX();
      $data['countP'] = $db->CountProducts();
      $data['moyenne'] = $db->moyen();
      if(isset($_POST['croissant'])){
          
        $data['products'] = $db->getAllProductsASC();
        
      }else if(isset($_POST['decroissant'])){
        $data['products'] = $db->getAllProductsDesc();
      }else{
        $data['products'] = $db->getAllProducts();
      }

      View::load('add', $data);

    }
  }


  // -------------------------------------------------------
  public function store()
  {
    if (isset($_POST['submit'])) {

      for ($i = 0; $i < count($_POST['name']); $i++) {

        if ($_FILES["image"]["error"][$i] === 4) {
          echo "<script>alert('Image Does Not Exist');</script>";
        } else {
          $FileName = $_FILES["image"]["name"][$i];
          $tmpName = $_FILES["image"]["tmp_name"][$i];

          $validExtisin = ['jpg', 'jpeg', 'png'];
          $imageEx = explode('.', $FileName);
          $imageEx = strtolower(end($imageEx));
          if (!in_array($imageEx, $validExtisin)) {
            echo
              "<script>alert('Invalid  Image Extension');</script>";
          } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageEx;
            move_uploaded_file($tmpName, './Public/IMAGE2/' . $newImageName);

          }
        }
        $products = new product;

        $products->insertproduct($_POST['name'][$i], $_POST['price'][$i], $_POST['quantity'][$i], $newImageName);
      }


      header("Location:" . url2('gestion/add'));
    }


  }
  // ----------------------------------------------------------------------------------------------

  public function delete($id)
  {


    $delete = new product;

    $delete->deleteproduct($id);

    header("Location:" . url2('gestion/add'));


  }



  //  ----------------------------------------------------------------------------------------------------
  public function update($id)
  {
    $db = new product;
    $data['rowproduct'] = $db->getrow($id);
    View::load('update', $data);

  }

  // ----------------------------------------------------------------------------------------------------------

  public function updateproducts($id)
  {


    if (isset($_POST['submitedit'])) {
      $update = new product;
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];

      if ($_FILES["image"]["size"] > 0) {

        $tmpName = $_FILES["image"]["tmp_name"];
        $FileName = $_FILES["image"]["name"];
        $imageEx = explode('.', $FileName);
        $imageEx = strtolower(end($imageEx));
        $newImageName = uniqid();
        $newImageName .= '.' . $imageEx;
        move_uploaded_file($tmpName, './Public/IMAGE2/' . $newImageName);
        $update->edit($id,$name,$price,$quantity,$newImageName);

      } else {
        $update->editwithoutimage($id,$name,$price,$quantity);
      }

      header("Location:" . url2('gestion/add'));
    }
  
  }

  public function logout () {
    $_SESSION['check'] = false;

    header("location:".url2('home'));
   }
}


?>