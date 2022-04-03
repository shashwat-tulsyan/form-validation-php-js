<?php

class Database
{
	public $host ="localhost";
	public $user = "root";
	public $password ="";
	public $db ="test";
	public $con;


      function __construct()
     {
   	      $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->db);

   	      if($this->con)
           {
   	         echo"Congrates your database is connected";
           }
          else
           {
   	        echo"not connected";
           }
     }

    public function savedata(array $data)
    {
    	var_dump($data);
       
$insertquery ="INSERT INTO workshop(firstname,lastname,email,mobile,gender,hobbies,city,address,password,upload)values(
    '".$data["firstname"] ."',
    '".$data["lastname"] ."',
    '".$data["email"] ."',
    '".$data["mobile"] ."',
    '".$data["gender"] ."',
    '".$data["hobbies"] ."',
    '".$data["city"] ."',
    '".$data["address"] ."',
    '".$data["password"] ."',
    '".$data["upload"] ."'
    )";

   echo $insertquery;

        if(mysqli_query($this->con,$insertquery)){
            return true;
            echo"data inserted";
        }else{
        	echo"data not inserted";
            return false;
        }





  }

   public function getData()
    {
        $data= array();
        $sqlselect ="select * from workshop";
        $result = mysqli_query($this->con,$sqlselect);

        while($row =mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }



}



?>
