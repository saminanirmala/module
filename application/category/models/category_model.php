
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    const table='tb_category';
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         
         //function to display all categories
         public function getAllCategory(){
		 
             $query= $this->db->get(category_model::table);
             $res = $query->result_array();
             
             return $res;
		
         }
         
       
         
         public function insertCategory($data){
             // function to insert category in table
             $this->db->insert(category_model::table, $data);
             return $this->db->insert_id();
         }
        //function to edit category
         public function getSingleCategory($id){
             $res=$this->db->get_where(category_model::table,array('cat_id'=>$id));
			 $value = $res->row($id);             
			 return $value;
             
              
         }
         public function getAllPostOfOneCategory($id){
             $this->db->select('*');
             $this->db->from('tb_product');
             $this->db->join('tb_category', 'tb_category.cat_id = tb_product.cat_id');
            $this->db->where('tb_product.cat_id', $id);
              $query = $this->db->get();
               if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $data[] = $row;
                    }
                        return $data;
                }
                return false;
             
         }
 //update category
         public function update($id,$tablename,$data){
		$this->db->where('cat_id', $id);
		$this->db->update($tablename, $data); 
		return $this->db->affected_rows();
			
	}
        public function delete_row($id){
            $this->db->where('cat_id',$id);
            $this->db->delete(category_model::table);
        }
       
}
