<?php 
namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{	//hiển thị danh sách
    public function index(){
        return view('index');
    }
    public function view(){
    	$pro = category::paginate(5);
    	return view('view',[
    		'pro'=>$pro
    	]);
    }
    //thêm danh sách
    public function GetAdd(){
    	return view('add');
    }
    public function PostAdd(Request $request){

    	// category::create($request->all());
        //
        $cate = new category;
        $cate->name = $request->name;
        $cate->price = $request->price;
        $cate->category_id = $request->category_id;
        $cate->save();
        return  redirect()->route('cat_view');
    }
    //sửa danh sách hiển thị form

    public function getedit(){

    	return view('edit');
    }
    //cập nhật form
    public function postedit($id, request $request){
        $cate = category::find($id);
        $cate->name = $request->name;
        $cate->price = $request->price;
        $cate->category_id = $request->category_id;
        $cate->save();
        return redirect()->route('cat_view');
    }
    //xóa
    public function del($id){
    	category::find($id)->delete();
    	return redirect()->back();
    }
    public function getSearch(Request $request){
        $pro = category::where('name','LIKE','%'.$request->search.'%')
        ->orWhere('price','LIKE','%'.$request->search.'%')
        ->get();
        return view('search',compact('pro'));
    }

}

?>