<?php

    function conseguirCategorias($db)
    {
        
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";
        $categorias = mysqli_query($db, $sql);
        $result = array();
        if ($categorias && mysqli_num_rows($categorias) >= 1) {
            $result = $categorias;
        }
        return $result;
    }

    function conseguirCategoria($db, $id){
        $sql = "SELECT * FROM categorias WHERE id = $id;";
        $categorias = mysqli_query($db, $sql);

        $result = array();
        if ($categorias && mysqli_num_rows($categorias) >= 1) {
            $result = mysqli_fetch_assoc($categorias);
        }
        return $result;
    }

    function conseguirProduc($db, $id){
        $sql = "SELECT * FROM productos WHERE id = $id;";
        $produc = mysqli_query($db, $sql);

        $result = array();
        if ($produc && mysqli_num_rows($produc) >= 1) {
            $result = mysqli_fetch_assoc($produc);
        }
        return $result;
    }

    function conseguirBaterias($db, $id){
        $sql = "SELECT p.*, b.voltios,b.amperios,b.potencia,b.numero,b.polaridad,b.rcs,b.medida,b.peso FROM productos p ".
                "INNER JOIN desc_baterias b ON b.id = p.desc_bateria_id ".
                "WHERE p.id = $id";
        $bate = mysqli_query($db, $sql);

        $result = array();
        if ($bate && mysqli_num_rows($bate) >= 1) {
            $result = mysqli_fetch_assoc($bate);
        }
        return $result;
    }



    function conseguirProductos($db, $categoria = null){
        $sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p ".
               "INNER JOIN categorias c ON c.id = p.categoria_id ";

        if (!empty($categoria)) {
            $sql .= "WHERE p.categoria_id = $categoria ";
        }

        $sql .= "ORDER BY p.id DESC";

        $productos = mysqli_query($db, $sql);

        $resultado = array();
        if ($productos && mysqli_num_rows($productos) >= 1) {
            $resultado = $productos;
        }

        return $productos;
    }



    
