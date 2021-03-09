<?php 

class Adminpanel
{
	public static function addAuthor($firstName, $lastName, $shortBiography, $biography)
	{
		$db = Db::getConnection();
		$result = $db->prepare("INSERT INTO authors (id, first_name, last_name, short_biography, biography) VALUES (:id, :first_name, :last_name, :short_biography, :biography)");
		$result->bindParam(':id', $null);
		$result->bindParam(':first_name', $firstName);
		$result->bindParam(':last_name', $lastName);
		$result->bindParam(':short_biography', $shortBiography);
		$result->bindParam(':biography', $biography);
		$result->execute();
		header('Location: /admnpanel/addauthor');
	}

	public static function selectAuthor()
	{
		$db = Db::getConnection();
		
		$select = $db->query("SELECT id, first_name, last_name FROM authors");

		$i = 0;
      	while ($row = $select->fetch() ) {
	        $author[$i]['id'] = $row['id'];
	        $author[$i]['first_name'] = $row['first_name'];
	        $author[$i]['last_name'] = $row['last_name'];
	        $i++;
      	}
      	return $author;
	}

	public static function addWriting($authorID, $title, $fullText)
	{
		$db = Db::getConnection();
		$result = $db->prepare("INSERT INTO writings (writing_id, author_id, title, full_text)
			                           VALUES (:writing_id, :author_id, :title, :full_text)");
		$result->bindParam(':writing_id', $null);
		$result->bindParam(':author_id', $authorID );
		$result->bindParam(':title', $title );
		$result->bindParam(':full_text', $fullText );
		$result->execute();
		header('Location: /admnpanel/addwriting');
	}

	public static function deleteAuthor($method, $text)
	{
		$db = Db::getConnection();

		if ($method == 'byId')
		{
			$result = $db->prepare("DELETE FROM authors WHERE authors.id = :text_id");
			$result->bindParam(':text_id', $text);
			$result->execute();
			header('Location: /admnpanel/');
		}	

		else if ($method == 'byFirstName')
		{
			$result = $db->prepare("DELETE FROM authors WHERE authors.first_name = :text_name");
			$result->bindParam(':text_name', $text);
			$result->execute();
			header('Location: /admnpanel/delete');
		}	
		else if ($method == 'byLastName')
		{
			$result = $db->prepare("DELETE FROM authors WHERE authors.last_name = :text_name");
			$result->bindParam(':text_name', $text);
			$result->execute();
			header('Location: /admnpanel/delete');
		}
	}

	public static function deleteWriting($method, $text)
	{
		$db = Db::getConnection();

		if ($method == 'byId')
		{
			$result = $db->prepare("DELETE FROM writings WHERE writings.writing_id = :text_id");
			$result->bindParam(':text_id', $text);
			$result->execute();
			header('Location: /admnpanel/');
		}
		else if ($method = 'byTitle') 
		{
			$result = $db->prepare("DELETE FROM writings WHERE writings.title = :text_id");
			$result->bindParam(':text_id', $text);
			$result->execute();
			header('Location: /admnpanel/delete');
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

  public static function getAuthorInfoById($id)
  {
  	$id = intval($id);

  	if ($id) 
  	{
	  $db = Db::getConnection();

	  $result = $db->query("SELECT * FROM authors WHERE id=" . $id);

      $authorInfo = $result->fetch(PDO::FETCH_ASSOC);
      return $authorInfo;

  	}
  }

  public static function getWritingListByAuthorId($id)
  {
  	$id = intval($id);

  	if ($id) {
  		$db = Db::getConnection();

  		$result = $db->query("SELECT * FROM writings WHERE writings.author_id=" . $id);
  		

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

  public static function getWritingById($id)
  {
	$id = intval($id);
	if ($id) {
		$db = Db::getConnection();
		$result = $db->query("SELECT * FROM writings WHERE writing_id = " . $id);
		$writing = $result->fetch(PDO::FETCH_ASSOC);
		return $writing;
	}
  }

  public static function updateAuthor($firstName, $last_name, $shortBiography, $biography, $id){
  	$db = Db::getConnection();
  	
  	$result = $db->prepare("UPDATE authors SET first_name=?, last_name=?, short_biography=?, biography=? WHERE id=?");
  	$result->execute([$firstName, $last_name, $shortBiography, $biography, $id]);
  	
  }

  public static function updateWriting($writingId, $authorId, $title, $fullText){
  	$db = Db::getConnection();
  	
  	$result = $db->prepare("UPDATE writings SET author_id=?, title=?, full_text=? WHERE writing_id=?");
  	$result->execute([$authorId, $title, $fullText, $writingId]);
  	
  }





}

?>