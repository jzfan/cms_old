<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTables\CategoriesDatatable;
use App\Category;

class CategoryController extends Controller
{
    // public function index(CategoriesDatatable $datatable)
    // {
    // 	return $datatable->render('admin.category.index');
    // }

    public function index()
    {
        $tree = $this->categoryTree();
        return view('admin.category.index', compact('tree'));
    }

    public function edit(Category $category)
    {
        $tree = $this->categoryTree();
    	return view('admin.category.edit', compact('category', 'tree'));
    }

    public function update(Category $category, Request $request)
    {
        $id = $request->input('id');
        $pid = $request->input('pid');
        $b = $this->isFather($id, $pid);
        dd($b);

    	$category->update($request->input());
    	return redirect('/admin/category');
    }

    public function destroy(Category $category)
    {
        $id = $category->id;
        $count = Category::where('pid', $id)->count();
        if($count !== 0 )
        {
            abort(401);
        }

        $name = $category->name;
        $category->delete();            
        return $name;
        
    }

    private function categoryTree()
    {
        $arr = Category::all()->toArray();
        return $this->getTree($arr, 0);      
    }

    private function getTree($cate, $pid = 0, $level = 0) {
        $arr = array();
        foreach($cate as $k => $v) {
            if ($v['pid'] == $pid) {
                $v['level'] = $level;
                $arr[] = $v;
                $arr = array_merge($arr, $this->getTree($cate, $v['id'], $level + 1));
            }
        }
        return $arr;
    }

    private function fatherTree($arr, $id)
    {
        $father = [];
        foreach ($arr as $k => $v) {
            if($id == $v['id'])
            {
                $father[] = $v['id'];
                $father = array_merge($father, $this->fatherTree($arr, $v['pid']));  
            }
        }
        return $father;
    }

    private function isFather($id, $pid)
    {
        $arr = Category::all()->toArray();
        $father = $this->fatherTree($arr, $id);
        unset($father[0]);
        return in_array($pid, $father);
    }
}
