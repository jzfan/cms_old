<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTables\CategoriesDatatable;
use App\Category;

class CategoryController extends Controller
{
    public function index(CategoriesDatatable $datatable)
    {
    	return $datatable->render('admin.category.index');
    }

    public function edit(Category $category)
    {
    	return view('admin.category.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
    	$category->update($request->input());
    	return redirect('/admin/category');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        
    }
}
