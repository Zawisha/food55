<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function execute()
    {
        $recipes_active = true;

        return view('site.recipes') ->with(['recipes_active' =>$recipes_active]);
    }
}
