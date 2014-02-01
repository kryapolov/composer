<?php
/**
 * User: krapolov
 * Date: 02.02.14
 * Time: 2:24
 */

namespace Composer;

Class Example {

    private $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }
}
