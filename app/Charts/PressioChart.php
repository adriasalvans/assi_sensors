<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Sensor;
use App\Http\Controllers\SensorsController;

class PressioChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $data = Sensor::whereDate('created_at', date('Y-m-d'))->get();
        $labels = [];
        foreach($data as $row){
            array_push($labels, $row->created_at->toDateTimeString());
        }
        
        $this->labels($labels);
        $this->dataset('Pressió [hPa]', 'line',$data->map->pressio);
    }
}
