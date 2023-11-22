<?php

class Controllers
{
    protected $views;
    protected $model;

    public function __construct()
    {
        $this->views = new Views();
        $this->loadModel();
    }

    public function loadModel()
    {
        $modelClassName = $this->getModelClassName();
        $modelFilePath = "Models/" . $modelClassName . ".php";

        if (file_exists($modelFilePath)) {
            require_once($modelFilePath);
            $this->model = new $modelClassName();
        }
    }

    protected function getModelClassName()
    {
        return get_class($this) . "Model";
    }
}
