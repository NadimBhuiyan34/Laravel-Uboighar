<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use Illuminate\Support\Facades\Validator;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;




class TagController extends Controller
{
 
    public function index(){
        
        $tags = Tag::latest()->paginate(4);
        return view('backend.tags.index', compact('tags'));
    }
    public function create()
    {
        return view('backend.tags.create');
    }



public function store(TagRequest $request, Tag $tag){
    //dd($request->request);
    try {
        $tag->create([
            'title' => $request->title,
    
        ]);
        return redirect()->route('tags.index')->withMessage('Successfully Created');
    } catch (QueryException $e) {
        return redirect()->back()->withInput()->withErrors($e->getMessage());
    }
}

  



     public function edit(Tag $tag)
     {
         return view('backend.tags.edit', compact('tag'));
     }
    
     public function update(TagRequest $request, Tag $tag)
    {
        try {
            $tag->update([
                'title' => $request->title,
              
                
                 ]);

            return redirect()->route('tags.index')->withMessage('Successfully Updated');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }





public function destroy(Tag $tag)
{
      
      $tag->delete();
      return redirect()->route('tags.index')->withMessage('Successfully Deleted');


}
public function trash()
{
    $tags=Tag::onlyTrashed()->paginate(2);
    return view('backend.tags.trash', compact('tags'));

}

public function restore( $id)
{
    try {
        $tag=Tag::onlyTrashed()->whereId($id)->firstOrFail();
        $tag->restore();
        return redirect()->back()->withMessage('Successfully Restored!');
        
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());
        
    }
}
public function delete($id)
{
      
    try {

        $tag = Tag::onlyTrashed()->whereId($id)->firstOrFail();
        $tag->forceDelete();
        return redirect()->route('tags.index')->withMessage('Successfully Deleted!');
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());
   
        

    }

}


}
