<?php
class Post
{

  public function get_all()
  {
    global $pdo;

    $mysql = "SELECT * FROM posts";
    $query = $pdo->prepare($mysql);
    $query->execute();

    return $query->fetchAll();
  }

  public function individual_post($id)
  {
    global $pdo;

    $mysql = 'SELECT * FROM posts WHERE id=?';
    $query = $pdo->prepare($mysql);
    $query->bindValue(1,$id);
    $query->execute();

    return $query->fetch();
  }
}

//info for all db

// comments = id,post_id,comment(255),created_at
// posts = id,category(255),title(255),body(text),created_at
// users = id,name,admin(dafault false),password,created_at
// reposrt = id,post_id,report(255),created_at

?>
