<?php
    $num1 = $_GET['values'][0];
    $num2 = $_GET['values'][1];
    $operation = $_GET['operation'];
    $resultado=0;
    if (ctype_digit($num1) && ctype_digit($num2)){       
        switch ($operation) {
        case "sum":
            $resultado = $num1+$num2;
            $respuesta['Status']="OK";
            $respuesta['Msg']="Successful operation";
            break;
        case "subtraction":
            $resultado = $num1-$num2;
            $respuesta['Status']="OK";
            $respuesta['Msg']="Successful operation";
            break;
        case "division":
            if ($num2 != 0){
                $resultado = $num1/$num2;
                $respuesta['Status']="OK";
                $respuesta['Msg']="Successful operation";
            } else{
                $respuesta['Status']="error";
                $respuesta['Msg']="The second value cannot be 0";
            }
            break;
        case "multiplication":
            $resultado = $num1*$num2;
            $respuesta['Status']="OK";
            $respuesta['Msg']="Successful operation";
            break;
        }
    } else {
        $respuesta['Status']="error";
        $respuesta['Msg']="The input values must be numeric values";
    }
    $respuesta['Result']=$resultado;
    $respuestaJson= json_encode($respuesta);
    echo $respuestaJson;
?>

