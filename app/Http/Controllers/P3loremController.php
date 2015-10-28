<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;

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
        return view('P3lorem.P3Lorem');
    }

    public function postLorem(Request $request)
    {
        //Validate that the number of paragraphs is set, and is a number            
        $this->validate($request, [
            'paragraphs' => 'required|numeric|min:0|max:10',
            ]);

        //Pass the paragraphs variable from teh form, to the Lorem package to generate text
        $Lorem = Lorem::paragraphs($nb = $_POST['paragraphs'], $asText = false);
        
        //Test the text and if set, return the data
        if (isset($Lorem)) {
            return view('P3Lorem.P3LoremDisplay')->with(['loremtext' => $Lorem]);
            //dd($Lorem);
            /*
            foreach($Lorem as $val) {
                print $val;
            };*/
        } else {
            echo 'not working';
        } 

    }

}
