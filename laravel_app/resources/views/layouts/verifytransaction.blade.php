
<?php 

 

    $ref = $_GET['ref'];
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_6b083e0edf4159d162ffca758fa20407bc14981f",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
    $result = json_decode($response);
      
      
  }
  if($result->data->status == 'success'){
            $status = $result->data->status;
            echo "$status ";


            $reference = $result->data->reference;
            $amount = $result->data->amount;
    

            
           
           
          $stmt =  $payment1->payment_deatils($amount, $status, $donor_id, $orphan_id);

          
    if(!$stmt){
            echo "Error Query Failed ";
    }else{
      $_SESSION["payment_successful"] = "donation succesful!";
        header("Location:orphanage_list.php");
        exit;
    }
  }else{
   
    header("Location:error.php");
  }


// $user_query  = $conn->query("select * from user_table where user_id = '$session_id'");
// $user_row = $user_query->fetch((PDO::FETCH_ASSOC));
// $userName  = $user_row['user_name'];
// $userId    = $user_row['user_id'];
?>

