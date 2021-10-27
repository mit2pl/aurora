<?php

namespace class;

class smart {

    public $smart;

    public function __construct() {
        $this->smart = new \Smarty();
        $this->smart->cache_lifetime = 120;
        $this->smart->template_dir = "template/";
        $this->smart->compile_dir = "cache";
    }


}