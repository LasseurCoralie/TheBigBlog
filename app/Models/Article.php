<?php

namespace TheBigBlog\Models;

use TheBigBlog\Utils\Database;
use PDO;

class Article extends CoreModel{

    private $title;
    private $resume;
    private $content;
    private $published_date;
    private $author;
    private $author_id;
    private $category_id;
    private $category;
    
    public function findAll()
    {
        $sql = '
            SELECT `articles`.* , `category`.`name` as category, `author`.`name` as author
            FROM `articles` 
            INNER JOIN category ON category_id = `category`.id 
            INNER JOIN author ON author_id = `author`.id
            ORDER BY `published_date` DESC
        ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $articles = $pdoStatement->fetchAll(PDO::FETCH_CLASS,__CLASS__);

        return $articles;
    }

    public function find($id)
    {
        $sql = '
            SELECT * 
            FROM `articles`
            WHERE `id` = ' . $id
        ;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $article = $pdoStatement->fetchObject(__CLASS__);

        return $article;
    }

    public function findAuthorNameById($id)
    {
        $sql = '
            SELECT `author`.name 
            FROM `author` 
            INNER JOIN `articles`
            ON `author`.id = `article`.author_id
            WHERE `article`.id=' . $id
        ;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $authorNameByID = $pdoStatement->fetchObject(__CLASS__);
        return $authorNameByID;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */ 
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */ 
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get the value of published_date
     */ 
    public function getPublished_date()
    {
        return $this->published_date;
    }

    /**
     * Get the value of author_id
     */ 
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }
    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }
}