<?php

namespace Ruben\Examen6\Model;

use Ruben\Examen6\Core\Database;

class Empresa {
    public static function all() {
        $db = new Database();
        return $db->query("SELECT * FROM companies");
    }

    public static function create($data) {
        $db = new Database();
        $db->query("INSERT INTO companies (name, contact_info) VALUES (?, ?)", [$data['name'], $data['contact_info']]);
    }

    public static function find($id) {
        $db = new Database();
        return $db->query("SELECT * FROM companies WHERE id = ?", [$id]);
    }

    public static function update($id, $data) {
        $db = new Database();
        $db->query("UPDATE companies SET name = ?, contact_info = ? WHERE id = ?", [$data['name'], $data['contact_info'], $id]);
    }

    public static function delete($id) {
        $db = new Database();
        $db->query("DELETE FROM companies WHERE id = ?", [$id]);
    }
}
