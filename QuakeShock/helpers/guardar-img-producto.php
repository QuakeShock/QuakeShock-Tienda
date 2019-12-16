<?php
if ($_FILES['img5'] != null) {
    $archivo5 = $_FILES['img5'];
    $nombre_archivo5 = $archivo5['name'];
    $tipo_archivo5 = $archivo5['type'];

    if ($tipo_archivo5 == "image/jpg" || $tipo_archivo5 == "image/jpeg" || $tipo_archivo5 == "image/png") {
        if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true);
        }
        move_uploaded_file($archivo5['tmp_name'], 'uploads/images/' . $nombre_archivo5);
        $producto->setImagen5($nombre_archivo5);
    } else {
        $_SESSION['resultado_crear_producto'] = "fallo_tipo_archivo";
    }
}
if ($_FILES['img1'] != null) {
    $archivo1 = $_FILES['img1'];
    $nombre_archivo1 = $archivo1['name'];
    $tipo_archivo1 = $archivo1['type'];

    if ($tipo_archivo1 == "image/jpg" || $tipo_archivo1 == "image/jpeg" || $tipo_archivo1 == "image/png") {
        if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true);
        }
        move_uploaded_file($archivo1['tmp_name'], 'uploads/images/' . $nombre_archivo1);
        $producto->setImagen1($nombre_archivo1);
    } else {
        $_SESSION['resultado_crear_producto'] = "fallo_tipo_archivo";
    }
}
if ($_FILES['img2'] != null) {
    $archivo2 = $_FILES['img2'];
    $nombre_archivo2 = $archivo2['name'];
    $tipo_archivo2 = $archivo2['type'];

    if ($tipo_archivo2 == "image/jpg" || $tipo_archivo2 == "image/jpeg" || $tipo_archivo2 == "image/png") {
        if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true);
        }

        move_uploaded_file($archivo2['tmp_name'], 'uploads/images/' . $nombre_archivo2);
        $producto->setImagen2($nombre_archivo2);
    } else {
        $_SESSION['resultado_crear_producto'] = "fallo_tipo_archivo";
    }
}
if ($_FILES['img3'] != null) {
    $archivo3 = $_FILES['img3'];
    $nombre_archivo3 = $archivo3['name'];
    $tipo_archivo3 = $archivo3['type'];

    if ($tipo_archivo3 == "image/jpg" || $tipo_archivo3 == "image/jpeg" || $tipo_archivo3 == "image/png") {
        if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true);
        }

        move_uploaded_file($archivo3['tmp_name'], 'uploads/images/' . $nombre_archivo3);
        $producto->setImagen3($nombre_archivo3);
    } else {
        $_SESSION['resultado_crear_producto'] = "fallo_tipo_archivo";
    }
}
if ($_FILES['img4'] != null) {
    $archivo4 = $_FILES['img4'];
    $nombre_archivo4 = $archivo4['name'];
    $tipo_archivo4 = $archivo4['type'];

    if ($tipo_archivo4 == "image/jpg" || $tipo_archivo4 == "image/jpeg" || $tipo_archivo4 == "image/png") {
        if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true);
        }

        move_uploaded_file($archivo4['tmp_name'], 'uploads/images/' . $nombre_archivo4);
        $producto->setImagen4($nombre_archivo4);
    } else {
        $_SESSION['resultado_crear_producto'] = "fallo_tipo_archivo";
    }
}

if ($_FILES['img6'] != null) {
    $archivo6 = $_FILES['img6'];
    $nombre_archivo6 = $archivo6['name'];
    $tipo_archivo6 = $archivo6['type'];

    if ($tipo_archivo6 == "image/jpg" || $tipo_archivo6 == "image/jpeg" || $tipo_archivo6 == "image/png") {
        if (!is_dir('uploads/images')) {
            mkdir('uploads/images', 0777, true);
        }

        move_uploaded_file($archivo6['tmp_name'], 'uploads/images/' . $nombre_archivo6);
        $producto->setImagen6($nombre_archivo6);
    } else {
        $_SESSION['resultado_crear_producto'] = "fallo_tipo_archivo";
    }
}