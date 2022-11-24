<?php 

if (! function_exists('words')) {
    
    function words($value, $words = 10, $end = '.....')
    {
        return \Illuminate\Support\Str::words($value, $words, $end);
    }
}

?>