<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::latest()->paginate(6);
        return view('backend.faqs.index',compact('faqs'));
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
    public function store(FaqRequest $request,Faq $faq)
    {
        try {

            $faq->create([
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment
            ]);

            return redirect()->route('faq')->withMessage('Your Question Submitted');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
     $faq=Faq::findOrFail($id);
     return view('backend.faqs.replay',compact('faq'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('backend.faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request,Faq $faq)
    {
        try {

            $faq->update([
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment,
                'answer' => $request->answer,
            ]);

            return redirect()->route('faqs.index')->withMessage('Successfully Updated');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->withMessage('Comment Deleted');
    }
}
