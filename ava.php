<?php

    function getSchedule($year,$month){
        $data=[
           2024=>[
                1 => [2,5,10,15,20]
            ]
        ];
        if(isset($data[$year][$month])){
            return $data[$year][$month];
        }

        return[];
        
    }

    function getReserve($year,$month){
        $data=[
            2024=>[
                 1 => [8,9,21,23,24,30]
             ]
         ];
         if(isset($data[$year][$month])){
             return $data[$year][$month];
         }
 
         return[];
    }