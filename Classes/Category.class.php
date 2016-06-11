<?php Class Category{

    private $db;

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
        $data = $stmt->get_result();
        $dataSet = $data->fetch_all();
        return $dataSet;
}




}