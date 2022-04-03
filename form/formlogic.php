<?php 
 include("databaseconn.php");
 $db=new Database();
 $pageno = $_REQUEST['pageno'];

  switch($pageno)
  {

  	case 1:

  	 $firstname = isset($_POST['firstname']);
  	 $lastname=isset($_POST["lastname"]);
  	 $mobile=isset($_POST["mobile"]);

  	 $email=isset($_POST["email"]);
  	 $gender=isset($_POST["gender"]);
  	 $hobbies=isset($_POST["hobbies"]);
     $city=isset($_POST["city"]);
     $address=isset($_POST["address"]);
 	 $password=isset($_POST["password"]);
  	 $upload=isset($_FILES["upload"]);
     $photoName = rand().".".pathinfo($upload["name"],PATHINFO_EXTENSION);
  	 

  	 $allHobbies = '';

    /*foreach($hobbies as $hob)
    {
        $allHobbies = implode(',',$hobbies);
    }*/


                if(move_uploaded_file($upload["tmp_name"],"uploads/".$photoName)){
                    $personData = array(
                        "firstName" => $firstName,
                        "lastName" => $lastName,
                        "mobile" => $mobile,
                        "email" => $email,
                        "gender" => $gender,
                        "city" => $city,
                        "address" => $address,
                        "password" => md5($password),
                        "hobbies" => $allHobbies,
                        "photo" => "uploads/".$photoName
                    );


                if($db->saveData($personData)){

                	header('location:table.php');
                       // header('Location:table.php');
                    }else{
                    	header('location:form.php');
                        //echo"no1";
                    }
                }else{
                	header('location:form.php');
                    //echo"no2";
                }


            break;
        default:
            break;



  }


?>