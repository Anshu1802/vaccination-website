<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelpage;
use App\Models\Modelpagefeedback;
use Crypt;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Mail;

class controllerpage extends Controller
{
    public function ansh()
    {
        return view('welcome');
    }
    public function register()
    {
        return view('registerpage');
    }

    public function contact()                                        //
    {
        return view('contactpage');
    }

    public function about()
    {

      

        return view('feedbackform');

    }
    public function feedbackf(Request $shlok)
    {

        $shlok->validate([


           'fmail'=>'required',
           'message'=>'required'

        ]);

        $registerpage=new Modelpagefeedback;
        $registerpage->message=$shlok['message'];
        $registerpage->fmail=$shlok['fmail'];
        $registerpage->save();

        $dataa = [
            'fmail'=>$shlok['fmail'],
            'message'=>$shlok['message']

            
    
            
        ];






        




          return view ('/welcome');

    }











    public function submit(Request $ansh)
    {


         $ansh->validate([
            
            'username' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'address'=>'required',
            'aadhar'=>'required',
            'vacinated_dose'=>'required',
            'Dose'=>'required',
            'symptom'=>'required'      
          ]);
    







        $registerpage=new Modelpage;
        $registerpage->username=$ansh['username'];
        $registerpage->email=$ansh['email'];
        $registerpage->phone=$ansh['phone'];
        $registerpage->address=Hash::make($ansh['address']);
        $registerpage->aadhar=Hash::make($ansh['aadhar']);
        $registerpage->vacinated_dose=$ansh['vacinated_dose'];
        $registerpage->Dose=$ansh['Dose'];
        $registerpage->symptom=$ansh['symptom'];
        $registerpage->message=$ansh['message'];
        $registerpage->message=$ansh['femail'];
        $registerpage->save();


        $data = [
            'username' => $ansh['username'],
            'email' => $ansh['email'],
            'phone'=>$ansh['phone'],
            'address' => $ansh['address'],
            'Dose' => $ansh['Dose'],

            
    
            
        ];


       
        $userHeading= "Thank you for your Gem time hope you will always connect with us ";
        $user['to'] = $ansh['email'];                    //variable $USER
       Mail::send('thankyoumessage' , $data, function($message) use ($user, $userHeading) {
       $message->to($user['to']);
       $message->subject($userHeading);
        });

        $internalHeading = "New Servey is done now! " ;
        Mail::send('companymail' , $data, function($message) use ( $internalHeading) {
        $message->to('anshkevadiyaextraemail@gmail.com');
         $message->subject($internalHeading);
          });



        return view('/feedbackform');

    }
}

