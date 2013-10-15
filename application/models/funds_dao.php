<?php
	class Funds_dao extends CI_Model{
		
		// Get all funds information
		public function get_all_funds()
		{
			$query = $this->db->query("SELECT * FROM tb_fund");			
			return $query->result();
		}
		
		// Return the FundNo when the input race, MinWageExc & MaxWageInc is given
		public function get_fund_value($race, $wage)
		{
			$query = $this->db->query(
					"SELECT FundValue FROM tb_fund 
					where(
					 Race = '".$race."' 
					and MinWageExc < ".$wage." 
					and MaxWageInc >=".$wage.")
					OR(
					  Race = '".$race."' 
					and MinWageExc < ".$wage." 
					and MaxWageInc IS NULL)");
			$result = $query->result();
			
			foreach($result as $row)
			{
				$fund_value = $row->FundValue;		
			}
			
			return $fund_value;
		}
		
		// Return the FundNo when the input race, MinWageExc & MaxWageInc is given
		public function get_fund_title($race, $wage)
		{
			$query = $this->db->query(
					"SELECT FundName FROM tb_fund
					where(
					 Race = '".$race."'
					and MinWageExc < ".$wage."
					and MaxWageInc >=".$wage.")
					OR(
					  Race = '".$race."'
					and MinWageExc < ".$wage."
					and MaxWageInc IS NULL)");
			$result = $query->result();
				
			foreach($result as $row)
			{
				$fund_name = $row->FundName;
			}
				
			return $fund_name;
		}
		
		// Update fund details when the input is the fund no, new fund value, new min wage and new max wage
		public function update_fund_details($fund_no, $new_fund_value, $new_min_wage, $new_max_wage)
		{
			$data = array(
				'FundNo' => $fund_no,
				'FundValue' => $new_fund_value,
				'MinWageExc' => $new_min_wage,
				'MaxWageInc' => $new_max_wage
			);
			
			$this->db->where('FundNo',$fund_no);
			$this->db->update('tb_fund',$data);
		}
		
		
	} 
?>