<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log; 

class Helper
{

    public static function IDGenerator($model, $trow, $length = 4, $prefix)
    {
        try {
            $data = $model::orderBy('id', 'desc')->first();

            if (!$data) {
                $log_length = $length;
                $last_number = '';
            } else {
                $code = substr($data->$trow, strlen($prefix) + 1);
                $actual_last_number = (int)$code;
                $increment_last_number = ((int) $actual_last_number) + 1;
                $last_number_length = strlen($increment_last_number);
                $log_length = $length - $last_number_length;
                $last_number = $increment_last_number;
            }

            $zeros = str_repeat("0", $log_length);
            return $prefix . '-' . $zeros . $last_number;
        } catch (\Exception $e) {
           
            Log::error('IDGenerator error: ' . $e->getMessage());
            return null; 
        }
    }
}
?>