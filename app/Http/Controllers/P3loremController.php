<?php

namespace P3\http\Controllers;

use Illuminate\Http\Request;
use P3\http\Requests;
use P3\http\Controllers\Controller;

//LoremIpsum Namespace
use Badcow\LoremIpsum;
use Badcow\LoremIpsum\Generator;

class P3loremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getindex()
    {
        //return 'Show paragraphs';
        return view('P3Lorem.P3Lorem');
    }

    public function postindex(Request $request)
    {
        $this->validate($request, [
            'paragraphs' => 'required|numeric',
            ]);
        
        //* use code from the Lorum Ipsum Generator
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(5);
            echo implode('<p>', $paragraphs);
        //*/
        dd($request->all());
        //return 'Generate paragraphs';
    }

}
