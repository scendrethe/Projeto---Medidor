<?php

function CalcularGlicemia($glicemia){

       switch (true) {
        case ($glicemia >= 30 && $glicemia < 80):
            return 1;
            break;
        case ($glicemia >= 80 && $glicemia < 180):
            return 2;
            break;
        case ($glicemia >= 180 && $glicemia < 210):
            return 3;
            break;
        case ($glicemia >= 210 && $glicemia < 250):
            return 4;
            break;
        case ($glicemia >= 250 && $glicemia < 300):
            return 5;
            break;
        case ($glicemia >= 300 && $glicemia < 500):
            return 6;
            break;
        default: 
            return 7;
            break;
    }

}

?>

<!-- switch ($CalcularGlicemia) {
    case 1:
        echo "Cuidado! A glicemia de $glicemia mg/dL está baixa. É necessário a administração de 60ml glicose! Acionando seu contato de emergência.";
        break;
    case 2:
        echo "A glicemia de $glicemia mg/dL está dentro dos padrões.";
        break;
    case 3:
        echo "A glicemia de $glicemia mg/dL está alta. É necessário a administração de 4UI de IRH! Quer que acione seu contato de emergência?";
        break;
    case 4:
        echo "A glicemia de $glicemia mg/dL está alta. É necessário a administração de 6UI de IRH! Quer que acione seu contato de emergência?";
        break;
    case 5:
        echo "A glicemia de $glicemia mg/dL está alta. É necessário a administração de 8UI de IRH! Quer que acione seu contato de emergência?";
        break;
    case 6:
        echo "A glicemia de $glicemia mg/dL está alta. É necessário a administração de 10UI de IRH! Acionando seu contato de emergência.";
        break;
    default: 
        echo "A glicemia de $glicemia mg/dL corresponde a óbito. Acionando seu contato de emergência.";
        break;
}
 -->

