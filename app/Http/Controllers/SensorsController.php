<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\TemperaturaChart;
use App\Charts\PressioChart;
use App\Charts\HumitatChart;
use App\Sensor;
use DB;

class SensorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function show($id=null)
    {
        
        if($id>0 and $id<4){

            if($id =='1') {

                $chart = new TemperaturaChart;
                $title='Temperatura';
            }
            elseif($id =='2'){
                
                $chart = new HumitatChart;
                 $title='Humitat';
    
            }
    
            elseif($id =='3'){
    
                $chart = new PressioChart;
                $title='Pressió';
    
            }

            return view('page', ['title' => $title, 'chart' =>$chart]);
        }

        else{

            return view('home');
        }
        
    }
   
    public function restApi($var)
    {
        
      
        if($var=='temp'){

            return DB::select('select temp,created_at from sensors where DATE(created_at) = CURDATE()');

        }

        elseif($var =='humitat'){

            return DB::select('select humitat,created_at from sensors where DATE(created_at) = CURDATE()');


        }
        elseif($var =='pressio'){

            return DB::select('select pressio,created_at from sensors where DATE(created_at) = CURDATE()');


        }
        elseif($var =='all'){

            return DB::select('select temp,humitat,pressio,created_at from sensors where DATE(created_at) = CURDATE()');


        }

    }


}
