<?php 

Class post{

    public $title = "";
    public $excerpt = "";
    public $content = "";
    public $published_on = "";
    private $pid = "";
    

    function filter($string){
        return filter_input(INPUT_POST, $string, FILTER_SANITIZE_STRING);
    }

    function strip($string){
        return strip_tags($string, '<img><p><br>');
    }

    function insert(){
        global $blog_db;
        $title = $blog_db->real_escape_string($this->title);
        $excerpt = $blog_db->real_escape_string($this->excerpt);
        $content = $blog_db->real_escape_string($this->content);

        $published_on = date('Y-m-d H:i:s');
        $query = 
        "INSERT INTO posts (`title`, `excerpt`, `content`, `published_on`) 
        VALUES ('$title','$excerpt','$content','$published_on')";
        $blog_db->query($query);
        redirect_to('admin/index.php?action=manage-posts&success=true');
    }

    function get(){
        global $blog_db;
        $pid = intval($_GET['pid']);
        $post = $blog_db->query
            ("SELECT * FROM posts WHERE pid=$pid");
        return $blog_db->fetch($post);
    }

    function get_all_posts(){
        global $blog_db;
        $result = $blog_db->query("SELECT * FROM posts");
        return $blog_db->fetch_all($result);
    }    
    

    function delete(){
        global $blog_db;
        $pid = $this->get()['pid'];
        $blog_db->query("DELETE FROM posts WHERE pid=$pid");
    }
}