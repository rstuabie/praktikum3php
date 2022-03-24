<?php
function kelulusan($rata_rata) {
    if ($rata_rata > 55 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
function grade($rata_rata) {
    if ($rata_rata >= 85 && $rata_rata <= 100) {
        return 'A';
    } elseif ($rata_rata >= 70) {
        return 'B';
    } elseif ($rata_rata >= 56) {
        return 'C';
    } elseif ($rata_rata >= 36) {
        return 'D';
    } elseif ($rata_rata >= 0) {
        return 'E';
    } else {
        return 'I';
    }
}
function predikat($rata_rata) { 
    switch (true) {
        case ($rata_rata >= 85 && $rata_rata <= 100):
            return 'Sangat Memuaskan';
            break;
        case ($rata_rata >= 70):
            return 'Memuaskan';
            break;
        case ($rata_rata >= 56):
            return 'Cukup';
            break;
        case ($rata_rata >= 36):
            return 'Kurang';
            break;
        case ($rata_rata >= 0):
            return 'Sangat Kurang';
            break;
        default:
            return 'Tidak Ada';
            break;
    }
}
function selamat($rata_rata) {
    if ($rata_rata >= 55) {
        return '<h3>Selamat Anda Lulus !!!</h3>';
    } else {
        return '<h3>Maaf Anda Tidak Lulus</h3>';
    }
}