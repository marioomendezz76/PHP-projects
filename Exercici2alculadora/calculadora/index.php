<?php
    define("DESCOMPTE", 0.8);
    define("RESTACASH", 0.9);
    define("TARGETA", 1.05);

    // var_dump($argc);
    // var_dump($argv);

    if($argc == 4){
        $preu = (float)$argv[1];
        $quantitat = (int)$argv[2];
        $pagament = is_numeric($argv[3]) ? (int)$argv[3] : -1;
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
            echo "Import Original: $importOriginal \n";
            echo "Import Final: $importFinal \n";
        }else{
            echo "Error, has d'introduir valor positius." .
                 " preu/quantitat i que el pagament pot ser 0=Efectiu, 1=Targeta, 2=Altres\n";
         }
    }else{
        echo "El funcionament del script és calculadoraTPV.php <preu> <quantitat> <pagament> \n";
        echo "Pagament: 0=Efectiu, 1=Targeta, 2=Altres\n";
    }