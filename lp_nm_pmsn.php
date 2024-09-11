<?php 
session_start();

include 'config/app.php';
include 'layout/header.php';

?>  
  
<body>
  <div class="card border-0">
        <div class="card-header">
            <h2 class="card-title">
                Laporan Nama Pemesan
            </h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Judul Film</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Stewart</td>
                        <td>Joker</td>
                        <td>18/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>James Reward</td>
                        <td>Agak laen</td>
                        <td>18/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Antony</td>
                        <td>Dune: Part two</td>
                        <td>17/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Kiwi</td>
                        <td>Dune: Part two</td>
                        <td>17/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Garnacho</td>
                        <td>Joker</td>
                        <td>17/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Amad</td>
                        <td>Agak laen</td>
                        <td>16/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Nafie</td>
                        <td>Dune: Part two</td>
                        <td>16/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Roy</td>
                        <td>Agak laen</td>
                        <td>15/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Ardiasy</td>
                        <td>Joker</td>
                        <td>15/05/2024</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Ibrahimovic</td>
                        <td>Dune: Part two</td>
                        <td>14/05/2024</td>
                    </tr>
                </tbody>
            </table>
        </div>


<?php 
include 'layout/footer.php';

?>