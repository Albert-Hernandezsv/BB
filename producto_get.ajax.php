<?php
require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

$id = isset($_POST["idProducto"]) ? (int)$_POST["idProducto"] : 0;

if ($id <= 0) {
  echo json_encode(null);
  exit;
}

$producto = ModeloProductos::mdlTraerProductoDetalle($id);

echo json_encode($producto);
