<?php

function chequear_login($sesion){
  if ($sesion==null) {
    return false;
  }
  else{
    return true;
  }
}
?>
