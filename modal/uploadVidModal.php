<?php
require "Modal.php";
class uploadVidModal extends Modal
{
    public function getResult($data){
        $modal = new Modal();
        $modal->getData("uploadvideos");
    }
}

?>