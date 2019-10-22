<?php
namespace Magedin\CourseExample\Api\Data;

interface ExampleInterface
{
    const TABLE = 'tabelaTeste';
    const ID = 'id';
    const NAME = 'name';
    const LASTNAME = 'lastname';

    public function getId();
    
    public function setId($id);

    public function getName();

    public function setName($name);
    
    public function getLastname();

    public function setLastname($lastname);

}

?>