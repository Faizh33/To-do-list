<?php 

class TaskUser 
{
    private int $id;
    private string $taskText;
    private string $person;
    private string $priority;
    private $taskDate;

    public function insertTask()
    {
        return '
        <tr>
        <td>'.$this->taskText.'</td>
        <td>'.$this->person.'</td>
        <td>'.$this->priority.'</td>
        <td>'.$this->taskDate.'</td>
        </tr>
        ';
    }
}