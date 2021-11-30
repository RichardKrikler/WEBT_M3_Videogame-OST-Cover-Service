<?php

require_once 'DB.php';

class DB_Track
{
    static function insertTrack()
    {
        $DB = DB::getDB();
        $ostJSON = '';
        try {
            $stmt = $DB->prepare('SELECT id, name, gameName, releaseYear FROM OSTS');
            $stmt->execute();
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $ostJSON;
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }
}