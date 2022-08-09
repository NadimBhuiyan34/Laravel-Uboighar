<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\sellbook;
use App\Models\requestbook;
use App\Models\donatebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $profile = Profile::where('user_id', $id)->first();
        $sellbooks = sellbook::where('user_id', $id)->get();
        $requestbooks = requestbook::where('user_id', $id)->get();
        $donatebooks = donatebook::where('user_id', $id)->get();
        
  
        return view('frontend.profile.index',compact('profile','sellbooks','requestbooks','donatebooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile=Profile::findOrFail($id);
        return view('frontend.profile.profile_update',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { 
        if($file=$request->file('image')){
            $filename=date('dmY').time().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/profiles'),$filename);
        }
           $profile=Profile::findOrFail($id);
         
          $profile->update([
            
            'profession'=>$request->profession,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'facebook_url'=>$request->facebook_url??"",
            'linkedin_url'=>$request->linkedin_url??"",
            'image'=>$filename??"$profile->image",
           ]
           );
           $profile->users()->update([
            'name' => $request->name??"$profile->users->name", 
            'email' => $request->email??"$profile->users->email",
            
             
        ]);
           return redirect()->back()->withMessage('Your Profile Successfully Updated');
    
        // try {

        //     if ($request->file('image')) {
        //         unlink(storage_path('app/public/profiles/') . $profile->image);
        //     }

        //     $category->update([
        //         'profession'=>$request->profession,
        //           'address'=>$request->address,
        //             'mobile'=>$request->mobile,
        //              'facebook_url'=>$request->facebook_url??"",
        //            'linkedin_url'=>$request->linkedin_url??"",
        //            'image' => $this->uploadImage($request->file('image')) ?? $profile->image
        //     ]);

        //     return redirect()->back()->withMessage('Successfully updated');
        // } catch (QueryException $e) {
        //     return redirect()->back()->withInput()->withErrors($e->getMessage());
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
