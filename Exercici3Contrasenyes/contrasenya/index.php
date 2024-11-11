<?php

    // var_dump($argc);
    // var_dump($argv);

    if($argc == 6){
        $longitud = (int)$argv[1];
        $majuscula = (int)$argv[2];
        $minuscula = (int)$argv[3];
        $nombres = (int)$argv[4];
        $simbols = (int)$argv[5];
        $llista = [];
        $contrasenya = [];

        if($majuscula == 1){
            $llista = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        }
        if($minuscula == 1){
            array_push($llista, 'a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z');
        }
        if($nombres == 1){
            array_push($llista, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
        }
        if($simbols == 1){
            array_push($llista, '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '{', '}', '[', ']', '|', ':', ';', '"', "'", '<', '>', ',', '.', '?', '/');
        }
        if($longitud > 0 && ($majuscula >= 0 && $majuscula <= 1) && ($minuscula >=0 && $minuscula <=1) && ($nombres >=0 && $nombres <=1) && ($simbols >=0 && $simbols <=1)){
            
            for($i=0;$i<$longitud; $i++){
                array_push($contrasenya, $llista[rand(0, count($llista)-1)]);
            }
            echo "La teva contrasenya és: " . implode("", $contrasenya) . "";
        }
        else{
            echo "Error, els paràmetres han d'estar ben introduits.";
         }
    }else{
        echo "S'han de passar tots els paràmetres. \n";
        echo "Longitud: Valor que volguis | Majúscules, Minúscules, Nombres i Símbols: 0-NO, 1-SI \n";
}
