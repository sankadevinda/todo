<?php

namespace App\Http\Controllers;

use App\Models\catergory;
use App\Models\product;
use domain\Facade\BannerFacade;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Homecontroll extends Controller
{
    //view active banners in home page
    public function index(){
        $response['banners']=BannerFacade::allActive();
        return view('pages.Home.index')->with($response);
    }

    //view products and relevant category in relation page
    public function relationship(){
        //relation ship mean products in this place
        $response['product'] = product::all();
        return view('pages.relationship.index')->with($response);

    }

    //view category in category index page
    public function category(){
        $response['category'] = catergory::all();
        return view('pages.category.index')->with($response);
    }

    public function categoryproductlist($category_id){
        $category=catergory::find($category_id);
        $categoryproductlist=$category->products;
        return view('pages.category.categoryproductlist',compact('categoryproductlist', 'category'));
    }
}

