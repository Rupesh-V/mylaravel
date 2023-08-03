<?php

namespace App\Http\Controllers;
use App\Models\Login;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
Use session;
use flash;
use Illuminate\Support\Str;
use Mail;
use Carbon\Carbon;


class LoginController extends Controller
{
    public function login(Request $request){
       
        $request->validate([
            'email'   => 'required|email',
            'password'  => [
        'required',
        'min:6',
        'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
    ]

        ]);
        $user=Login::where('email','=',$request->email)->first();
        $ser=Login::where('password','=',$request->password)->first();

        if ($user){
                 
                if($ser){
                    // $request->session()->put('loginId',$user->id);
                    return redirect('/admin');
                }else{
                    return redirect('/log')->with('message','Password not matches');
                }
                   

        }else{
            return redirect('/log')->with('message','This email is not registered');
        }
        
       }
       public function getForgetPassword(){
        return view('forgotPassword.forgot');
       }
       public function postForgetPassword(Request $request){
        $request->validate([
            'email'   => 'required|email']);
            $user=Login::where('email','=',$request->email)->first();
            
            if(!$user){
                return redirect()->back()->with('message','The User not found');
   
            }
            else{
                $token=random_int(1000,9999);
                DB::table('password_resets')->insert([
                    'email'=>$request->email,
                    'token'=>$token,
                    'created_at'=>Carbon::now(),
                ]);
                // $action_link=route('reset.form',['token'=>$token,'email'=>$request->email]);
                // $body="We are request to reset the pssword for <b>Your App Name</b> account associated with ".$request->email.".Youacn rset your
                // password by cllicking the link below ";
                // Mail::send('forgetmail',['action_link'=>$action_link,'body'=>$body],function($message) use($request){
                //   $message->from('noreply@example.com');
                //   $message->to($request->email,'your name')
                //           ->subject('Reset Password');
                // });
                return redirect('/reset/{token}')->with('message','We have emailed your password reset link!');
            }

       }
       public function showResetForm(Request $request,$token=null){
        return view('forgotPassword.reset')->with(['token'=>$token,'email'=>$request->email]);
       }
       public function resetPassword(Request $request){
        $request->validate([
            'email'   => 'required|email|exists:logins,email',
            'password'  => [
        'required',
        'min:6',
        'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
        
            ],
    'password_confirmation'=>'required',

        ]);
        $check_token=\DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();
        if(!$check_token){
            Login::where('email',$request->email)->update([
                'password'=>\Hash::make($request->password)

            ]);
            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();
            return redirect('/log')->with('message','Your password updated successfully')
                                   ->with('message',$request->email);
        }else{
            
            return back()->withInput()->with('message','Invalid token');
        }

       }
       
   
   

}
