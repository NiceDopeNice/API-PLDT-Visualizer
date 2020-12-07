<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_MODEL {

    function getDistrict()
    {
      $sql = "EXEC sp_get_all_district";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getSSCLogin()
    {
      $sql = "EXEC sp_get_all_ssc_login";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getGroup()
    {
      $sql = "EXEC sp_get_product_group";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getProductByGroup($data)
    {
      $sql = "EXEC sp_get_products_by_group @p_group = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getPlansByProduct($data)
    {
      $sql = "EXEC sp_get_plans_by_product @pl_product = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getPldtPlanById($data)
    {
      $sql = "EXEC sp_get_plans_by_pl_id @pl_id = N'{$data}'";
      $query = $this->db->query($sql)->row();
      return $query;
    }

    function getDlByPlanId($data)
    {
      $sql = "EXEC sp_get_download_by_plan @d_plan = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getPldtPlan()
    {
      $sql = "EXEC sp_get_pldt_plans";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getAllPldtPlans()
    {
      $sql = "EXEC sp_get_pldt_plans";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getSmartTypeByProduct($data)
    {
      $sql = "EXEC sp_get_smarttype_by_product @pt_product = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getSmartPlansType($data)
    {
      $sql = "EXEC sp_get_smartplanByType @pl_plantype = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function getSmartPlanID($data)
    {
      $sql = "EXEC sp_get_smartplanbyid @pl_id = N'{$data}'";
      $query = $this->db->query($sql)->row();
      return $query;
    }

    function getAllSmartPlans()
    {
      $sql = "EXEC sp_get_smart_plans";
      $query = $this->db->query($sql)->result();
      return $query;
    }
    
    function getAllSSCS($data)
    {
      $sql = "EXEC sp_get_all_sscs_by_group @ssc_group = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }

    function checkIP($data)
    {
      $sql = "EXEC sp_check_ip @ip = N'{$data}'";
      $query = $this->db->query($sql)->result();
      return $query;
    }
    
    
    function insertIP($data)
    {
      $sql = "EXEC sp_insert_ip
            @location_ip = '{$data['location_ip']}',
            @location_district = '{$data['location_district']}',
            @location_ssc = '{$data['location_ssc']}'";

      $query = $this->db->query($sql)->row();
      return $query;
    }

    function insertPlanHits($data)
    {
      $sql = "EXEC sp_insert_plan_hits
            @category = '{$data['category']}',
            @district = '{$data['district']}',
            @store = '{$data['store']}',
            @ipaddress = '{$data['ipaddress']}',
            @product = '{$data['product']}',
            @plantype = '{$data['plantype']}',
            @plan = '{$data['plan']}'";

      $query = $this->db->query($sql)->row();
      return $query;
    }
    
    function insertPlanCompare($data)
    {
      $sql = "EXEC sp_insert_plan_compare
            @pc_category = '{$data['pc_category']}',
            @pc_district = '{$data['pc_district']}',
            @pc_store = '{$data['pc_store']}',
            @pc_ipaddress = '{$data['pc_ipaddress']}',
            @pc_product1 = '{$data['pc_product1']}',
            @pc_plantype1 = '{$data['pc_plantype1']}',
            @pc_plan1 = '{$data['pc_plan1']}',
            @pc_product2 = '{$data['pc_product2']}',
            @pc_plantype2 = '{$data['pc_plantype2']}',
            @pc_plan2 = '{$data['pc_plan2']}'";

      $query = $this->db->query($sql)->row();
      return $query;
    }
      
}

?>