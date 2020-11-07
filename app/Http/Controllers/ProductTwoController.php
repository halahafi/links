<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use DB;
use App\Product;

class ProductTwoController extends Controller
{
   
    public function ruleDownloadSpeedGreaterThan100AndFiber()
    { 
        // $products=Product::all();       
        // $v = Validator::make($products->all(), [
        //     'd_speed' => 'greaterthan:100',
        //     'technology' => 'in:fibre',                
        // ]);
        // if ($v->fails())
        // { 
        //     }
        // else
        // {
            
        // }
        $products=DB::table('products')->where('d_speed', '>', '100')
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
   
}
