<?php
function kelulusan($nilai_akhir) {
    if ($nilai_akhir > 55 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
function grade($nilai_akhir) {
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return 'A';
    } elseif ($nilai_akhir >= 70) {
        return 'B';
    } elseif ($nilai_akhir >= 56) {
        return 'C';
    } elseif ($nilai_akhir >= 36) {
        return 'D';
    } elseif ($nilai_akhir >= 0) {
        return 'E';
    } else {
        return 'I';
    }
}
function predikat($nilai_akhir) { 
    switch (true) {
        case ($nilai_akhir >= 85 && $nilai_akhir <= 100):
            return 'Sangat Memuaskan';
            break;
        case ($nilai_akhir >= 70):
            return 'Memuaskan';
            break;
        case ($nilai_akhir >= 56):
            return 'Cukup';
            break;
        case ($nilai_akhir >= 36):
            return 'Kurang';
            break;
        case ($nilai_akhir >= 0):
            return 'Sangat Kurang';
            break;
        default:
            return 'Tidak Ada';
            break;
    }
}
function selamat($nilai_akhir) {
    if ($nilai_akhir >= 55) {
        return '<h3>Selamat Anda Lulus !!!</h3>';
    } else {
        return '<h3>Maaf Anda Tidak Lulus</h3>';
    }
}