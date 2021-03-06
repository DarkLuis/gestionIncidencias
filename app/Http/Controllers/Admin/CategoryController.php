<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    			'name' =>'required'
    		], [
    			'name.required'=>'Ingresar nombre de la Categoría'
    		]);

    	Category::create($request->all());

    	return back();
    }

 	public function update(Request $request)
    {
    	   	$this->validate($request, [
    			'name' =>'required'
    		], [
    			'name.required'=>'Ingresar nombre de la Categoría'
    		]);

    	   	$category_id = $request->input('category_id');
    		$category = Category::find($category_id);
    		$category->name = $request->input('name');
    		$category->save();

    		return back();	
    }   

    public function delete($id)
    {
        Category::find($id)->delete();
        return back();
    }
}
