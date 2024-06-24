<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proxy_model extends CI_Model {

    private $id;
    private $userId;
    private $host;
    private $port;
    private $user;
	private $pass;
	private $isPublic = 0;

    public function __call($function, $args)
    {
        $functionType = strtolower(substr($function, 0, 3));
        $propName = lcfirst(substr($function, 3));
        switch ($functionType) {
            case 'get':
                if (property_exists($this, $propName)) {
                    return $this->$propName;
                }
                break;
            case 'set':
                if (property_exists($this, $propName)) {
                    $this->$propName = $args[0];
                }
                break;
        }
    }

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session'));
    }


    public function save(){
        $this->db->set('user_id', $this->userId);
        $this->db->set('host', $this->host);
        $this->db->set('port', $this->port);
        $this->db->set('user', $this->user);
        $this->db->set('pass', $this->pass);
        $this->db->set('is_public', $this->isPublic);
        $this->db->set('created_at', date('Y-m-d H:i'));
        $this->db->insert('proxies');
        return $this->db->affected_rows() > 0;
    }

    public function delete(){
        $this->db->where('user_id',$this->userId);
        $this->db->delete('proxies', array('id' => $this->id)); 
        return $this->db->affected_rows() > 0;
    }

    public function deleteByIp(){
        $this->db->where('user_id',$this->userId);
        $this->db->delete('proxies', array('host' => $this->host)); 
        return $this->db->affected_rows() > 0;
    }

    public function update($data){
		foreach ($data as $key => $value) {
			$this->db->set($key, $value);
		}
		$this->db->where("id",(int)$this->id);
		$this->db->where("user_id",(int)$this->userId);
		$this->db->update("proxies");
		return $this->db->affected_rows() > 0;
	}
    
    // Count all record of table "instagram_accounts" in database.
    public function count() {
        $this->db->where('user_id',$this->userId);
        return $this->db->count_all_results("proxies");
    }

    public function get($offset = 0,$limit = 25) {
        $this->db->from('proxies');
        $this->db->where('user_id',$this->userId);
        $this->db->limit($limit,$offset);
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function getById() {
        $this->db->from('proxies');
        $this->db->where('user_id', $this->id);
        $this->db->where('id', $this->id);
        return $this->db->get();
    }

    public function getByRand(){
        $this->db->select('id');
        $this->db->where('is_public', 1);
        $this->db->from('proxies');
        $this->db->order_by('rand()');
        $this->db->limit(1);
        return $this->db->get();
    }

    public function getUserProxies() {
        $this->db->where('user_id',$this->userId);
        $this->db->from('proxies');
        return $this->db->get()->result();
    }

    public function getProxies() {
        $this->db->from('proxies');
        return $this->db->get()->result_array();
    }

    public function getActiveProxies() {
        $this->db->where('is_active',1);
        $this->db->from('proxies');
        return $this->db->get()->result_array();
    }

}