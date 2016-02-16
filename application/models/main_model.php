<?

class Main_model extends CI_Model {


    public function __construct() {
        parent::__construct();
 
    }
 
    public function get_stripe_summary() { 

        $this->db->select('status, COUNT(status) as total_transactions, SUM(amount) as total_value');
        $this->db->group_by('status'); 
        $this->db->where('dispute_reason', '');
        $this->db->order_by('total_transactions', 'desc'); 
        $query = $this->db->get('stripe');

		return $query->result_array();
    }

    public function get_stripe_disputes() {

        $this->db->where('dispute_reason', 'general');
        $this->db->select('COUNT(disputed_amount) as total_disputes, SUM(disputed_amount) as total_disputes_value');
        $query = $this->db->get('stripe');
       	
       	return $query->result_array();
    }

    public function get_stripe_card_summary() {

    	$this->db->select('status, card_brand, count(id) as count, sum(amount) as value');
    	$this->db->group_by('card_brand');
    	$this->db->group_by('status');
    	$query = $this->db->get('stripe');
    	// echo "<pre>";
    	// print_r($query->result_array());
    	// echo "</pre>";
    	// die();
    	return $query->result_array();
    }

    public function get_stripe_card_disputes() {

    	$this->db->where('dispute_reason', 'general');
    	$this->db->select('status, card_brand, count(disputed_amount) as count, sum(disputed_amount) as value');
    	$this->db->group_by('card_brand');
    	$this->db->group_by('status');
    	$query = $this->db->get('stripe');
    	// echo "<pre>";
    	// print_r($query->result_array());
    	// echo "</pre>";
    	// die();
    	return $query->result_array();
    }

    public function get_stripe_month(){
        $this->db->group_by("status");
        $this->db->group_by("MONTH(created)");
        $this->db->group_by("YEAR(created)");
        $this->db->select("status, month(created) month, year(created) year, count(*) transactions, sum(amount) amount");
        $this->db->order_by( "year(created) ASC");
        $this->db->order_by( "month(created) ASC");
        $query = $this->db->get("stripe");

        if($query->num_rows() > 0){
            // print_r($query->num_rows);
            $data = $query->result_array();
            // print_r($data);
            $months = array();
            $info = array();

            foreach($data as $d){
                if( !in_array($d['year'].'_'.$d['month'], $months)){
                   array_push($months, $d['year'].'_'.$d['month']);
                }

                $info[ $d['status'] ][ ($d['year'].'_'.$d['month']) ] = array(
                    'transactions'=> $d['transactions'],
                    'value'=> $d['amount']
                );   
            }
            return array('months'=>$months,'info'=>$info);
        }else{
            return FALSE;
        }
    }

    public function get_stripe_purchase_time($status){
        $this->db->select('sum(amount) as value, count(status) as transactions, hour(created) as hour');
        $this->db->where('status', $status);
        $this->db->where('dispute_reason', '');
        $this->db->group_by('hour');
        $this->db->order_by('value', 'desc');
        $query = $this->db->get('stripe');
        // echo "<pre>";
        // print_r($query->result_array());
        // echo "</pre>";
        // die();
        return $query->result_array();

    }

    public function get_stripe_purchase_time_disputes(){
        $this->db->select('sum(amount) as value, count(status) as transactions, hour(created) as hour');
        $this->db->where('status', 'paid');
        $this->db->where('dispute_reason', 'general');
        $this->db->group_by('hour');
        $this->db->order_by('value', 'desc');
        $query = $this->db->get('stripe');
        // echo "<pre>";
        // print_r($query->result_array());
        // echo "</pre>";
        // die();
        return $query->result_array();
    }

    public function get_stripe_paid_day($status){
        $this->db->select('sum(amount) as value, count(status) as transactions, cast(created as date) as date');
        $this->db->where('status', $status);
        $this->db->where('dispute_reason', '');
        $this->db->group_by('date');
        $this->db->order_by('date', 'desc');

        $query = $this->db->get('stripe');
        // echo "<pre>";
        // print_r($query->result_array());
        // echo "</pre>";
        // die();
        return $query->result_array();
    }

}	

?>