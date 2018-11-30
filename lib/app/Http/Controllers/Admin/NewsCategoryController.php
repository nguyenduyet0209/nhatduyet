<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\newscategory;
use App\Http\Requests\AddNewsCateRequest;
use App\Http\Requests\EditNewsCateRequest;
class NewsCategoryController extends Controller
{
    //

    public function getNewsCate(){
    	$data['newscate_list'] = newscategory::all();
    	return view('backend.category_news_admin',$data);
    }
    public function postNewsCate(AddNewsCateRequest $request){
    	$nescategory = new newscategory;
    	$nescategory->newscate_name = $request->name;
    	$nescategory->newscate_slug = str_slug($request->name);
    	$nescategory->save();
    	return back();
    }

    public function getNewsEditCate($id){
    	$data['newscate'] = newscategory::find($id);
    	return view('backend.edit_category_news',$data);
    }
    public function postNewsEditCate(EditNewsCateRequest $request,$id){
    	$nescategory = newscategory::find($id);
    	$nescategory->newscate_name = $request->name;
    	$nescategory->newscate_slug = str_slug($request->name);
    	$nescategory->save();
    	return redirect()->intended('admin/newscategory');
    }

    public function getNewsDeleteCate($id){
    	newscategory::destroy($id);
    	return back();
    }
}
