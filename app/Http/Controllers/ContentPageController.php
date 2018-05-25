<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentPage;

class ContentPageController extends Controller
{
    public function addContent($contentPage, $prefix, $request)
    {
        $contentPage->id= $prefix;
        $contentPage->assets= $request->input('gjs-assets');
        $contentPage->css= $request->input('gjs-css');
        $contentPage->styles= $request->input('gjs-styles');
        $contentPage->html= $request->input('gjs-html');
        $contentPage->components= $request->input('gjs-components');

        $contentPage->save();
    }

    public function store(Request $request)
    {
        //prefix = what is contained in main div (ID) -> what makes it a unique identifier
        $prefix = $request->route('id');

        $entry = ContentPage::where('id', '=', $prefix)->first();
        if ($entry === null) {
            //create new entry
            $contentPage= new ContentPage();
        } else {
            $contentPage= $entry;
        }
        Self::addContent($contentPage, $prefix, $request);
        return redirect()->back();
    }

    public function load(Request $request)
    {
        $prefix = $request->route('id');
        $contentPage = ContentPage::whereId($prefix)->first();
        if ($contentPage === null) {
            $contentPage = new ContentPage();
            Self::addContent($contentPage, $prefix, $request);
        }
        $labels = ['assets', 'css', 'styles', 'html', 'components', ];
        $json = [
            'gjs-assets' =>  $contentPage->getAttribute('assets'),
            'gjs-css' =>  $contentPage->getAttribute('css'),
            'gjs-styles' =>  $contentPage->getAttribute('styles'),
            'gjs-html' =>  $contentPage->getAttribute('html'),
            'gjs-components' =>  $contentPage->getAttribute('components')
        ];

        header('Content-Type: application/json');
        return json_encode($json);
    }
}
