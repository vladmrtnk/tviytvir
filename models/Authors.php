<?php

class Authors
{

  public static function getAuthorNameById($id)
  {
    $id = intval($id);

    if ($id) {
      
      $db = Db::getConnection();

      $result = $db->query("SELECT first_name, last_name, biography FROM authors WHERE id=" . $id);

      $authorName = $result->fetch(PDO::FETCH_ASSOC);
      return $authorName;
    }
  }


  public static function getAuthorsById($id)
  {
    $id = intval($id);

    if ($id) {
      $db = Db::getConnection();

      $result = $db->query("SELECT * FROM writings WHERE author_id=" . $id);

      $i = 0;
      while ($row = $result->fetch() ) {
        $writingList[$i]['writing_id'] = $row['writing_id'];
        $writingList[$i]['author_id'] = $row['author_id'];
        $writingList[$i]['title'] = $row['title'];
        $writingList[$i]['full_text'] = $row['full_text'];
        $i++;
      }

      return $writingList;
    }
    
  }

  public static function getAuthorsList()
  {
    $db = Db::getConnection();

    $authorList = array();

    $result = $db->query("SELECT * FROM authors");

    $i = 0;
    while ($row = $result->fetch() ) {
      $authorList[$i]['id'] = $row['id'];
      $authorList[$i]['first_name'] = $row['first_name'];
      $authorList[$i]['last_name'] = $row['last_name'];
      $authorList[$i]['short_biography'] = $row['short_biography'];
      $i++;
    }

    return $authorList;
  }



}
