<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Validator;
use App\Exports\CategoriesExport;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;




class CategoryController extends Controller
{
 
    public function index(){
        
        $categories = Category::latest()->paginate(4);
        return view('backend.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('backend.categories.create');
    }



public function store(CategoryRequest $request, Category $category){
    //dd($request->request);
    try {
        $category->create([
            'title' => $request->title,
            'description' => $request->description,
            'route'=>$request->route,
            'is_active' => $request->is_active ?? false,

        ]);
        return redirect()->route('categories.index')->withMessage('Successfully Created');
    } catch (QueryException $e) {
        return redirect()->back()->withInput()->withErrors($e->getMessage());
    }
}

  


    public function show(Category $category)
    {
    

        return view('backend.categories.show', compact('category'));
    

     }

     public function edit(Category $category)
     {
         return view('backend.categories.edit', compact('category'));
     }
    
     public function update(CategoryRequest $request, Category $category)
    {
        try {
            $category->update([
                'title' => $request->title,
                'description' => $request->description,
                'route' => $request->route,
                'is_active' => $request->is_active ?? false,
                
                 ]);

            return redirect()->route('categories.index')->withMessage('Successfully Updated');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }





public function destroy(Category $category)
{
      
      $category->delete();
      return redirect()->route('categories.index')->withMessage('Successfully Deleted')->withType('delete');


}
public function trash()
{
    $categories= Category::onlyTrashed()->paginate(2);
    return view('backend.categories.trash', compact('categories'));

}

public function restore( $id)
{
    try {
        $category= Category::onlyTrashed()->whereId($id)->firstOrFail();
        $category->restore();
        return redirect()->back()->withMessage('Successfully Restored!');
        
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());
        
    }
}
public function delete($id)
{
      
    try {

        $category = Category::onlyTrashed()->whereId($id)->firstOrFail();
        $category->forceDelete();
        return redirect()->route('categories.index')->withMessage('Successfully Deleted!');
    } catch (QueryException $e) {
        Log::error($e->getMessage());
        return redirect()->back()->withErrors($e->getMessage());
   
        

    }

}


}
