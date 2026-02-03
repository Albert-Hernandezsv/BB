<?php
require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

$q = isset($_POST["q"]) ? trim($_POST["q"]) : "";

if ($q === "" || strlen($q) < 1) {
  echo json_encode([]);
  exit;
}

// Limita cantidad para que sea rápido
$productos = ModeloProductos::mdlBuscarProductosPorNombreOCodigo($q, 15);

echo json_encode($productos);
