<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show(Category $category) {
        if (!$category) {
            abort(404);
        }
        $data = [
            'category' => $category
        ];
        return view('guest.categories.show', $data);
    }
}
