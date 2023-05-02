<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $repository = null;

    public function __construct(UserRepository $repositories){
        $this->repository = $repositories;
    }

    public function users(){
        $getAllUsers = $this->repository->all();
        return view('admin.pages.user.users', compact('getAllUsers'));
    }

    public function show($id){
        $findUser = $this->repository->findById($id);
    }

    public function update($id, Request $request){
        $updateUser = $this->repository->Update($id, $request->all());
    }
}
