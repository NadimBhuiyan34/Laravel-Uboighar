<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use App\Models\Event;
use App\Models\Banner;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function contactus()
    {
        $banner=Banner::where('is_active',true)->where('option','Contact us')->latest()->first();
        return view('frontend.more_page.contactus',compact('banner'));
    }
    public function faq()
    {
        $faqs=Faq::all();
        $banner=Banner::where('is_active',true)->where('option','Faq')->latest()->first();
        return view('frontend.more_page.faq',compact('faqs','banner'));
    }
    public function upcomingEvent()
    {
        $events=Event::all();
        $banner=Banner::where('is_active',true)->where('option','Events')->latest()->first();
        return view('frontend.more_page.upcomingEvent',compact('events','banner'));
    }
    public function eventDetails($id)
    {
        $event=Event::findOrFail($id);
        return view('frontend.more_page.eventDetails',compact('event'));
    }
}
