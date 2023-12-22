<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
    //

    public function  donation_hub(){
        return view('layouts.donation_list');
    }

    public function  profile_hub(){
        return view('layouts.profile');
    }

    public function  payment_update(){
        $trans = Transaction::get();
        return view('layouts.payment_status', [
            'trans' => $trans
        ]);
    }

    public function  editprofile_hub(){
        $fullname = auth()->user()->fullname;
      
        return view('layouts.editprofile');

    }


    public function  orphanage_hub(){
        $users = User::get()->where('type', 'Orphanage');
        return view('layouts.orphanage_list', [
            'users' => $users
        ]);
    }



      /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     * @return \Illuminate\Http\Response
     */
    public function redirectToGateway(Request $request)

    {

            //auth()->user()->email;
   

        $refnumber = $randnum = rand(1111111111,9999999999);// this one is specific to application
       // $refnumber  = 'year'.$refnumber ;

        $data = array(
            "amount" => $request->input('amount') * 100,
            "reference" => $refnumber,
            "email" => $request->input('email'),
            "currency" => "NGN",
            "orderID" => 23456, 
           
        );
    
    $redirectResponse = Paystack::getAuthorizationUrl($data)->redirectNow();    
   return $redirectResponse;
    }
 

    public function handleGatewayCallback()
    {

       // dd("i go here ");

        return view ('payment.callback');
     
       // $paymentDetails = Paystack::getPaymentData();

       // dd($paymentDetails);
      
        //Verify Transaction with Paystack
     
    }

        
    public function DonorPayment_list()
    {


        $donor_list = 
        DB::select('SELECT transaction.amount, transaction.email, users.fullname FROM transaction JOIN users ON transaction.email = users.email');


        //dd($donor_list);

        return view ('layouts.donation_list',  [
            'donor_list' => $donor_list
        ]);
       
       

        $credentials = $request->only( "email", "password" );
     
    }

    public static function payment_details($amount, $reference_number, $email, $status, $donor_id){


       $amount = $amount / 100;

       DB::insert('insert into transaction (amount, reference_number, email, status, donor_id) values (?, ?, ?, ?, ?)', [$amount, $reference_number, $email, $status, $donor_id]);
           // Redirect to the '/orphan' route after storing data
    return redirect('/orphan'); 

        
        
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function payment_hub(Request $request) {
        $userId= $request->input('id');
        $user = User::find($userId);       

        return view('layouts.donation', [
            'user' => $user
        ]);
    }
}
