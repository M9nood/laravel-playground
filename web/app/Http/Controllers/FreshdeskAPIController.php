<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Freshdesk;

class FreshdeskAPIController extends Controller
{
    //
    protected $api_key = "e0Zcnms1cJtv1DTVZnfK";
    protected $password = "manood.me0147";
    protected $domain = "thelivingmobile";
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){
        echo "freshdeskpage";
    }

    public function createContract(){
        //$contacts = Freshdesk::contacts()->all();
        $contacts = Freshdesk::contacts()->create([
            "name"=>"Eiei",
            "email"=>"eiei@freshdesk.com"
        ]);
        dd( $contacts );
    }

    public function createCompany(){
        // //$contacts = Freshdesk::contacts()->all();
        // $company = Freshdesk::companies()->create([
        //     "name"=>"Super Man",
        //     "email"=>"superman@freshdesk.com"
        // ]);
        $company = Freshdesk::companies()->view(43000430819.0);
        dd( $company );
    }



}
