<?php

namespace  Ruben\Examen6\Dao;

use  Ruben\Examen6\Database\Database;
use  Ruben\Examen6\Models\Companies;

use PDO;

class EmployeeImplement
{
  private Database $db;

  public function __construct()
  {
    $this->db = new Database();
  }
  public function findAll(): array
  {
    $query = 'SELECT * FROM `companies`';
    $stmt = $this->db->getConnection()->prepare($query);
    $stmt->execute();

    $employees = [];
    while ($employeeRecord = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $employee = new Companies(
        $employeeRecord['id'],
        $employeeRecord['name'],
        $employeeRecord['contact_info'],
      );
      $employees[] = $employee;
    }
    return $employees;
  }
  // public function findById(int $id): User | null
  // {
  //   $query = "SELECT * FROM users WHERE id = :id";
  //   $stmt = $this->db->getConnection()->prepare($query);
  //   $stmt->bindParam(':id', $id);
  //   $stmt->execute();
  //   $userRecord = $stmt->fetch(PDO::FETCH_ASSOC);
  //   if ($userRecord == null) {
  //     return null;
  //   } else {
  //     return new User(
  //       $userRecord['id'],
  //       $userRecord['name'],
  //       $userRecord['surname'],
  //       $userRecord['email']
  //     );
  //   }
  // }

  // public function create(string $name, string $surname, string $email)
  // {
  //   $query = "INSERT INTO users (name, surname, email) VALUES (:name, :surname, :email)";
  //   $stmt = $this->db->getConnection()->prepare($query);
  //   $stmt->bindParam(':name', $name);
  //   $stmt->bindParam(':surname', $surname);
  //   $stmt->bindParam(':email', $email);
  //   $stmt->execute();
  // }

  // public function delete(int $id)
  // {
  //   $query = "DELETE FROM users WHERE id = :id";
  //   $stmt = $this->db->getConnection()->prepare($query);
  //   $stmt->bindParam(':id', $id);
  //   $stmt->execute();
  // }

  // public function update(int $id, string $name, string $surname, string $email)
  // {
  //   $query = "UPDATE users SET name=:name, surname=:surname, email=:email WHERE id = :id";
  //   $stmt = $this->db->getConnection()->prepare($query);
  //   $stmt->bindParam(':id', $id);
  //   $stmt->bindParam(':name', $name);
  //   $stmt->bindParam(':surname', $surname);
  //   $stmt->bindParam(':email', $email);
  //   $stmt->execute();
  // }

  // public function findUsersByGroupId(int $id)
  // {
  //   $query = 'SELECT id, name, surname, email FROM users INNER JOIN group_user ON users.id = group_user.id_user WHERE group_user.id_group = :id_group';
  //   $stmt = $this->db->getConnection()->prepare($query);
  //   $stmt->bindParam(':id_group', $id);
  //   $stmt->execute();
  //   $users = [];
  //   while ($userRecord = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //     $user = new User(
  //       $userRecord['id'],
  //       $userRecord['name'],
  //       $userRecord['surname'],
  //       $userRecord['email']
  //     );
  //     $users[] = $user;
  //   }
  //   return $users;
  // }
}