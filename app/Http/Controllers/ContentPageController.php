<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentPage;

class ContentPageController extends Controller
{
    public function store(Request $request)
    {
        //prefix = what is contained in main div (ID) -> what makes it a unique identifier
        $properties = array_keys($request->all());
        $prefix = explode('-', $properties[0])[0];

        $entry = ContentPage::where('id', '=', $prefix)->first();
        if ($entry === null) {
            //create new entry
            $contentPage= new ContentPage();
        } else {
            $contentPage= $entry;
        }
        $contentPage->id= $prefix;
        $contentPage->assets= $request->input($prefix . '-' . 'assets');
        $contentPage->css= $request->input($prefix . '-' . 'css');
        $contentPage->styles= $request->input($prefix . '-' . 'styles');
        $contentPage->html= $request->input($prefix . '-' . 'html');
        $contentPage->components= $request->input($prefix . '-' . 'components');
        $contentPage->save();

        return redirect()->back();
    }

    public function load(Request $request)
    {
        $prefix = $request->route('id');
        $contentPage = ContentPage::whereId($prefix)->first();
        $labels = ['assets', 'css', 'styles', 'html', 'components', ];
        $json = [
            $prefix . '-assets' =>  $contentPage->getAttribute('assets'),
            $prefix . '-css' =>  $contentPage->getAttribute('css'),
            $prefix . '-styles' =>  $contentPage->getAttribute('styles'),
            $prefix . '-html' =>  $contentPage->getAttribute('html'),
            $prefix . '-components' =>  $contentPage->getAttribute('components')
        ];

        header('Content-Type: application/json');
        return json_encode($json);
    }
}
