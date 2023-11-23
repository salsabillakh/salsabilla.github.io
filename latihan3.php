<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Kelulusan</h1>


        <form action="" method="POST" name="kelulusan">

            <div class="form-group">
                <label for="nm">Nama </label>
                <input type="text" class="form-control" id="nm" name="nm" Required>
            </div>
            <div class="form-group">
                <label for="kelas">kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" Required>
            </div>
            <div class="form-group">
                <label for="nilaiProduktif">produktif</label>
                <input type="text" class="form-control" id="nilaiProduktif" name="nilaiProduktif" Required>
            </div>
            <div class="form-group">
                <label for="nilainormatif">Normatif</label>
                <input type="text" class="form-control" id="nilainormatif" name="nilainormatif" Required>
            </div>
            <div class="form-group">
                <label for="nilaimulok">mulok</label>
                <input type="text" class="form-control" id="nilaimulok" name="nilaimulok" Required>
            </div>
            <button type="submit" name="proses" class="btn btn-primary">proses</button>

        </form>

        <hr>


        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['nm'];
            $kelas = $_POST['kelas'];
            $nilaiProduktif = $_POST['nilaiProduktif'];
            $nilainormatif = $_POST['nilainormatif'];
            $nilaimuloks = $_POST['nilaimulok'];
            $totalnilai = $nilaiProduktif + $nilainormatif + $nilaimuloks;
            $nilairata_rata = $totalnilai / 3;



            if ($nilaiProduktif > 90) {
                $gradeProduktif = "A";
            } elseif ($nilaiProduktif > 80) {
                $gradeProduktif = "B";
            } elseif ($nilaiProduktif > 70) {
                $gradeProduktif = "C";
            } elseif ($nilaiProduktif > 60) {
                $gradeProduktif = "D";
            } elseif ($nilaiProduktif > 50) {
                $gradeProduktif = "E";
            }else  { $grademulok = "T";
                   
 
            }

            if ($nilainormatif > 90) {
                $gradenormatif = "A";
            } elseif ($nilainormatif > 80) {
                $gradenormatif = "B";
            } elseif ($nilainormatif > 70) {
                $gradenormatif = "C";
            } elseif ($nilainormatif > 60) {
                $gradenormatif = "D";
            } elseif ($nilainormatif > 50) {
                $gradenormatif = "E";
            }else  { $grademulok = "T";
                   
 
            }

            if ($nilaimuloks > 90) {
                $grademulok = "A";
            } elseif ($nilaimuloks > 80) {
                $grademulok = "B";
            } elseif ($nilaimuloks > 70) {
                $grademulok = "C";
            } elseif ($nilaimuloks > 60) {
                $grademulok = "D";
            } elseif ($nilaimuloks > 50) {
                $grademulok = "E";
            }else  { $grademulok = "T";
                   
 
        }

            $ketp = $nilaiProduktif >= 70 ? "Lulus" : "Tidak Lulus";
            $ketn = $nilainormatif >= 70 ? "Lulus" : "Tidak Lulus";
            $ketm = $nilaimuloks >= 70 ? "Lulus" : "Tidak Lulus";
            $ketr = $nilairata_rata >= 70 ? "Lulus" : "Tidak Lulus";
        ?>
        <div class="container">
        <h5>Nama : <?php echo $nama?></h5><br>
        <h5>Kelas :<?php echo  $kelas?></h5><br>
       
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Mapel</th>
                        <th scope='col'>Nilai</th>
                        <th scope='col'>Grade</th>
                        <th scope='col'>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td>produktif</td>
                        <td><?php echo $nilaiProduktif ?></td>
                        <td><?php echo $gradeProduktif ?></td>
                        <td><?php echo $ketp ?></td>
                    </tr>
                    <tr>
                        <th scope='row'>2</th>
                        <td>Normatif</td>
                        <td><?php echo $nilainormatif ?></td>
                        <td><?php echo $gradenormatif ?></td>
                        <td><?php echo $ketn ?></td>
                    </tr>
                    <tr>
                        <th scope='row'>3</th>
                        <td>Mulok</td>
                        <td><?php echo $nilaimuloks ?></td>
                        <td><?php echo $grademulok ?></td>
                        <td><?php echo $ketm ?></td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <h3>Nilai Rata rata </h3>
                <h3><?php echo $nilairata_rata ?></h3>
        
            </div>
        
    </div>
    <?php } ?>
    </div>
</body>

</html>