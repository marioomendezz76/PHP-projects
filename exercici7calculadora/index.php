<?php
    require "./constants.php";
    // argv[1] = Preu 
    // argv[2] = Quantitat 
    // argv[3] = Metode 

        echo "<p>El funcionament del script és calculadoraTPV.php <preu> <quantitat> <pagament> </p>";
        echo "<p>Pagament: 0=Efectiu, 1=Targeta, 2=Altres</p><br>";

        $preu = (float)$_GET["preu"];
        $quantitat = (int)$_GET["qtt"];
        $pagament = is_numeric($_GET["metode"]) ? (int)$_GET["metode"] : -1;
        if($preu  > 0.0 && $quantitat > 0 && $pagament>=0 && $pagament<=2){
            $importOriginal = round($preu * $quantitat,2);
            $importFinal = $importOriginal * DESCOMPTE;
            switch($pagament){
                case 0: $importFinal *=  RESTACASH;
                        break;
                case 1: $importFinal *=  TARGETA;
                        break;
            }
            $importFinal = round($importFinal,2);
            echo "
                <style>
                table {
                    width: 25%;
                    border-collapse: collapse;
                    margin: 20px 0;
                }
                td {
                    padding: 8px 12px;
                    text-align: center;
                    border: 1px solid #ddd;
                    background-color: #7d2727;
                    color: white;
                }
                .menu{
                    font-weight: bold;
                }
                </style>
                <table border=1>
                <tr>
                    <td class='menu'>Import Original</td> 
                    <td>$importOriginal</td>
                </tr>
                <tr>
                    <td class='menu'>Import Final</td> 
                    <td>$importFinal</td>
                </tr>
                </table>";
        }else{
            echo "<p><strong>Error</strong>, has d'introduir valor positius.</p><br><p>Preu/quantitat i que el pagament pot ser 0=Efectiu, 1=Targeta, 2=Altres</p>";
         }
        
    
?>