<?php

require_once 'DB.php';
require_once 'OST.php';
require_once 'DB_OST.php';
require_once 'DB_Track.php';
require_once 'Track.php';

class DB_OST
{
    static function getOST(int $id)
    {
        $DB = DB::getDB();
        $ost = [];
        try {
            $stmt = $DB->prepare('SELECT id, name, gameName, releaseYear FROM OST WHERE id = :id');
            $stmt->bindParam(":id", $id);

            if ($stmt->execute()) {
                $row = $stmt->fetch();
                $ost = new OST($row['id'], $row['name'], $row['gameName'], $row['releaseYear'], DB_Track::getTracks($row['id']));
            }

            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $ost;
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }

    static function getOSTs(): array
    {
        $DB = DB::getDB();
        $ost = [];
        try {
            $stmt = $DB->prepare('SELECT id, name, gameName, releaseYear FROM OST');

            if ($stmt->execute()) {
                while ($row = $stmt->fetch()) {
                    $ost[] = new OST($row['id'], $row['name'], $row['gameName'], $row['releaseYear'], DB_Track::getTracks($row['id']));
                }
            }

            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $ost;
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }

    static function insertOST(int $id, string $name, string $gameName, int $releaseYear)
    {
        $DB = DB::getDB();
        try {
            $stmt = $DB->prepare('INSERT INTO OST (id, name, gameName, releaseYear) VALUES (:id, :name, :gameName, :releaseYear)');
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":gameName", $gameName);
            $stmt->bindParam(":releaseYear", $releaseYear);

            $stmt->execute();
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }
}