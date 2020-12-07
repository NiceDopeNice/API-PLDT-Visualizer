<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->model('Api_model');
        header('Access-Control-Allow-Origin: *');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getDistrict()
	{
        $query = $this->Api_model->getDistrict();
        echo json_encode($query);
    }
    
	public function getSSCLogin()
	{
        $query = $this->Api_model->getSSCLogin();
        echo json_encode($query);
    }
    
	public function getGroup()
	{
        $query = $this->Api_model->getGroup();
        echo json_encode($query);
    }
    
	public function getProductByGroup()
	{
        $param = $_GET['p_group'];
        $query = $this->Api_model->getProductByGroup($param);
        echo json_encode($query);
    }
    
	public function getPlansByProduct()
	{
        $param = $_GET['pl_product'];
        $query = $this->Api_model->getPlansByProduct($param);
        echo json_encode($query);
    }
    
	public function getPldtPlanById()
	{
        $param = $_GET['pl_id'];
        $query = $this->Api_model->getPldtPlanById($param);
        echo json_encode($query);
    }
    
	public function getDlByPlanId()
	{
        $param = $_GET['d_plan'];
        $query = $this->Api_model->getDlByPlanId($param);
        echo json_encode($query);
    }
    
	public function getPldtPlan()
	{
        $query = $this->Api_model->getPldtPlan();
        echo json_encode($query);
    }
    
	public function getAllPldtPlans()
	{
        $query = $this->Api_model->getAllPldtPlans();
        echo json_encode($query);
    }
    
	public function getSmartTypeByProduct()
	{
        $param = $_GET['pt_product'];
        $query = $this->Api_model->getSmartTypeByProduct($param);
        echo json_encode($query);
    }
    
	public function getSmartPlansType()
	{
        $param = $_GET['pl_plantype'];
        $query = $this->Api_model->getSmartPlansType($param);
        echo json_encode($query);
    }
    
	public function getSmartPlanID()
	{
        $param = $_GET['pl_id'];
        $query = $this->Api_model->getSmartPlanID($param);
        echo json_encode($query);
    }
    
	public function getAllSmartPlans()
	{
        $query = $this->Api_model->getAllSmartPlans();
        echo json_encode($query);
    }
    

    
    // 
	public function getButtonList()
	{
        $query = $this->Api_model->getButtonList();
        echo json_encode($query);
    }
    
	public function getAreaCode()
	{
        $query = $this->Api_model->getAreaCode();
        echo json_encode($query);
    }
    
	public function getCityByProvince()
	{
        $param = $_GET['province'];
        $query = $this->Api_model->getCityByProvince($param);
        echo json_encode($query);
    }
    
	public function getAllSSCS()
	{
        $param = $_GET['ssc_group'];
        $query = $this->Api_model->getAllSSCS($param);
        echo json_encode($query);
    }
   
	public function getPldtProductByID()
	{
        $param = $_GET['h_id'];
        $query = $this->Api_model->getPldtProductByID($param);
        echo json_encode($query);
    }
   
	public function getPldtVasByID()
	{
        $param = $_GET['v_id'];
        $query = $this->Api_model->getPldtVasByID($param);
        echo json_encode($query);
    }
   
	public function getPldtTypePaymentChannelByBrand()
	{
        $param = $_GET['pct_group'];
        $query = $this->Api_model->getPldtTypePaymentChannelByBrand($param);
        echo json_encode($query);
    }
   
	public function getPldtPaymentChannelByType()
	{
        $param = $_GET['pc_type'];
        $query = $this->Api_model->getPldtPaymentChannelByType($param);
        echo json_encode($query);
    }
   
	public function getZipCityByProvince()
	{
        $param = $_GET['phzipcodes_province'];
        $query = $this->Api_model->getZipCityByProvince($param);
        echo json_encode($query);
    }
   
	public function getPldtLocationByCity()
	{
        $param = $_GET['phzipcodes_city'];
        $query = $this->Api_model->getPldtLocationByCity($param);
        echo json_encode($query);
    }
   
	public function checkIP()
	{
        $param = $_GET['ip'];
        $query = $this->Api_model->checkIP($param);
        echo json_encode($query);
    }
    
	public function getPldtProducts()
	{
        $query = $this->Api_model->getPldtProducts();
        echo json_encode($query);
    }

	public function getPldtVas()
	{
        $query = $this->Api_model->getPldtVas();
        echo json_encode($query);
    }
    
	public function getPldtZipCodeGroup()
	{
        $query = $this->Api_model->getPldtZipCodeGroup();
        echo json_encode($query);
    }
    
	public function getSmartProducts()
	{
        $query = $this->Api_model->getSmartProducts();
        echo json_encode($query);
    }
    
	public function getSmartContact()
	{
        $query = $this->Api_model->getSmartContact();
        echo json_encode($query);
    }
    
    public function getSmartProductByID()
	{
        $param = $_GET['h_id'];
        $query = $this->Api_model->getSmartProductByID($param);
        echo json_encode($query);
    }

	public function insertPlanHits()
	{
        $query = $this->Api_model->insertPlanHits($_POST);
        echo json_encode($query);
    }

	public function insertPlanCompare()
	{
        $query = $this->Api_model->insertPlanCompare($_POST);
        echo json_encode($query);
    }
     
	public function insertIP()
	{
        $query = $this->Api_model->insertIP($_POST);
        echo json_encode($query);
    }
    
    
}
