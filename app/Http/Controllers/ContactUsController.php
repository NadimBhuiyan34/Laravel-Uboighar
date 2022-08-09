<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
      
        $contacts=contactus::all();
        return view('backend.contacts.index',compact('contacts'));
    }
    
    public function create(){
        return view('frontend.more_page.contactus');
    }
    
    public function store(ContactUsRequest $request){
             
        
       ContactUs::create([
     
        'fullname'=>$request->fullname,
        'email'=> $request->email,
        'mobile'=> $request->mobile,
        'message'=>$request->message,
        
       ]
       );
       return redirect()->route('contacts.create')->withMessage('Successfully submitted');
    }

    public function edit($contact)
    {
        $contact = ContactUs::findOrFail($contact);
        return view('backend.contacts.edit', compact('contact'));
    }

    public function update(ContactusRequest $request, $contact)
    {

        
        $contact = ContactUs::findOrFail($contact);
        $contact->update([
        'fullname'=>$request->fullname,
        'email'=> $request->email,
        'mobile'=> $request->mobile,
        'message'=>$request->message,
        ]);
        return redirect()->route('contacts.index')->withMessage('Successfully Updated');
    }

   

    public function destroy(ContactUs $contact)
    {     $contact->delete();
          return redirect()->route('contacts.index')->withMessage('Successfully Deleted');       
    }
    
}
