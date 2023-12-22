


@php

 

    $ref = $_GET['ref'];
    $id = $_GET['id'];
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
    $result = json_decode($response);
     
     if($result->data->status== 'success'){
      
     
     $money = App\Http\Controllers\DonateController::payment_details($result->data->amount, $result->data->reference, $result->data->customer->email, $result->data->status,  $id);
        //dd( $result->data->reference, $result->data->amount, $result->data->customer->email );
       // echo "Hello  i am stuck "; 
      // echo '<script> window.location.href = "http://127.0.0.1:8000/orphan" </script>'; 
     // return view('layouts.orphanage_list');

      echo "Hello  i am stuck "; 
     
    
     }
  }

@endphp



