<?php
class File {
    public static function upload($input_name){
        $img_name = '';
        if(!empty($_FILES[$input_name]['name'])){
            $img_name = $_FILES[$input_name]['name'];
            $tmp_name = $_FILES[$input_name]['name'];
            move_uploaded_file($tmp_name, UPLOAD_PATH.'/'.$img_name);
        }
        return $img_name;
    }
        
}