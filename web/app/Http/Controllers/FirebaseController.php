<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/google-services.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://foodstory-9c927.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();
        $reference = $database->getReference('test/staff_mobile');

        $value = $reference->getValue();
        dd( $value);
    }

}