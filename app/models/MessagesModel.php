<?php

namespace Model;
use SQL\QueryBuilder;

class Messages extends QueryBuilder {
    protected $columns = [
        'id', 'from_user_id', 'to_user_id', 'message', 'file', 'created_at', 'updated_at'
    ];

    public function show($data = []) {
        try {
            $columns = implode(', ', $this->columns);
            return $this->get("SELECT {$columns} from messages WHERE (from_user_id = :from_user AND to_user_id = :to_user) OR (to_user_id = :to_user1 AND from_user_id = :from_user1)", [
                ':from_user' => $data[0],
                ':to_user' => $data[1],
                ':from_user1' => $data[1],
                ':to_user1' => $data[0]
            ]);
        } catch (\Exception $e) {
            json(['error' => $e->getMessage()]);
        }
    }

    public function insert($data = []) {
        try { 
            $insertMessage = $this->put("INSERT INTO messages (from_user_id, to_user_id, message, file) VALUES (:from_user, :to_user, :message, :file)", [
                ':from_user' => $data['from'],
                ':to_user' => $data['to'],
                ':message' => $data['message'],
                ':file' => $data[0]['file'] ?? ''
            ]); 
            return $insertMessage ? true : false;
        } catch (\Exception $e) {
            json(['error' => $e->getMessage()]);
        }
    }  

    public function lastMessage($data = []) {
        try { 
            $columns = implode(', ', $this->columns);
            return $this->get("SELECT {$columns} FROM messages WHERE (from_user_id = :from_user AND to_user_id = :to_user) OR (from_user_id = :to_user1 AND  to_user_id = :from_user1) ORDER BY created_at DESC LIMIT 1", [
                ':from_user' => $data['from'],
                ':to_user' => $data['to'],
                ':to_user1' => $data['to'],
                ':from_user1' => $data['from'],
            ]);
        } catch (\Exception $e) {
            json(['error' => $e->getMessage()]);
        }
    }

    public function user_last_message($data = []) {
        try {
            $columns = implode(', ', $this->columns);
            return $this->get("SELECT {$columns} FROM messages WHERE to_user_id = :from and from_user_id = :to ORDER BY created_at DESC LIMIT 1", [
                ':from' => $data['from'],
                ':to' => $data['to']
            ]);
        } catch (\Exception $e) {
            json(['error' => $e->getMessage()]);
        }
    }
}