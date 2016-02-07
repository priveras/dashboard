<?

class Main_model extends CI_Model {


    public function __construct() {
        parent::__construct();
 
    }
 
    public function get_stripe_summary() { 

        $this->db->select('status, COUNT(status) as total_transactions, SUM(amount) as total_value');
        $this->db->group_by('status'); 
        $this->db->order_by('total_transactions', 'desc'); 
        $query = $this->db->get('stripe');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }

}	

?>