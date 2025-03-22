<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ServiceModel;
use App\Models\SubCategoryModel;
use Illuminate\Http\Request;

class FrontServiceController extends Controller
{
    public function getCat($slug, $subslug='', $service='') {
        $getcat= CategoryModel::getSingleSlug($slug);
        // $getsubcat= SubCategoryModel::getSingleSlug($subslug);
        $getsubcat= SubCategoryModel::where('slug', $subslug)->with('getProcess','getProcess.processattr')->first();
        $getservicefirst= ServiceModel::getSingleSlug($service);
        $getservice= CategoryModel:: getCategoryFront($subslug);
        // $getsubcatsingle= CategoryModel:: getCategoryFront1($subslug);
        if(!empty($getcat) && !empty($getsubcat) && !empty($getservicefirst)){
            $data= [
                    'getcat'=> $getcat,
                    'getservice'=> $getservice,
                    'getsubcat'=> $getsubcat,
                    'getservicefirst'=> $getservicefirst
        ];
//         echo '<pre>';
// dd($data['getsubcat']->toArray());
// echo '</pre>';

            return view('servicedetail',$data);
        }
        elseif(!empty($getcat) && !empty($getsubcat)){
            $data= [
                    // 'getcat'=> $getcat,
                    // 'getsubcatsingle' => $getsubcatsingle,
                    'getservice'=> $getservice,
                    'getsubcat'=> $getsubcat,
        ];
            return view('subCategory',$data);
        }
        elseif(!empty($getcat)){

            $data= [
                    'getcat'=> $getcat,
                    'getservice'=> $getservice,
                    'getsubcat'=> $getsubcat,
                    'getservicefirst'=> $getservicefirst
        ];
            return view('service',$data);
        }
        else{
            abort(404);
        }
    }

    

    

    
}
