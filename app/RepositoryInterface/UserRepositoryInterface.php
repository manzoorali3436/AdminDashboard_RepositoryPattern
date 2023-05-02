<?php
namespace App\RepositoryInterface;

interface UserRepositoryInterface{
    public function all();
    public function findById($id);
    public function Update($id, array $data);
}
