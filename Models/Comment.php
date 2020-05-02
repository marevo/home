<?php


class Comment
{
    public $id;
    public $name;
    public $comment;
    public $deleted;


    public function AddComment()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $dbh = new PDO($dsn,'root','');
        $statement = 'INSERT 
                      INTO comment (name,comment)
                      VALUES (:name,:comment) ';
        $sth = $dbh->prepare($statement);
        return  $sth->execute(['name'=>$this->name, 'comment'=>$this->comment]);
    }

    public function EditComment()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $dbh = new PDO($dsn, 'root', '');
        $statement = 'UPDATE  comment SET `name`=:yourName, comment=:yourComment 
                      WHERE id=:id';

        $sth = $dbh->prepare($statement);
        return $sth->execute( [':id' => $this->id, ':yourName' => $this->name, ':yourComment' => $this->comment]);

    }



    public static function GetComment( $id){

        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $dbh = new PDO($dsn, 'root', '');
        $statement = 'SELECT *
                      FROM comment 
                      WHERE id=:id';

        $sth = $dbh->prepare($statement);
        $sth->execute( [':id' => $id]);
        return  $sth->fetchAll()[0];

    }

    public static function DeleteComment($id){
        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $dbh = new PDO($dsn, 'root', '');
        $statement = 'DELETE FROM comment
                      WHERE id=:id';

        $sth = $dbh->prepare($statement);
        return $sth->execute( [':id' => $id]);
    }

    public static function GetAllComments(){
        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $dbh = new PDO($dsn, 'root', '');
        $statement = 'SELECT * 
                      FROM comment';

        $sth = $dbh->prepare($statement);
        $sth->execute();
        return  $sth->fetchAll();
    }
}