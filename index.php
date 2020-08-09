<?php

require_once('function.php');


class Task
{
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task("Play fifa"),
    new Task("Code laravel"),
    new Task("Code syntax"),
];

// $tasks[0]->complete();
// $task->complete();

// var_dump($tasks);
dumper($tasks);

require 'index.view.php';
