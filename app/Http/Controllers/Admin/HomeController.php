<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BestSeller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Number;
use App\Models\PreviousWork;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

//    function __construct()
//    {
//        $this->middleware('permission:dashboard', ['only' => ['index']]);
//    }

    public function index()
    {

        $aboutUs = AboutUs::whereStatus(true)->count();
        $product = Product::whereStatus(true)->count();
        $previousWork = PreviousWork::whereStatus(true)->count();
        $gallery = Gallery::whereStatus(true)->count();
        $blog = Blog::whereStatus(true)->count();
        $question = Blog::whereStatus(true)->count();
        $number = Number::whereStatus(true)->count();
        $bestSeller = BestSeller::whereStatus(true)->count();
        $event = BestSeller::whereStatus(true)->count();
        $chartjs = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 150])
            ->labels(['aboutUs', 'product', 'previousWork', 'gallery', 'blog', 'question', 'number', 'bestSeller', 'event'])
            ->datasets([
                [
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#B0CF56', '#14F1D9', '#1453F1', '#CF14F1', '#F114AE', '#F1146B', '#5BC0F2'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#B0CF56', '#14F1D9', '#1453F1', '#CF14F1', '#F114AE', '#F1146B', '#5BC0F2'],
                    'data' => [$aboutUs, $product, $previousWork, $gallery, $blog, $question, $number, $bestSeller, $event, 0]
                ]
            ])
            ->options([]);


        return view('admin.index', compact('chartjs'));
    }

    public function information()
    {
        return view('admin.Setting.register');
    }
}
