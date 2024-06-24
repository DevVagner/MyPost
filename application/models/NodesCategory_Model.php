<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NodesCategory_model extends MY_Model {

    private $id = null;
    private $userId = null;
    private $fbId = null;
    private $categoryName = null;
    private $groups = null;
    private $pages = null;
    private $createdAt = null;
    private $error = null;

    // Setters and getters Auto Generate  
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

    public function save(){
        $this->db->set('user_id', $this->userId);
        $this->db->set('fb_id', $this->fbId);
        $this->db->set('groups', $this->groups);
        $this->db->set('pages', $this->pages);
        $this->db->set('category_name', $this->categoryName);
        $this->db->set('created_at', date('Y-m-d H:i'));
        $this->db->insert('nodes_category');
        return $this->db->affected_rows() > 0 ? $this->db->insert_id() : false;
    }

    public function count() {
        $this->db->where('user_id', $this->userId);
        return $this->db->count_all_results("nodes_category");
    }

    public function getbyId() {
        $this->db->select('id,user_id,fb_id'); 
        $this->db->from('nodes_category'); 
        $this->db->where('user_id',$this->userId);
        $this->db->where('id',$this->id);
        return $this->db->get();
    }

    public function update(array $data){
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        $this->db->where("id",$this->id);
        $this->db->where("user_id",$this->userId);
        $this->db->update("nodes_category");
        return $this->db->affected_rows() > 0;
    }

    public function isExists(){
        $this->db->where('id',$this->id);
        $this->db->where('user_id',$this->userId);
        return $this->db->count_all_results("nodes_category");
    
    }

    public function isCatNameExists($categoryName,$userID,$fbID){
        $this->db->where('category_name',$categoryName);
        $this->db->where('user_id',$userID);
        $this->db->where('fb_id',$fbID);
        return $this->db->count_all_results("nodes_category");
    
    }

    public function delete(){
        $this->db->where('id',$this->id);
        $this->db->where('user_id',$this->userId);
        $this->db->delete('nodes_category');
        return $this->db->affected_rows() > 0;   
    }

    public function groups($categoryID = false){
        $this->db->select('groups'); 
        $this->db->from('nodes_category'); 
        
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);   

        if($categoryID != null){
           $this->db->where('id',$categoryID); 
        }

        return $this->db->get();
    }

    public function pages($categoryID = false){
        $this->db->select('pages'); 
        $this->db->from('nodes_category'); 
        
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);   

        if($categoryID != null){
           $this->db->where('id',$categoryID); 
        }
        
        return $this->db->get();
    }

    public function managedPages($categoryID = false){
        $this->db->select('managed_pages'); 
        $this->db->from('nodes_category'); 
        
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);   

        if($categoryID != null){
           $this->db->where('id',$categoryID); 
        }
        
        return $this->db->get();
    }

    public function getFbAccountCategories() {
        $this->db->select('id,category_name'); 
        $this->db->from('nodes_category'); 
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        return $this->db->get()->result();
    }

    public function get() {
        $this->db->distinct();
        $this->db->select("nc.id,nc.fb_id,nc.total_groups,nc.total_pages,nc.total_managed_pages,nc.category_name,fba.name as 'fb_account'" ); 
        $this->db->from('nodes_category nc'); 
        $this->db->join('fb_accounts fba',' fba.fb_id=nc.fb_id','left'); 
        $this->db->where('nc.user_id',$this->userId);
        return $this->db->get()->result();
    }

    public function removeNodes(array $nodes){
        
        if($this->id == -1){
            $this->error = $this->lang->s("Can not remove groups from the main node.");
            return false;
        }

        if(!$this->isExists()){
            $this->error = $this->lang->s("Nodes category not Exists.");
            return false;
        }

        $this->load->model('FbAccount_Model');
        $this->FbAccount_Model->setUserId($this->userId);
        $this->FbAccount_Model->setFbId($this->fbId);

        $groups = $this->groups($this->id);
        if($groups && $groups->row()){
            $g = (array)json_decode($groups->row('groups'),TRUE);
            $i = 0;
            foreach ($g as $key) {
                if(in_array($key['id'],$nodes)){
                    unset($g[$i]);
                    $g = array_values($g);
                }
                $i++;
            }
        }

        $pages = $this->pages($this->id);
        if($pages && $pages->row()){
            $p = (array)json_decode($pages->row('pages'),TRUE);
            $i = 0;
            foreach ($p as $key) {
                if(in_array($key['id'],$nodes)){
                    unset($p[$i]);
                    $p = array_values($p);
                }
                $i++;
            }
        }

        $data = array(
            'groups'   =>json_encode($g),
            'pages'    =>json_encode($p)
        );

        $res = $this->update($data);
        if($res){
            return true;
        }

        return false;
    }

    public function addNodes($nodes){

        if(!$this->isExists()){
            $this->error = $this->lang->s("Nodes category not Exists.");
            return false;
        }

        $newGroups = array();
        $newPages = array();
        $newManagedPages = array();

        $this->FbAccount_Model->setUserId($this->userId);
        $this->FbAccount_Model->setFbId($this->fbId);

        $groups = $this->FbAccount_Model->getFBGroups();
        $pages = $this->FbAccount_Model->getFBPages();
        $managedPages =$this->FbAccount_Model->getFBManagedPages();

        if(is_array($groups) && count($groups) != 0){
            for($i = 0; $i<count($groups); $i++) {
                if( in_array($groups[$i]['id'],$nodes)){
                    $newGroups[] = $groups[$i];
                }
            }
        }

        if(is_array($pages) && count($pages) != 0){
            for($i = 0; $i<count($pages); $i++) {
                if( in_array($pages[$i]['id'],$nodes)){
                    $newPages[] = $pages[$i];
                }
            }
        }

        if(is_array($managedPages) && count($managedPages) != 0){
            for($i = 0; $i<count($managedPages); $i++) {
                if( in_array($managedPages[$i]['id'],$nodes)){
                    $newManagedPages[] = $managedPages[$i];
                }
            }
        }
        
        $currentGroups = $this->groups($this->id);
        $currentPages = $this->pages($this->id);
        $currentManagedPages = $this->managedPages($this->id);
 
        $categoryGroups = $newGroups;
        $categoryPages = $newPages;
        $categoryManagedPages = $newManagedPages;

        // Merge groups
        if($currentGroups && $currentGroups->row()){
            $g = (array)json_decode($currentGroups->row('groups'),TRUE);
            $categoryGroups = array_merge_recursive($g,$newGroups);
        }

        // Merge pages 
        if($currentPages && $currentPages->row()){
            $p = (array)json_decode($currentPages->row('pages'),TRUE);
            $categoryPages = array_merge_recursive($p,$newPages);
        }

        // Merge managed pages 
        if($currentManagedPages && $currentManagedPages->row()){
            $mp = (array)json_decode($currentManagedPages->row("managed_pages"),TRUE);
            $categoryManagedPages = array_merge_recursive($mp,$newManagedPages);
        }

        // Remove duplicated nodes
        $categoryGroups = array_map("unserialize", array_unique(array_map("serialize", $categoryGroups)));
        $categoryPages = array_map("unserialize", array_unique(array_map("serialize", $categoryPages)));
        $categoryManagedPages = array_map("unserialize", array_unique(array_map("serialize", $categoryManagedPages)));

        $data = array(
            'groups' => json_encode($categoryGroups),
            'pages'  => json_encode($categoryPages),
            'managed_pages' => json_encode($categoryManagedPages),
            'total_groups' => count($categoryGroups),
            'total_pages'  => count($categoryPages),
            'total_managed_pages' => count($categoryManagedPages),
        );
    
        $res = $this->update($data);
        if($res){return true;}
        return false;
    }

    public function refreshNodes(){

        if(!$this->isExists()){
            $this->error = $this->lang->s("Nodes category not Exists.");
            return false;
        }

        $this->load->model('FbAccount_Model');
        $this->FbAccount_Model->setUserId($this->userId);
        $this->FbAccount_Model->setFbId($this->fbId);

        $groups = $this->groups($this->id);
        $pages = $this->pages($this->id);
        $managedPages = $this->managedPages($this->id);

        $allGroups = $this->FbAccount_Model->getFbGroups();
        $allPages = $this->FbAccount_Model->getFbPages();
        $allManagedPages = $this->FbAccount_Model->getFbManagedPages();

        if($allGroups==FALSE && $allPages==FALSE && $allManagedPages==FALSE) return;

        $g = (array)json_decode($groups->row('groups'),TRUE);
        $p = (array)json_decode($pages->row('pages'),TRUE);
        $mp = (array)json_decode($pages->row('managed_pages'),TRUE);

        $allGroupsIDs = array();
        $allPagesIDs = array();
        $allManagedPagesIDs = array();
        
        foreach ($allGroups as $group){$allGroupsIDs[]=$group['id'];}
        foreach ($allPages as $page){$allPagesIDs[]=$page['id'];}
        foreach ($allManagedPages as $mpage){$allManagedPagesIDs[]=$mpage['id'];}

        if($groups && $groups->row()){
            $i = 0;
            foreach ($g as $key) {
                if(!in_array($key['id'],$allGroupsIDs)){
                    unset($g[$i]);
                    $g = array_values($g);
                }
                $i++;
            }
        }

        if($pages && $pages->row()){
            $i = 0;
            foreach ($p as $key) {
                if(!in_array($key['id'],$allPagesIDs)){
                    unset($p[$i]);
                    $p = array_values($p);
                }
                $i++;
            }
        }

        if($managedPages && $managedPages->row()){
            $i = 0;
            foreach ($mp as $key) {
                if(!in_array($key['id'],$allManagedPagesIDs)){
                    unset($mp[$i]);
                    $mp = array_values($mp);
                }
                $i++;
            }
        }

        $data = array(
            'groups'   =>json_encode($g),
            'pages'    =>json_encode($p),
            'managed_pages' => json_encode($mp),
        );
        
        $res = $this->update($data);
        if($res){return true;}
        return false;
    }
}
?>