<?php

use Modules\Applicant\Entities\Applicant;

if (!function_exists('Applicant_ID')){
function Applicant_ID(){
	$count=Applicant::all()->count();
        $acronym = 'App';
        $date = date('Y');
       
        if (empty($count)) {
                $num = 1;
            } else {
                $num = $count + 1;
            }

            if ($num > 9999) {
                $id = $acronym . '-' . $date . '-' . $num;
            }
            if ($num <= 9999) {
                $id = $acronym . '-' . $date . '-' . $num;
            }
            if ($num <= 999) {
                $id = $acronym . '-' . $date . '-'.'0'. $num;
            }
            if ($num <= 99) {
               $id = $acronym . '-' . $date . '-'.'00'. $num;
            }
            if ($num <= 9) {
                $id = $acronym . '-' . $date . '-'.'000'. $num;
            }

           return $id;
    	}
    }
  