<?php 

class Writings
{
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

}

?>