<?php

class Home extends controller {

  public function index($title = ''){
    $post = $this->model('post');
    $post->title = "Php is the best";

    $this->view('home', ['title'=>$post->title]);
  }

  public function register(){
    echo "register function";
  }
}
