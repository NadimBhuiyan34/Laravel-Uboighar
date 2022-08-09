<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class FrontendComposer
{

    protected $categories;
    


    public function __construct()
    {

    }


    public function compose(View $view)
    {
        $view->with([
            'categories'=>Category::all(),

        ]);
    }
}
