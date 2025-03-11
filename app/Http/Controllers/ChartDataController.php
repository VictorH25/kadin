<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Helper;

class ChartDataController extends Controller
{
    public function __construct()
    {
        Helper::global_variables();
    } 

    function getMonth(){
        $month_array = array();
        $sales_month = Order::orderBy('created_at', 'asc')
            ->where('active',1)
            ->get();
        $sales_month = json_decode($sales_month);
        if(! empty($sales_month)){
            foreach($sales_month as $unformatted_date){
                $date = new \DateTime( $unformatted_date->created_at );
                $month_no = $date->format('m');
                $month_name = $date->format('M');
                $month_array[$month_no] = $month_name;
            }
        }
        return $month_array;
    }

    function getMonthlySalesCount($month){
        $monthly_sales_count = Order::where('active',1)
            ->whereMonth('created_at',$month)
            ->get()
            ->count();
        return $monthly_sales_count;
    }

    function getMonthlySalesDelivery($month){
        $monthly_sales_delivery_count = Order::where('active',1)
            ->whereMonth('created_at',$month)
            ->where('delivery',1)
            ->get()
            ->count();
        return $monthly_sales_delivery_count;
    }

    function getMonthlySalesData(){
        $monthly_sales_data_array = array();
        $monthly_sales_count_array = array();
        $monthly_sales_delivery_array = array();
        $month_name_array = array();
        $month_array = $this->getMonth();

        if(! empty($month_array)){
            foreach($month_array as $month_no => $month_name){
                $monthly_sales_count = $this->getMonthlySalesCount($month_no);
                $monthly_sales_delivery_count = $this->getMonthlySalesDelivery($month_no);
                array_push($monthly_sales_count_array,$monthly_sales_count);
                array_push($month_name_array,$month_name);
                array_push($monthly_sales_delivery_array,$monthly_sales_delivery_count);
            }
        }
        $max_no = max($monthly_sales_count_array);
        $max = round(($max_no + 10/2)/10) * 10;
        $monthly_sales_data_array = array(
            'months' => $month_name_array,
            'sales_count_data' => $monthly_sales_count_array,
            'sales_delivery_data' => $monthly_sales_delivery_array,
            'max' => $max
        );
        return $monthly_sales_data_array;
    }
}
