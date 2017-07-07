<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 06.07.17
 * Time: 14:00
 */
include "IGbookDB.class.php";
class GbookDB implements IGbookDB{
    const DB_NAME = "gbook.db";
    private $_db;

    public function __construct(){
        try{
            if (!file_exists(self::DB_NAME)) {
                $this->_db = new SQLiteDatabase(self::DB_NAME);
                $sql = "CREATE TABLE msgs(
                            id INTEGER PRIMARY KEY,
                            name TEXT,
                            email TEXT,
                            msg TEXT,
                            datetime INTEGER,
                            ip TEXT)";
                $result = $this->_db->query($sql);
                if (!$result)
                    throw new SQLiteException(sqlite_error_string($this->_db->lastError()));
            }else{
                $this->_db = new SQLiteDatabase(self::DB_NAME);
            }
        }catch(SQLiteException $e){
            exit("<h1>Всё плохо!</h1>");
        }
    }
    public function __destruct(){
        $this->_db = NULL;
    }
    function clearData($data){
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = trim($data);
        $data = sqlite_escape_string ($data);
        return $data;
    }
    public function savePost($name, $email, $msg){
        try{
            $dt = time();
            $ip = $_SERVER["REMOTE_ADDR"];
            $sql = "INSERT INTO msgs(
                            name,
                            email,
                            msg,
                            datetime,
                            ip
                            ) VALUES(
                            '$name',
                            '$email',
                            '$msg',
                             $dt,
                            '$ip')";
            $result = $this->_db->query($sql);
            if (!$result)
                throw new SQLiteException(sqlite_error_string($this->_db->lastError()));
            return true;
        }catch(SQLiteException $e){
            return false;
        }
    }
    public function getAll(){
        try{
            $sql = "SELECT * FROM msgs ORDER BY id DESC";
            $result = $this->_db->arrayQuery($sql, SQLITE_ASSOC);
            if (!is_array($result))
                throw new SQLiteException(sqlite_error_string($this->_db->lastError()));
            return $result;
        }catch(SQLiteException $e){
            return false;
        }
    }
    public function deletePost($id){
        try{
            $sql = "DELETE FROM msgs WHERE id = $id";
            $result = $this->_db->query($sql);
            if (!$result)
                throw new SQLiteException(sqlite_error_string($this->_db->lastError()));
            return true;
        }catch(SQLiteException $e){
            return false;
        }
    }
}
?>