<?php Class Category{

    private $db;
/*
https://www.facebook.com/groups/WebDevPk/

 */
	public function __construct(){
        $dbint = Database::getInstance();
        $this->db = $dbint->getConnection();
	}
	public function read_type_for_dropdown(){
        $query = "SELECT
                category_id, category_detail
                FROM
                `categories`
                ORDER BY
                category_detail";

        $stmt = $this->db->prepare( $query );
        $stmt->execute();
        
        return $stmt;
}




}