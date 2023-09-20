<?php

namespace utils;

class FileHandler {
    public static function newFileName($files, $storeDir) { 
        $newFileName = '';
        foreach ($files as $key => $value) {  
            for ($i = 0; $i < count($value['size']); $i++) {
                $maxFileSize = 5* 1024 * 1024;
                if ($value['size'][$i] > $maxFileSize) {
                    json(['error' => 'File is too large. Maximum file size allowed is 5 MB.']);
                }

                $fileExtension = strtolower(pathinfo($value['name'][$i], PATHINFO_EXTENSION));
                if (!in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
                    json(['error' => 'Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed']);
                }

                $newFileName .= "$storeDir/" . uniqid() . ".$fileExtension~";
            }  
        }
        return $newFileName;
    }
} 


// try {
//     $this->put("UPDATE messages SET file = :file, WHERE id = :id", [
//         ':file', $newFileName,
//         ':id', $data['id']
//     ]);
// } catch (\Exception $e) { 
//     json(['error' => $e->getMessage()]);
// }