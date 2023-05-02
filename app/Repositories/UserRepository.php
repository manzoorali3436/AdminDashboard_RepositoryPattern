<?php
namespace App\Repositories;

use App\Models\User;
use App\RepositoryInterface\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface{
    public function all(){
        return User::all();
    }

    public function findById($id){
        return User::find($id);
    }

    public function Update($id, array $data){
        return User::where($id)->update($data);
    }
}
