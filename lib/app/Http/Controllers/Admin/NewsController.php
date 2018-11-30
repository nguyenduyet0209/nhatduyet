<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\AddNewsRequest;
use App\Models\newscategory;
use DB;
class NewsController extends Controller
{
    //
    public function getNews(){
    	$data['newslist'] = DB::table('vp_news')->join('vp_newscategories','vp_news.news_cate','=','vp_newscategories.newscate_id')->orderBy('news_id','desc')->get();
    	return view('backend.news_admin',$data);
    }

    public function getAddNews(){
    	$data['newscate'] = newscategory::all();
    	return view('backend.add_news_admin',$data);
    }
    public function postAddNews(AddNewsRequest $request ){
    	$filename = $request->img->getClientOriginalName();
    	$news = new News;
    	$news->news_img = $filename;
    	$news->news_name = $request->name;
    	$news->news_summary = $request->summary;
    	$news->news_detail = $request->detail;
		$news->news_featured = $request->featured;
    	$news->news_slug = str_slug($request->name);
		$news->news_cate = $request->cate;
    	$news->save();
    	$request->img->storeAs('avatar',$filename);
		return redirect('admin/news');
    }

    public function getEditNews($id){
    	$data['news'] = News::find($id);
    	$data['listcate'] = newscategory::all();
    	return view('backend.edit_news_admin',$data);
    }

    public function postEditNews(Request $request,$id){
    	$news = new News;
		$arr['news_name'] = $request->name;
		$arr['news_slug'] = str_slug($request->name);
		$arr['news_summary'] = $request->summary;
		$arr['news_detail'] = $request->detail;
		$arr['news_cate'] = $request->cate;
		$arr['news_featured'] = $request->featured;
		if($request->hasFile('img')){
			$img= $request->img->getClientOriginalName();
			$arr['news_img'] = $img;
			$request->img->storeAs('avatar'.$img);
		}
		$news::where('news_id',$id)->update($arr);
		return redirect('admin/news');
    }
    public function getDeleteNews($id){
    	News::destroy($id);
    	return back();
    }
}
