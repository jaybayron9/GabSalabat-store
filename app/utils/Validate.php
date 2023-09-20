<?php 

namespace utils;

class Validate { 
    public static function is_all_letters($value):bool {
        return preg_match('/^[a-zA-Z]+$/', $value) ? false : true; 
    }

    public static function is_all_capitalized($value): bool {
        return $value === strtoupper($value) && !preg_match('/[0-9\W]/', $value) ? false : true; 
    } 

    public static function is_all_lowercase($value): bool {
        return $value === strtolower($value) && !preg_match('/[0-9\W]/', $value) ? false : true;
    } 

    public static function is_all_numbers($value):bool {
        return is_numeric($value) ? false : true; 
    }

    public static function is_whole_number($value): bool {
        return ctype_digit($value) ? false : true; 
    }

    public static function is_negative_number($value): bool {
        return (int)$value < 0 ? false : true; 
    }

    public static function is_decimal_number($value): bool {
        return is_numeric($value) && strpos($value, '.') !== false ? false : true; 
    }

    public static function has_small_letters($value): bool {
        return preg_match('/[a-z]/', $value) ? false : true; 
    }

    public static function has_big_letters($value): bool {
        return preg_match('/[A-Z]/', $value) ? false : true; 
    }

    public static function has_numbers($value): bool {
        return preg_match('/\d/', $value) ? false : true; 
    }

    public static function has_special_characters($value): bool {
        return preg_match('/[^a-zA-Z0-9\s]/', $value) ? false : true; 
    }

    public static function has_min_lenght($value, $lenght = 7): bool {
        return strlen($value) > $lenght ? false : true; 
    }

    public static function is_valid_email($value): bool {
        return filter_var($value, FILTER_VALIDATE_EMAIL) ? false : true; 
    }

    public static function is_words_capitalize($value): bool { 
        foreach (explode(" ", $value) as $word) {
            $result = $word == ucfirst($word) ? false : true; 
        }  
        return $result;
    } 

    public static function is_future_date($value, $futureDays = 0): bool {  
        return $value > date("Y-m-d", strtotime("+" . $futureDays . " days")) ? false : true;
    } 

    public static function is_past_date($value, $pastDays = 0): bool {
        return $value < date("Y-m-d", strtotime("-" . $pastDays . " days")) ? false : true;
    } 

    public static function is_contact_number($value, $country = '09'):bool {  
        return preg_match("/^($country|\+639)\d{9}$/", preg_replace('/\D/', '', $value)) ? false : true;
    }

    public static function check_empty($d = []):bool {
        foreach ($d as $k => $v) {
            $v = trim($v);

            if (empty($v) && ($k == 'remember' || $k !== 'remember')) {
                return true;
            }
        }
        return false;
    } 

    public static function input_empty($value) {
        return empty(trim($value));
    }

    public static function is_image($image):bool { 
        if (!empty($image) && $image['error'] === UPLOAD_ERR_OK) {  
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileExtension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
            return in_array($fileExtension, $allowedExtensions) ? false : true; 
        }  
        return true;
    }  

    public static function is_document($document):bool {
        if (!empty($document) && $document['error'] === UPLOAD_ERR_OK) {
            $allowedExtensions = ['pdf', 'doc', 'docx', 'txt'];
            $fileExtension = strtolower(pathinfo($document['name'], PATHINFO_EXTENSION));
            return in_array($fileExtension, $allowedExtensions) ? false : true;
        }
        return true;
    } 
}