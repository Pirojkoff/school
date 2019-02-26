<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.05.17
 * Time: 21:46
 */
class FamilyRepository extends RepositoryAbstract
{
    protected $entityName = 'family';

    /**
     * @return Family[] array
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->entityName}");
        $stmt->execute();
        $families = [];
        foreach ($stmt as $row) {
            $families[] = new Family($row['firstname'], $row['lastname'], $row['address'], $row['id']);
        }
        return $families;
    }

    /**
     * @param $id
     * @return null|Family
     */
    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->entityName} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        foreach ($stmt as $row) {
            return new Family($row['firstname'], $row['lastname'], $row['address'], $row['id']);
        }
        return null;
    }
}
