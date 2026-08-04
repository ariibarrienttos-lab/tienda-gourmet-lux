<?php
// Archivo: gestionar_carrito.php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = intval($_POST['usuario_id']);
    
    // Operación para agregar al carrito
    if (isset($_POST['agregar'])) {
        $producto_id = intval($_POST['producto_id']);
        $cantidad = intval($_POST['cantidad']);
        
        // Asignación de precios para el cálculo automático
        $precio_unitario = ($producto_id == 1) ? 12000 : 18000; 
        $monto_total = $cantidad * $precio_unitario;
        
        $query = "INSERT INTO CARRITO (usuario_id, producto_id, cantidad, monto_total) 
                  VALUES ('$usuario_id', '$producto_id', '$cantidad', '$monto_total')";
                  
        if ($conexion->query($query) === TRUE) {
            echo "Pedido registrado. El monto total a pagar es de $" . $monto_total;
        } else {
            echo "Error de sistema: " . $conexion->error;
        }
    }
    
    // Operación para eliminar registro del carrito
    if (isset($_POST['eliminar'])) {
        $query_del = "DELETE FROM CARRITO WHERE usuario_id = '$usuario_id'";
        if ($conexion->query($query_del) === TRUE) {
            echo "El carrito se ha vaciado correctamente por cancelación de compra.";
        }
    }
}
?>




