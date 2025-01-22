<?php

namespace  Ruben\Examen6\Models;

use  Ruben\Examen6\CompanyImplement;

class Product
{

  private int $id;
  private string $name;
  private string $price;
  private string $product;

  public function __construct(int $id, string $name, string $price, string $product)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getProduct()
  {
    return $this->product;
  }

  // public function users() {
  //   $userDAO = new UserImplement();
  //   return $userDAO->findUsersByGroupId($this->id);
  // }
}