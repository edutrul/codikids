<?php
class SelectEmail extends DbConn
{
    public function emailPull($uid)
    {
        try {
            $db = new DbConn;
            $tbl_users = $db->tbl_users;

            $stmt = $db->conn->prepare("SELECT email, username FROM ".$tbl_users." WHERE uid = :myid");
            $stmt->bindParam(':myid', $uid);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            $result = "Error: " . $e->getMessage();

        }

        //Queries database with prepared statement
        return $result;

    }
}
