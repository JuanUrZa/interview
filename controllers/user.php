<?php


class UserController {

    private $repository;

    public function __construct(Repository $repository) {
        $this->repository = $repository;
    }


    public function showUsers() {
        $users = $this->repository->showUsers();

        include './views/userList.php';
    }
    

}