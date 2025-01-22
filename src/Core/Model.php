<?php

namespace Ruben\Examen6\Core;

use PDO;

class Model
{
    protected static $table;

    public static function query($sql, $params = [])
    {
        // Conexión a la base de datos
        $pdo = new PDO('mysql:host=localhost;dbname=examen6db', 'root', '');
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
