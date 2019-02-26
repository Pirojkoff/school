<?php

spl_autoload_register(function ($className) {
    include getClassPath($className) . '.php';
});

function getClassPath(string $className): string
{
    $registeredClasses = [
        'Controller' => 'Controller',
        'ModelAbstract' => 'model/ModelAbstract',
        'Student' => 'model/Student',
        'Family' => 'model/Family',
        'Teacher' => 'model/Teacher',
        'RepositoryAbstract' => 'repository/RepositoryAbstract',
        'StudentRepository' => 'repository/StudentRepository',
        'FamilyRepository' => 'repository/FamilyRepository',
        'TeacherRepository' => 'repository/TeacherRepository'

    ];

    return $registeredClasses[$className];
}
