<?php

require_once 'DB.php';

class DB_OST
{
    static function getOSTs()
    {
        $DB = DB::getDB();
        $ostJSON = '';
        try {
            $stmt = $DB->prepare('SELECT id, name, gameName, releaseYear FROM OSTS');
            if ($stmt->execute()) {
                $ostJSON = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $ostJSON;
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }
}