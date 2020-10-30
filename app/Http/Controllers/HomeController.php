<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function sms(){
        return view('test');
    }

    function sendSms(Request $request){
        //$source=\App\Cooperative::where('id',$cooperative_id)->value('name');
        $client = new \GuzzleHttp\Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://api.rmlconnect.net/bulksms/bulksms',
            // You can set any number of default request options.
            'timeout' => 100.0,
        ]);
        $parms = [
            'username' => 'altum',
            'password' => 'VnpRlXSf',
            'type' => 0,
            'dlr' => 1,
            'destination' => "+25". $request->phone,
            'source' => 'Test',
            'message' => $request->sms
        ];
    
        $uri = "http://api.rmlconnect.net/bulksms/bulksms?" . http_build_query($parms);
        $res = $client->get($uri);
        $resp = $res->getBody()->getContents();
    
        $cResp = explode("|", $resp);
        return "success";
    }
    

}
