<?php

namespace App\Http\Controllers;

use App\Models\BusinessTrip;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getBusinessTripCounts()
    {
        $businessTripCounts = DB::select("
            SELECT 
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quater,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quater,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quater,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quater
            FROM 
                busines_trips bt
            INNER JOIN 
                quarters q ON bt.quarters_id = q.id;

        ");
        $youngEconomistCounts = DB::select("
            SELECT 
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quater,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quater,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quater,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quater
            FROM 
                young_economists ye
            INNER JOIN 
                quarters q ON ye.quarters_id = q.id;

        ");
        $trainingCourseCounts = DB::select("
            SELECT 
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quater,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quater,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quater,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quater
            FROM 
                training_courses tc
            INNER JOIN 
                quarters q ON tc.quarters_id = q.id;
        ");
        $higherOrgans = DB::select("
            SELECT 
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quater,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quater,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quater,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quater
            FROM 
                higher_organs tc
            INNER JOIN 
                quarters q ON tc.quarters_id = q.id;
        ");
        $higherOrganCounts = DB::select("
            SELECT 
                wg.name AS issuer_name,
                wg.id as id,
                wg.year_num as year_number,
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quarter,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quarter,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quarter,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quarter
            FROM 
                higher_organs ho 
            INNER JOIN 
                who_givens wg ON ho.who_given_id = wg.id 
            INNER JOIN 
                quarters q ON ho.quarters_id = q.id 
            GROUP BY 
                wg.name,wg.id,wg.year_num 
            ORDER BY 
                wg.id;
        ");
        $publish = DB::select("
            SELECT 
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quater,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quater,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quater,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quater
            FROM 
                publishes bt
            INNER JOIN 
                quarters q ON bt.quarters_id = q.id;

        ");
        $publishCounts = DB::select("
         SELECT 
                pt.name AS issuer_name,
                pt.id as id,
                pt.year_num as year_number,
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quarter,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quarter,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quarter,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quarter
            FROM 
                publishes ho 
            INNER JOIN 
                publish_types pt ON ho.type_id = pt.id 
            INNER JOIN 
                quarters q ON ho.quarters_id = q.id 
            GROUP BY 
                pt.name,pt.id,year_number
            ORDER BY 
                pt.id;
        ");
        $opublishes = DB::select("
            SELECT 
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quarter,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quarter,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quarter,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quarter
            FROM 
                opublishes AS o
            INNER JOIN 
                quarters AS q ON o.quarters_id = q.id
        ");
        $opublishCounts = DB::select("
            SELECT 
                wp.name AS issuer_name,
                wp.id AS id,
                wp.year_num AS year_number,
                SUM(CASE WHEN q.id = 1 THEN 1 ELSE 0 END) AS first_quarter,
                SUM(CASE WHEN q.id = 2 THEN 1 ELSE 0 END) AS second_quarter,
                SUM(CASE WHEN q.id = 3 THEN 1 ELSE 0 END) AS third_quarter,
                SUM(CASE WHEN q.id = 4 THEN 1 ELSE 0 END) AS fourth_quarter
            FROM 
                opublishes AS ho
            INNER JOIN 
                who_publishes AS wp ON ho.oav_id = wp.id
            INNER JOIN 
                quarters AS q ON ho.quarters_id = q.id
            GROUP BY 
                wp.name, wp.id, wp.year_num
            ORDER BY 
                wp.id;
        ");
        // var_dump($opublishCounts);
        return view('client.index',compact(['businessTripCounts','youngEconomistCounts','trainingCourseCounts','higherOrgans','higherOrganCounts','publish','publishCounts','opublishes','opublishCounts']));
    }
}
