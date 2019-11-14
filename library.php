<?php

$con = mysqli_connect('localhost','root','','db_agenda');

function num_row($sql){
    $row = mysqli_num_rows(mysqli_query($GLOBALS['con'],$sql));
    return $row;
}

function row($sql){
    $row = mysqli_fetch_all(mysqli_query($GLOBALS['con'],$sql),MYSQLI_ASSOC);
    mysqli_free_result(mysqli_query($GLOBALS['con'],$sql));
    return $row;
}

function namaHari($date){
    $nameOfDay = date('D', strtotime($date));
    switch($nameOfDay){
        case 'Sun':
            $hari_ini = "Minggu";
        break;
    
        case 'Mon':         
            $hari_ini = "Senin";
        break;
    
        case 'Tue':
            $hari_ini = "Selasa";
        break;
    
        case 'Wed':
            $hari_ini = "Rabu";
        break;
    
        case 'Thu':
            $hari_ini = "Kamis";
        break;
    
        case 'Fri':
            $hari_ini = "Jumat";
        break;
    
        case 'Sat':
            $hari_ini = "Sabtu";
        break;
        
        default:
            $hari_ini = "Tidak di ketahui";     
        break;
    }
    return $hari_ini;
}

function bulan($month){
    switch($month){
        case 1:
            $bulan = "Januari";
        break;
        case 2:
            $bulan = "Februari";
        break;
        case 3:
            $bulan = "Maret";
        break;
        case 4:
            $bulan = "April";
        break;
        case 5:
            $bulan = "Mei";
        break;
        case 6:
            $bulan = "Juni";
        break;
        case 7:
            $bulan = "Juli";
        break;
        case 8:
            $bulan = "Agustus";
        break;
        case 9:
            $bulan = "September";
        break;
        case 10:
            $bulan = "Oktober";
        break;
        case 11:
            $bulan = "November";
        break;
        case 12:
            $bulan = "Desember";
        break;
    }
    return $bulan;
}

function tgl_indo($date){
    $tanggal = date('d m Y', strtotime($date));
    $tanggal = explode(' ', $tanggal);
    $tanggal[1] = bulan($tanggal[1]);
    $tanggal = implode(' ', $tanggal);
    return $tanggal;
}