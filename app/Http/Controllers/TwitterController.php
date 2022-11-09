<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Exception;
use Socialite;
use App\Models\User;
use App\Models\Analysis;

use GuzzleHttp\Client;


class TwitterController extends Controller
{
    public function loginwithTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function loginwithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }  
    public function cbTwitter()
    {
        try {
     
            $user = Socialite::driver('twitter')->user();
      
            $userWhere = User::where('twitter_id', $user->id)->first();
      
            if($userWhere){
      
                Auth::login($userWhere);
     
                return redirect('/home');
      
            }else{
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'oauth_type'=> 'twitter',
                    'password' => encrypt('admin595959')
                ]);
     
                Auth::login($gitUser);
      
                return redirect('/home');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }





    public function cbFacebook()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
    /*


  /*
    $data = array(
        'text' => $request->tweets
    );

    */


   

    public function postTweet(Request $request) {
        $tweet= str_replace ( '&nbsp;', ' ', $request->tweets );

        $input['twitter_count']=$tweet;
        $input['facebook_count']=$tweet;
        $input['user_id']=Auth::user()->id;

        $analysis=Analysis::create($input);
        $data = array(
            'text' => $tweet
        );
        $data = json_encode($data);
        



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.twitter.com/2/tweets',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Authorization: OAuth oauth_consumer_key="rlHgwbf55ZT3AytjJNs8C7d5F",oauth_token="832817271135408128-g3MpE3eqMaaOOnqhdO5L2x3wtENRS7J",oauth_signature_method="HMAC-SHA1",oauth_timestamp="1667917939",oauth_nonce="uxOPeeE2qQN",oauth_version="1.0",oauth_signature="SSwxi7oX%2FGYmZqZhRn1rWGGoLsU%3D"',
    'Content-Type: application/json',
    'Cookie: guest_id=v1%3A166782111843654364'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



$ch = curl_init();

$tweet= str_replace ( ' ', '%20', $request->tweets );
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v15.0/111656488404804/feed?message='.$tweet.'&access_token=EAAPKk4wpANcBAJDLlxlwBKonss02U9dIY4Xf7kESnPnXopZAR07A0l8jfydCNPxv10crbSM9GfgGnTN7OvxK9LRfTQ2ag7sQ45mVyZB59NPiMNeGsXftJvjOgmOLf4L2BtGJhP5xY7QW9grk6RoU20qRn4L08XZA8hTlyWbyaLq9uXua4M9B4i8svPwA6dz9c5lmSKoZC06dbjEbjHSV');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


// dd($response);
return redirect()->back()->with('message', 'IT WORKS!');


      
    }
    





}