<?php

/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 05.06.2017
 * Time: 20:06
 */
require_once('../autoloader.php');

class TeacherRepository extends RepositoryAbstract
{

    public function __construct()
    {
        parent::__construct();
        $this->entityName = 'teacher';
    }

    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->entityName} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        foreach ($stmt as $row) {
            return new Teacher($row['firstname'], $row['lastname'], $row['lesson'], $row['class'], $row['id']);
        }
        return null;
    }


    public function findAll(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->entityName}");
        $stmt->execute();
        $teacher = [];
        foreach ($stmt as $row) {
            $teacher[] = new Teacher($row['firstname'], $row['lastname'], $row['lesson'], $row['class'], $row['id']);
        }
        return $teacher;
    }

    public function save(Teacher $teacher)
    {
        $stmt = $this->pdo->prepare("INSERT INTO {$this->entityName} (firstname, lastname, lesson, class) VALUES(:firstName, :lastName, :lesson, :class)");
        $stmt->execute([
            'firstName' => $teacher->firstName,
            'lastName' => $teacher->lastName,
            'lesson' => $teacher->lesson,
            'class' => $teacher->class
        ]);
    }

    public function update(Teacher $teacher)
    {
        $stmt = $this->pdo->prepare("UPDATE {$this->entityName} SET firstname = :firstName, lastname = :lastName, lesson =:lesson, class = :class WHERE id = :id");
        $stmt->execute([
            'id' => $teacher->id,
            'firstName' => $teacher->firstName,
            'lastName' => $teacher->lastName,
            'lesson' => $teacher->lesson,
            'class' => $teacher->class
        ]);
    }


    public function delete(int $id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->entityName} WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public function deleteAll()
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->entityName}");
        $stmt->execute();
    }
}