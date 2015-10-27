<?php

namespace P3\http\Controllers;

use Illuminate\Http\Request;
use P3\http\Requests;
use P3\http\Controllers\Controller;

//LoremIpsum Namespace
use Faker\Provider\Lorem as Lorem;
use Faker\Factory as Factory;

class P3loremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLorem()
    {
        //return 'Show paragraphs';
        return view('P3Lorem.P3Lorem');
    }

    public function postLorem(Request $request)
    {
        //Validate that the number of paragraphs is set, and is a number            
        $this->validate($request, [
            'paragraphs' => 'required|numeric|min:0|max:10',
            ]);

        $Lorem = Lorem::paragraphs($nb = $_POST['paragraphs'], $asText = false);
        if (isset($Lorem)) {
            foreach($Lorem as $val) {
                print $val;
            };
        } else {
            echo 'not working';
        } 

    }

}
