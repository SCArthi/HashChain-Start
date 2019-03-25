<?php 

class Model_customers extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCustomerData($customerId = null) 
	{
		if($customerId) {
			$sql = "SELECT * FROM customers WHERE id = ?";
			$query = $this->db->query($sql, array($customerId));
			return $query->row_array();
		}

		$sql = "SELECT * FROM customers WHERE id != ? ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function getCustomerGroup($customerId = null) 
	{
		if($customerId) {
			$sql = "SELECT * FROM customer_group WHERE customer_id = ?";
			$query = $this->db->query($sql, array($customerId));
			$result = $query->row_array();

			$group_id = $result['group_id'];
			$g_sql = "SELECT * FROM groups WHERE id = ?";
			$g_query = $this->db->query($g_sql, array($group_id));
			$q_result = $g_query->row_array();
			return $q_result;
		}
	}

	public function create($data = '', $group_id = null)
	{

		if($data && $group_id) {
			$create = $this->db->insert('customers', $data);

			$customer_id = $this->db->insert_id();

			$group_data = array(
				'customer_id' => $customer_id,
				'group_id' => $group_id
			);

			$group_data = $this->db->insert('customer_group', $group_data);

			return ($create == true && $group_data) ? true : false;
		}
	}

	public function edit($data = array(), $id = null, $group_id = null)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('customers', $data);

		if($group_id) {
			// customer group
			$update_customer_group = array('group_id' => $group_id);
			$this->db->where('customer_id', $id);
			$customer_group = $this->db->update('customer_group', $update_customer_group);
			return ($update == true && $customer_group == true) ? true : false;	
		}
			
		return ($update == true) ? true : false;	
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('customers');
		return ($delete == true) ? true : false;
	}

	public function countTotalCustomers()
	{
		$sql = "SELECT * FROM customers WHERE id != ?";
		$query = $this->db->query($sql, array(1));
		return $query->num_rows();
	}
	
}