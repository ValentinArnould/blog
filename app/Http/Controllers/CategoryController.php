<?php

namespace App\Http\Controllers;

use App\Category;

use App\Http\Requests\StoreBlogCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();



        //retrouver un modèle par sa clé primaire
        //$category = Category::find(1);
        //retrouver le premier modèle correspondant à la contrainte
        //$category = Category::where('idCategory', 1)->all();
        //$category = Category::find(1,2,3);
        //$categories = Category::query('SELECT * FROM `categories`;');
        //var_dump($categories->first()->labelCategory);

        return view('category.list', ['categories' => $categories]);
    }

    public function create(){
        return view('category.create');
    }

    public function store(StoreBlogCategory $request) {
        $category = new Category;
        $category->label = $request->label;
        $category->save();
        return redirect('/category');
    }

    public function update($id) {
        $category = Category::find($id);
        return view('category.update', ['category' => $category]);
    }

    public function edit(StoreBlogCategory $request, $id) {
        $category = Category::find($id);
        $category->labelCategory = $request->label;
        $category->save();
        return redirect('/category');
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect($this->redirectTo);
    }
}
