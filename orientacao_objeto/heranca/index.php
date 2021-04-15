<?php
class Post
{
    private int $id;
    private int $likes = 0;

    public function getId()
    {
        return $this->id;
    }

    public function setId($i)
    {
        $this->id = $i;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($lik)
    {
        $this->likes = $lik;
    }
}

class Foto extends Post
{
    private $url;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

$foto = new Foto(20); //Colocando o id no construtor
$foto->setLikes(12); //Setando o like para ser 12

echo "FOTO: " . $foto->getId() . " - " . $foto->getLikes() . " likes";
