<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;
use App\Product;
use App\News;
use App\Store;
use App\Cart;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    /**
     * Get home page
     */
    public function getHome()
    {

        // $productModel = new Product();
        // $products = $productModel->getListProduct()->groupBy('type');
        // $this->data['products'] = $products;

        // $newsModel = new News();
        // $newss = $newsModel->getListNews();
        // $this->data['newss'] = $newss;

        // echo "<pre>";
        // print_r($products);die;
        

        return view('client.index');

    }
    
    /**
     * Get news page
     */
    public function getAllNews()
    {

        $newsModel = new News();
        $newss = $newsModel->getListNews();
        $this->data['newss'] = $newss;

        return view('client.news', $this->data);

    }

    /**
     * Get news detail page
     */
    public function getNews($news)
    {

        $newsModel = new News();
        $news = $newsModel->getNewsBySlug($news);

        if ($news) {
            $newsRelated = $newsModel->getListNewsRelate($news->slug);
            $this->data['newsRelated'] = $newsRelated;

            $this->data['news'] = $news;
            config(['config.title' => $news->title, 'config.description' => $news->description]);
            return view('client.news-detail', $this->data);
        }else{
            return view('404', $this->data);
        }
    }


    public function postContact(Request $req) {
        return redirect()->back();
    }
}