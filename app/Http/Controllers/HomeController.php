<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['page_name'] = "home";
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['slider'] = Page::where('section_name', 'Slider')
                                ->orderBy('key')
                                ->get(['value', 'value2'])
                                ->toArray();
        $data['features_block'] = Page::where('section_name', 'Features Block')
                                ->get(['key', 'value', 'value3'])
                                ->toArray();
        $data['recent_project'] = Page::where('section_name', 'Recent Project')
                                ->get(['key', 'value', 'value2', 'value3'])
                                ->toArray();
        $data['ceo'] = Page::where('section_name', 'CEO Say')
                                ->get(['key', 'value', 'value2', 'value3'])
                                ->toArray();
        $data['no_of_project'] = Page::where('section_name', 'No of Project')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['client_list'] = Page::where('section_name', 'Client List')
                                ->orderBy('key')
                                ->get(['value', 'value2', 'value3'])
                                ->toArray();
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('welcome', compact('data'));
    }
    
    public function about(){
        $data = array();
        $data['page_name'] = "about";
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('about', compact('data'));
    }
    
    public function services(){
        $data = array();
        $data['page_name'] = "services";
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('services', compact('data'));
    }
    
    public function courses(){
        $data = array();
        $data['page_name'] = "courses";
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        return view('courses', compact('data'));
    }
    
    public function contact(){
        $data = array();
        $data['page_name'] = "contact";
        $data['topnav'] = Page::where('section_name', 'Top Nav')->pluck('value');
        $data['logo'] = Page::where('section_name', 'Logo')->pluck('value2');
        $data['address'] = Page::where('section_name', 'Contact Address')
                                ->get(['key', 'value'])
                                ->toArray();
        $data['featured_link'] = Page::where('section_name', 'Featured Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['quick_link'] = Page::where('section_name', 'Quick Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['social_media_link'] = Page::where('section_name', 'Social Media Link')
                                ->orderBy('key')
                                ->get(['value', 'value3'])
                                ->toArray();
        $data['newsletter'] = Page::where('section_name', 'Newsletter')
                                ->get(['value'])
                                ->toArray();
        $data['map'] = Page::where('section_name', 'Map link')
                                ->get(['value'])
                                ->toArray();
        return view('contact', compact('data'));
    }
}