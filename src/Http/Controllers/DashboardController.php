<?php

namespace DanPowell\Things\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


//use App\Models\Book;

class  DashboardController extends Controller
{



    public function __construct(Request $request)
    {

    }

    public function index()
    {
        return view('things::dashboard.show.dashboardShow')->with([

        ]);
    }


}
