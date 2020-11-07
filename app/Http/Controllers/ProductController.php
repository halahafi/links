<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use DB;
use App\Product;

class ProductController extends Controller
{
    public function ruleUploadSpeedLessThan100()
    { 
        // $products=Product::all();       
        // $v = Validator::make($products->all(), [
        //     'u_speed' => 'lessthan:100',                    
        // ]);
 
        $products=DB::table('products')->where('u_speed', '<', '100')->get();  
        foreach($products as $p)
        {
            $upload = $p->u_speed;
            $download = $p->d_speed;
            $technology = $p->technology;
        }    
        return view('show')->withProducts($products)
                            ->withUploadSpeed($upload)
                            ->withDownloadSpeed($download); 
            
    }

    public function ruleUploadSpeedLessThan100AndFiber()
    { 
        // $products=Product::all();       
        // $v = Validator::make($products->all(), [
        //     'u_speed' => 'lessthan:100',
        //     'technology' => 'in:fibre',                
        // ]);
        $products='';
        $upload='';
        $download='';
        $technology='';
        $products=DB::table('products')->where('u_speed', '<', '100')
                                    ->where('technology', '=', 'fibre')
                                    ->get();
       
        foreach($products as $p)
        {
            $upload = $p->u_speed;
            $download = $p->d_speed;
            $technology = $p->technology;
        }   
       
        return view('show')->withProducts($products)
                            ->withUploadSpeed($upload)
                            ->withDownloadSpeed($download);  
    }


    // public function store(Request $request)
    // {
    //     $input=$request->all();
    //     $images=array();
    //     if($files=$request->file('images')){
    //         foreach($files as $file){
    //             $name=$file->getClientOriginalName();
    //             $file->move('storage/image',$name);
    //             $images[]=$name;
    //         }
    //     }
    //     /*Insert your data*/

    //     Product::insert( [
    //         'images'=>  implode("|",$images),
    //         'title' =>$input['title'],
           
    //     ]);

    //     return redirect('/products');
    // }
   
}
