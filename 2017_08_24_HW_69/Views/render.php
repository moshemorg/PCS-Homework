<?php

abstract class render {

    public function render() {
        include 'top.php';
        $this->renderPage();
        include 'bottom.php';
    }

}


?>