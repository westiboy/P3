<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;

//Random user package
use Faker\Factory as Factory;
use Faker\Provider\en_US\Person as Person;

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
            'users' => 'required|numeric|min:0|max:100',
            ]);
        
        //Set the user count to the var "users"
        $users = $_POST['users'];

        //instantiate a faker generator
        $faker = Factory::create();
        
        for ($i=0; $i < $users; $i++) {
            echo $faker->name, " <br /> ", $faker->address, " <br /> ", $faker->email, "<br /><br />";
        }
        
        //return view('P3User.P3UserDisplay')->with('faker', $faker);

    }

}
