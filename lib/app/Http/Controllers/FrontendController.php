<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Mail;
class FrontendController extends Controller
{
    //
    public function getHome(){
    	$data['featured'] = Product::where('prod_featured',1)->orderBy('prod_id','desc')->take(12)->get();
    	$data['new'] = Product::orderBy('prod_id','desc')->take(12)->get();
    	return view('frontend.home',$data);
    }

    public function getDetail($id){
    	$data['detail'] = Product::find($id);
    	$data['related'] = Product::where([['prod_cate',$data['detail']->prod_cate], ['prod_id', '!=' , $id]])->orderBy('prod_id','desc')->take(8)->get();
    	return view('frontend.detail',$data);
    }

    public function getCategory($id){
    	$data['cate_name'] = Category::find($id);
    	$data['items'] = Product::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
    	return view('frontend.category',$data);
    }

    public function getSearch(Request $request){
    	$result = $request->result;
    	$data['keyword'] = $result;
    	$result = str_replace(' ', '%', $result);
    	$data['items'] = Product::where('prod_name','like','%'.$result.'%')->get();
    	return view('frontend.search',$data);
    }

    public function getAboutus(){
        return view('frontend.about-us');
    }
    public function getContact(){
        return view('frontend.contact');   
    }
    public function postContact(Request $request){
        $data['info'] = $request->all();
        $email = $request->email;
        Mail::send('frontend.email_contact', $data, function($message) use($email){
            $message->from('nguyenduyet0209@gmail.com','Mr.duyet Shop');
            $message->cc('hello@nhatduyet.me','Nhật Duyệt');
            $message->subject('Lời nhắn contact từ Mr.Duyet Shop');
        });
        return redirect('complete_contact');
    }
    public function getCompleteContact(){
        return view('frontend.complete_contact');
    }
}
