<?php

function getCard($nombre, $descripcion, $foto) { ?>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="<?= $foto ?>" alt="..." >
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?= $nombre ?></h5>
                    <!-- Product price-->
                    <?= $descripcion ?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver publicaciones</a></div>
            </div>
        </div>
    </div> 
    <?php
}

function getCategorias($trabajos) {?>
        <option value="" disabled selected hidden>Categoria</option>
    <?php    
    foreach($trabajos as $trabajo) {?>
        <option value="<?= $trabajo['id_categoria_trabajo'] ?>"><?= $trabajo['nombre'] ?></option>
    <?php
    } 
}