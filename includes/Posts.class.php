<?php 

class Posts {

	public  $post_id, $post_category_id, $post_title, $post_author, $post_user,
            $post_date, $post_image, $post_content, $post_tags, 
            $post_comment_count, $post_status, $post_views_count;

    public function find_all_posts() {

    	global $database;

    	$sql = "SELECT * FROM posts";

    	$result = $database->query($sql);

    	$data = [];

    	while($row = mysqli_fetch_assoc($result)) {

    		$this->data[] = $row;

    	}

    	return $data;

    }

}



?>