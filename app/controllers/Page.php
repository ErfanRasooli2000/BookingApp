<?php

class Page extends Controller
{
    public function index($data = [])
    {
        $this->view('home');
    }

    public function about($data = [])
    {
        $this->view('about');
    }
}

?>