<?php
 require '../inc/dbcon.php';
 function getCustomerList(){
   global $conn;
   $query ="SELECT * FROM user";
   $query_run=mysqli_query($conn,$query);
   if($query_run){
       if(mysqli_num_rows($query_run)>0){
          $res=mysqli_fetch_all($query_run,MYSQLI_ASSOC);
          $data=[
            'status'=> 200,
            'message' => 'customer list fetched suceesfully',
            'data'=>$res
        ];
        header("HTTP/1.0 405 customer list fetched suceesfully");
       return json_encode($data);
       }
       else{
        $data=[
            'status'=> 405,
            'message' =>  'No customer found',
        ];
        header("HTTP/1.0 405 No customer found");
       return json_encode($data);
       }
   }
   else{
    $data=[
        'status'=> 500,
        'message' => 'internal server error',
    ];
    header("HTTP/1.0 500 internal server error");
   return json_encode($data);
   }
 }

 
?>