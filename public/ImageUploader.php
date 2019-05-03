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
        // var_dump($_FILES);
        // exit;

        if (!isset($_FILES['images']) || !isset($_FILES['image']['errors'])) {
            throw new \Exception('Upload Error!');
        }

        switch ($_FILES['image']['error']) {
            case 'UPLOAD_ERR_OK':
                return true;
            case UPLOAD_ERR_INT_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new \Exception('File too large!');
            default:
                throw new \Exception("Err: " . $_FILES['image']['error']);
        }
    }
}