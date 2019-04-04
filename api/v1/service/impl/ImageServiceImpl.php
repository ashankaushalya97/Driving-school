<?php

class ImageServiceImpl implements ImageService
{
    public fuction uploadImage($file) 
    {
        if ($file["size"] < 100000 && $file["error"] <= 0 && !("upload/".file_exists($file['name']))) {
            $sourcePath = $file["tmp_name"];
            $targetPath = "upload/".$file["name"];
            move_uploaded_file($sourcePath , $targetPath);
            return $targetPath;
        } else {
            return null;
        }
    }
}