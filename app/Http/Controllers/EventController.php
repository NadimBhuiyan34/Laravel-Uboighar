<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{


    public function create(){
        
        return view('backend.events.create');
    }

    public function store(EventRequest $request,Event $event){

    if($file=$request->file('image')){
        $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/events'),$filename);
    }

    Event::create([
        'title'=>$request->title,
        'image'=>$filename??'',
        'cheif_guest'=>$request->cheif_guest,
        'details'=>$request->details,
        'venue'=>$request->venue,
        'date'=>$request->date,
        'time'=>$request->time,
        
    ]
   );
   return redirect()->route('events.index')->withMessage('Successfully submitted');
}





public function index()
{

    $events = Event::latest()->paginate(4);
    return view('backend.events.index',compact('events'));
}

    public function edit(Event $event)
{   
     // $event=Event::findOrFail($event);
      return view('backend.events.edit',compact('event'));
}

    public function update(EventRequest $request,Event $event)
{ //dd($EventRequest);
    
    if($file=$request->file('image')){
        $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/events'),$filename);
    }
     
      $event->update([
        'title'=>$request->title,
        'image'=>$filename??'',
        'cheif_guest'=>$request->cheif_guest,
        'details'=>$request->details,
        'venue'=>$request->venue,
        'date'=>$request->date,
        'time'=>$request->time,

       ]
       );
       return redirect()->route('events.index')->withMessage('Successfully updated');

}

public function destroy(Event $event)
{
    $event->delete();
    return redirect()->route('events.index')->withMessage('Successfully Deleted');

}
public function trash()
{
    $events= Event::onlyTrashed()->paginate(2);
    return view('backend.events.trash', compact('events'));

}

public function restore( $id)
{
    try {
        $event= Event::onlyTrashed()->whereId($id)->firstOrFail();
        $event->restore();
        return redirect()->back()->withMessage('Successfully Restored!');
        
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());
        
    }
}
public function delete($id)
{
      
    try {

        $event = Event::onlyTrashed()->whereId($id)->firstOrFail();
        $event->forceDelete();
        return redirect()->route('events.index')->withMessage('Successfully Deleted!');
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());
   
        

    }

}



   

    
}
