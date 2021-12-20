<?php

require_once 'DB.php';
require_once 'DB_Track.php';

class DB_Track
{
    static function getTracks(int $ostId): array
    {
        $DB = DB::getDB();
        $TrackAr = [];
        try {
            $stmt = $DB->prepare('SELECT id, name, artist, trackNumber, duration FROM Track WHERE fk_pk_ost_id = :ostId');
            $stmt->bindParam(":ostId", $ostId);

            if ($stmt->execute()) {
                $row = $stmt->fetch();
                $TrackAr[] = new Track($row['id'], $row['name'], $row['artist'], $row['trackNumber'], $row['duration']);
            }
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $TrackAr;
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }

    static function insertTrack(int $id, string $name, string $artist, int $trackNumber, float $duration, int $ostId)
    {
        $DB = DB::getDB();
        try {
            $stmt = $DB->prepare('INSERT INTO Track (id, name, artist, trackNumber, duration, fk_pk_ost_id) VALUES (:id, :name, :artist, :trackNumber, :duration, :ostId)');
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":artist", $artist);
            $stmt->bindParam(":trackNumber", $trackNumber);
            $stmt->bindParam(":duration", $duration);
            $stmt->bindParam(":ostId", $ostId);

            $stmt->execute();
            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            print('Error: ' . $e);
            exit();
        }
    }
}