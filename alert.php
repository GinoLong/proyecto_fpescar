<?php

function getAlert ($titulo, $mensaje, $alertType) {
    $alert = <<< ALERTA
    <div class="alert alert-$alertType alert-dismissible fade show"  role="alert">
        <p class="alert-heading fs-4 fw-bold">$titulo</p>
        <p>$mensaje</p>
        
    </div>
    ALERTA;

    return $alert;
}