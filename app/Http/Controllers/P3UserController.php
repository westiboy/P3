<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;

//Random user package
use Faker\Factory as Factory;
use Faker\Provider\Person as Person;

class P3UserController extends Controller
{

    public function getUser()
    {
        //return 'Show User';
        return view('P3User.P3User');
    }

    public function postUser(Request $request)
    {
        //return 'Display User';
        
        //Validate that the number of paragraphs is set, and is a number            
        $this->validate($request, [
            'usernum' => 'required|numeric|min:0|max:100',
            ]);
        
        //Set the user count to the var "users"
        $usernum = $_POST['usernum'];

        //instantiate a faker generator
        $faker = Factory::create();
        
        $users = array();

        for ($i=0; $i < $usernum; $i++) {
            $users[$i]['name'] = $faker->name;
            $users[$i]['address'] = $faker->address;
            $users[$i]['phoneNumber'] = $faker->phoneNumber;
            $users[$i]['email'] = $faker->email;
            $users[$i]['username'] = $faker->username;
            $users[$i]['url'] = $faker->url;
        }
        
        //dd($users);
        return view('P3User.P3UserDisplay')->with('users', $users);

    }

}