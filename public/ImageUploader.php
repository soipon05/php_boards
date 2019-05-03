<?php

namespace Myapp;

class ImageUploader {

    public function upload() {
        try {
            // error check
            $this->_validateUpload();
            // type check
            // save
            // create thumbnail
        } catch(\Exception $e) {
            echo $e->getMessage();
            exit;
        }

        // redirect
        header('Location: http://' . $_SERVER['HTTP_HOST']);
        exit;
    }

    private function _validateUpload() {
        
    }
}