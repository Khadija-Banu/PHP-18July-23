<?php

namespace PhpOopCrud;
use PDO;
use PhpOopCrud\DB;

class Teacher extends DB{

    public function index(){
        $sql = "select * from teachers";
        $statement = $this->pdo->query($sql);
        $teachers = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $teachers;
        // var_dump($teachers);
    }


    public function store($data){
        $name=$data['name'];
        $email=$data['email'];
        $address=$data['address'];
        $position=$data['position'];
        $password=$data['password'];

        $sql="insert into teachers(name,email,address,position,password) values('$name','$email','$address','$position','$password')";
        $st=$this->pdo->prepare($sql);
        $st->execute();
        header('Location:Teacher-list.php');

var_dump ($data);
    }

    public function edit($id){
      
        $sql = "select * from teachers where id=$id";
        $statement = $this->pdo->query($sql);
        $student = $statement->fetch(PDO::FETCH_ASSOC);
        return $student;

    }
    public function update($data){
        $id=$data['id'];
        $name=$data['name'];
        $email=$data['email'];
        $address=$data['address'];
        $position=$data['position'];
        $password=$data['password'];
        
        $sql="update teachers set name='$name', email='$email',address='$address',
        position='$position',password='$password' where id=$id";
        $st=$this->pdo->prepare($sql);
        $st->execute();
        header('Location:Teacher-list.php');
    }

    public function delete($id){
        
        $sql="delete from teachers where id=$id";
        $query=$this->pdo->query($sql);
        $query->execute();
        header('Location:Teacher-list.php');
    }
}

?>