<?php
class Errors extends Controller //este controlador siver para mostrar los errores que tiene
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView('errors', "index"); //muestra errores
    }
}