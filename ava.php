<?php

    function getSchedule($year){
        if($year == 2024){
            $regular = [5,10,15,20,25,30];
        }else if($year == 2025){
            $regular = [4,8,12,16,20,24,28];
        }
        return $regular;
        
    }

    function getReserve($year,$month){
        if($year == 2024 && $month == 1){
            $reserve = [2,5,10];
        }

        return $reserve;
    }