<?php

class Pages extends Controller {

    public function __construct() {

    }

    public function index() {
        $data = [
            'title' => 'Homepage',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ];
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About',
            'description' => 'About us'
        ];
        $this->view('pages/about', $data);
    }
}