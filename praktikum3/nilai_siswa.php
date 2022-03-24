<?php
require_once 'libfungsi.php';
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_akhir = (30 * $nilai_uts / 100 + 35 * $nilai_uas / 100 + 35 * $nilai_tugas / 100);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-light bg-success p-4">Keterangan Nilai</h3>
    <table class="table table-bordered mx-auto" style="width: 1200px;"> 

    <thead>
    <tr>
    <th>Nama</th>
    <th>Mata Kuliah</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Tugas</th>
    <th>Nilai Akhir</th>
    <th>Keterangan</th>
    </tr> 
    </thead>

    <tbody>
    <?php
    $nomor = 1; 
    $grade = grade($nilai_akhir);
    $predikat = predikat($nilai_akhir);
    $selamat = selamat($nilai_akhir);
    echo '<tr><td>'.$nama_siswa.'</td>';
    echo '<td>'.$mata_kuliah.'</td>';
    echo '<td>'.$nilai_uts.'</td>';
    echo '<td>'.$nilai_uas.'</td>';
    echo '<td>'.$nilai_tugas.'</td>';
    $nilai_akhir = (30 * $nilai_uts / 100 + 35 * $nilai_uas / 100 + 35 * $nilai_tugas / 100);
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<td>'.$grade.' ('.$predikat.')'.'</td>';
    echo '<tr/>';
    $nomor++;  
    ?>
    </tbody> 
    </table>
    <div class="col text-center mx-auto" style="width: 1200px;">
        <?php
        $hasil_ujian = kelulusan($nilai_akhir); 
        echo '<h3>'.$nama_siswa.' Dinyatakan '.$hasil_ujian.'<br/>';
        echo '<h3>Nilai Anda '.$predikat.'<br/>';
        echo $selamat; 
        ?>
    </div>
    <div class="form-group row mb-2">
            <label for="" class="col-sm-5 col-form-label"></label>
            <div class="col-sm-9">
            <input type="button" value="Go Back" class="btn btn-secondary" onclick="history.back(-1)" />
        </div>
</body>
</html>