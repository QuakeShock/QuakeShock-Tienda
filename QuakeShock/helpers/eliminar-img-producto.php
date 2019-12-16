<?php

if (file_exists('uploads/images/' . $prod->Imagen1)) {
    unlink('uploads/images/' . $prod->Imagen1);
}
if (file_exists('uploads/images/' . $prod->Imagen2)) {
    unlink('uploads/images/' . $prod->Imagen2);
}
if (file_exists('uploads/images/' . $prod->Imagen3)) {
    unlink('uploads/images/' . $prod->Imagen3);
}
if (file_exists('uploads/images/' . $prod->Imagen4)) {
    unlink('uploads/images/' . $prod->Imagen4);
}
if (file_exists('uploads/images/' . $prod->Imagen5)) {
    unlink('uploads/images/' . $prod->Imagen5);
}
if (file_exists('uploads/images/' . $prod->Imagen6)) {
    unlink('uploads/images/' . $prod->Imagen6);
}

