<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function print($id){
        $data = Product::where('user_id', $id)->first();
        return view('pages.dashboard.print',compact('data'));
    }
    public function detailsView($id){
        $data = Product::where('user_id', $id)->first();
        return view('pages.dashboard.details',compact('data'));
    }

    function ProductPage():View{
        return view('pages.dashboard.product-page');
    }


    function CreateProduct(Request $request)
    {

        // Prepare File Name & Path
        $img=$request->file('img');

        $t=time();
        $file_name=$img->getClientOriginalName();
        $img_name="{$t}-{$file_name}";
        $img_url="uploads/{$img_name}";


        // Upload File
        $img->move(public_path('uploads'),$img_name);
        $userId = rand(10000000, 99999999);


        // Save To Database
        return Product::create([
            'user_id' =>  $userId,
            'first_name'=>$request->input('first_name'),
            'sure_name'=>$request->input('sure_name'),
            'middle_name'=>$request->input('middle_name'),
            'birth_date'=>$request->input('birth_date'),
            'type'=>$request->input('type'),
            'duration'=>$request->input('duration'),
            'entry_time'=>$request->input('entry_time'),
            'period'=>$request->input('period'),
            'app_status'=>$request->input('app_status'),
            'status_date'=>$request->input('status_date'),
            'ref_number'=>$request->input('ref_number'),
            'country'=>$request->input('country'),
            'district'=>$request->input('district'),
            'number'=>$request->input('number'),
            'issu_date'=>$request->input('issu_date'),
            'exp_date'=>$request->input('exp_date'),
            'img_url'=>$img_url,
        ]);
    }


    function DeleteProduct(Request $request)
    {
        $product_id=$request->input('id');
        $filePath=$request->input('file_path');
        File::delete($filePath);
        return Product::where('id',$product_id)->delete();

    }


    function ProductByID(Request $request)
    {
        $product_id=$request->input('id');
        return Product::where('id',$product_id)->first();
    }


    function ProductList()
    {
        return Product::orderBy('created_at', 'desc')->get();
    }

    function UpdateProduct(Request $request)
    {
        $product_id=$request->input('id');

        if ($request->hasFile('img')) {

            // Upload New File
            $img=$request->file('img');
            $t=time();
            $file_name=$img->getClientOriginalName();
            $img_name="{$t}-{$file_name}";
            $img_url="uploads/{$img_name}";
            $img->move(public_path('uploads'),$img_name);

            // Delete Old File
            $filePath=$request->input('file_path');
            File::delete($filePath);

            // Update Product

            return Product::where('id',$product_id)->update([
            'first_name'=>$request->input('first_name'),
            'sure_name'=>$request->input('sure_name'),
            'middle_name'=>$request->input('middle_name'),
            'birth_date'=>$request->input('birth_date'),
            'type'=>$request->input('type'),
            'duration'=>$request->input('duration'),
            'entry_time'=>$request->input('entry_time'),
            'period'=>$request->input('period'),
            'app_status'=>$request->input('app_status'),
            'status_date'=>$request->input('status_date'),
            'ref_number'=>$request->input('ref_number'),
            'country'=>$request->input('country'),
            'district'=>$request->input('district'),
            'number'=>$request->input('number'),
            'issu_date'=>$request->input('issu_date'),
            'exp_date'=>$request->input('exp_date'),
            'img_url'=>$img_url,
            ]);

        }

        else {
            return Product::where('id',$product_id)->update([
                'first_name' => $request->input('first_name'),
                'sure_name' => $request->input('sure_name'),
                'middle_name' => $request->input('middle_name'),
                'birth_date' => $request->input('birth_date'),
                'type' => $request->input('type'),
                'duration' => $request->input('duration'),
                'entry_time' => $request->input('entry_time'),
                'period' => $request->input('period'),
                'app_status' => $request->input('app_status'),
                'status_date' => $request->input('status_date'),
                'ref_number' => $request->input('ref_number'),
                'country' => $request->input('country'),
                'district' => $request->input('district'),
                'number' => $request->input('number'),
                'issu_date' => $request->input('issu_date'),
                'exp_date' => $request->input('exp_date')
            ]);
        }
    }
}
