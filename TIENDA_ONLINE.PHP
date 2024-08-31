<?php
    $precio1 = 20.0; 
    $precio2 = 15.5; 
    $precio3 = 10.0; 

    $cantidad1 = 2; 
    $cantidad2 = 1; 
    $cantidad3 = 3; 

    
    $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantiqdad2) + ($precio3 * $cantidad3);
    $impuesto = $subtotal * 0.18; 
    $descuento = $subtotal * 0.1; 
    $totalFinal = $subtotal + $impuesto - $descuento;

    echo "Subtotal de la compra: $" . number_format($subtotal, 2) . "<br>";
    echo "Monto de impuestos: $" . number_format($impuesto, 2) . "<br>";
    echo "Descuento aplicado: $" . number_format($descuento, 2) . "<br>";
    echo "Total final de la compra: $" . number_format($totalFinal, 2);

