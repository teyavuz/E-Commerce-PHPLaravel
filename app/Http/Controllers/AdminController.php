<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\User;
     

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }
    public function uploadproduct(Request $request)
    {
        $data = new product;
        
        $image = $request->file;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('productimage' , $imagename);

        $data->image= $imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Ürün Başarıyla Eklendi!');
        
    }

    public function showproduct()
    {
        $data=product::all();
        return view('admin.showproduct',compact('data'));

    }

    public function deleteproduct($id){
        $data=product::find($id);

        $data->delete();

        return redirect()->back()->with('message','Ürün Silindi');
    }
    
    public function updateview($id){
        $data=product::find($id);

        return view('admin.updateview',compact('data'));

        $data->update();

        return redirect()->back()->with('message','Ürün Güncellendi');
    }

    public function updateproduct(Request $request ,$id){
        $data=product::find($id);

        $image = $request->file;

        if($image)
        {

         
        
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('productimage' , $imagename);

        $data->image= $imagename;

        }

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Ürün Başarıyla Güncellendi!');
    }

    public function showorder(){

        $order=order::all();

        return view('admin.showorder',compact('order'));
    }

    public function updatestatus($id){

        $order=order::find($id);
        $order->status='Teslim edildi';
        $order->save();

        return redirect()->back()->with('message', 'Ürün Teslim Edildi');
    }

}
