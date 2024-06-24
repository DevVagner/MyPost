<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Kingposter
 * @author    Pandisoft <pandisoft@gmail.com>
 * @copyright Pandisoft - pandisoft.com
 *
 */
class FbAccount_model extends MY_Model {

    private $userId = null;
    private $fbId = null;
    private $firstname = null;
    private $lastname = null;
    private $name = null;
    private $defaultApp = null;
    private $groups = null;
    private $friends = null;
    private $hiddenGroups = null;
    private $pages = null;
    private $managedPages = null;
    private $hiddenPages = null;
    private $defaultNodesCategory;
    private $groupsCount = 0;
    private $pagesCount = 0;
    private $managedPagesCount = 0;
    private $friendsCount = 0;
    private $totalGroups = 0;
    private $totalPages = 0;
    private $totalFriends = 0;
    private $error;
    private $currentUser = null;

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
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session'));
        $this->load->Model('User_Model');
        $this->db->reconnect();
        if($this->User_Model->isLoggedIn()){
            $this->currentUser = $this->User_Model->currentUser()['user_id'];
        }
    }

    // Save current instance
    public function save(){
        if( $this->userId == null || $this->fbId == null )
            $this->error = "User ID and facebook ID can not be empty.";
        
        $this->db->set("user_id",$this->userId);
        $this->db->set("fb_id",$this->fbId);
        $this->db->set("firstname",$this->firstname);
        $this->db->set("lastname",$this->lastname);
        $this->db->set("name",$this->name);
        $this->db->set("groups",$this->groups);
        $this->db->set("pages",$this->pages);
        $this->db->set("managed_pages",$this->managedPages);
        $this->db->set("friends",$this->friends);
        $this->db->set("groups_count",$this->groupsCount);
        $this->db->set("pages_count",$this->pagesCount);
        $this->db->set("managed_pages_count",$this->managedPagesCount);
        $this->db->set("defaultApp",$this->defaultApp);

        $this->db->insert('fb_accounts');
        return $this->db->affected_rows() > 0 ? $this->db->insert_id() : false;
    }
    // Update current instance
    public function update(){
        
        if( $this->userId == null || $this->fbId == null )
                $this->error = "User ID and facebook ID can not be empty.";

        try{

            if($this->firstname != null){
                $this->db->set('firstname',$this->firstname);
            }

            if($this->lastname != null){
                $this->db->set('lastname',$this->lastname);
            }

            if($this->name != null){
                $this->db->set('name',$this->name);
            }
            
            if($this->defaultApp){
                $this->db->set('defaultApp',$this->defaultApp);
            }

            if($this->pages != null){
                $this->db->set('pages',$this->pages);
                $this->db->set('pages_count',$this->pagesCount);
            }

            if($this->managedPages != null){
                $this->db->set('managed_pages',$this->managedPages);
                $this->db->set('managed_pages_count',$this->managedPagesCount);
            }

            if($this->groups != null){
                $this->db->set('groups',$this->groups);
                $this->db->set('groups_count',$this->groupsCount);
            }

            if($this->friends != null){
                $this->db->set('friends',$this->friends);
                $this->db->set('friends_count',$this->friendsCount);
            }

            if($this->defaultNodesCategory != null){
                $this->db->set('default_nodes_category',$this->defaultNodesCategory);
            }
            
            $this->db->where('user_id',$this->userId);
            $this->db->where('fb_id',$this->fbId);
            $this->db->update("fb_accounts");
            
            return $this->db->affected_rows() > 0;

        }catch(Exception $e){
            $this->error = $e->getMessage();
            return FALSE;
        }
    }

    public function updateFbId($newid){
        
        if( $this->userId == null || $this->fbId == null ){
            $this->error = "User ID and facebook ID can not be empty.";
        }

        $this->db->set('fb_id',$newid);
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        $this->db->update("fb_accounts");
        $res = $this->db->affected_rows() > 0;

        if($res===false) return false;

        // Change schedule FB account
        $this->db->set('fb_account',$newid);
        $this->db->where('userid',$this->userId);
        $this->db->where('fb_account',$this->fbId);
        $this->db->update("scheduledposts");

        // Change user_fbapps
        $this->db->set('fb_id',$newid);
        $this->db->where('userid',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        $this->db->update("user_fbapp");

        // Update the default account
        $this->db->set('default_Fb_Account',$newid);
        $this->db->where('userid',$this->userId);
        $this->db->where('default_Fb_Account',$this->fbId);
        $this->db->update("user_options");

        $this->session->set_userdata('user_settings',NULL); 

        return true;
    }

    public function get($userid = null){
        if($userid == null){$userid = $this->currentUser;}
        $this->db->from('fb_accounts');
        $this->db->where('user_id', $userid);
        return $this->db->get();
    }
    public function getFbAccountById($fbid,$userid = null){
        if($userid == null){$userid = $this->currentUser;}
        $this->db->reconnect();
        $this->db->from('fb_accounts');
        $this->db->where('user_id', $userid);
        $this->db->where('fb_id', $fbid);
        return $this->db->get();
    }
    public function  getAll($userid = null){
        if($userid == null){
            $userid = $this->User_Model->currentuser()['user_id'];
        }
        $this->db->select('id,user_id,fb_id,firstname,lastname,name,groups_count,pages_count,managed_pages_count,friends_count');
        $this->db->from('fb_accounts');
        $this->db->where('user_id', $userid);
        $res = $this->db->get();
        return $res ? $res->result() : false;
    }
    public function delete(){
        
        // Delete the facebook account if exists
        if(!$this->exists($this->fbId)){
            $this->error = $this->lang->s("FB_ACCOUNT_NOT_EXISTS");
            return;
        }
            
        // Delete the account
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->currentUser);
        $this->db->delete('fb_accounts');

        // Delete the account apps
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('userid', $this->currentUser);
        $this->db->delete('user_fbapp');

        // Remove the account from user options if it is the default account
        if($this->UserDefaultFbAccount() == $this->fbId){
            $this->User_Model->setId($this->currentUser);
            $this->User_Model->UpdateOptions(array("default_Fb_Account"=>""));
        }

        return true;
    }
    public function exists($fbid,$userid = null){
        if($userid == null){
            $userid = $this->currentUser;
        }
        $this->db->where('user_id',$userid);
        $this->db->where('fb_id',$fbid);
        return $this->db->count_all_results("fb_accounts");
    }
    public function UserDefaultFbAccount(){
        $this->User_Model->setId($this->User_Model->currentUser()['user_id']);
        $userSettings = $this->User_Model->userSettings();
        if(isset($userSettings['default_Fb_Account'])){
            return $userSettings['default_Fb_Account'];
        }
        return false;
    }
    public function UserFbAccountDefaultApp($fb_account = null){
        $this->db->select('fa.*');
        $this->db->from('fb_accounts fba');
        $this->db->join('fbapps fa','fa.id = fba.defaultApp');
        $this->db->where('fba.user_id', $this->currentUser);

        if($fb_account === null){
            $fb_account = $this->fbId;
        }
            
        $this->db->where('fba.fb_id', $fb_account);   

        return $this->db->get();
    }

    public function GetGroups(){
        $groups = null; 
        $fbAccount = $this->getFbAccountById($this->UserDefaultFbAccount(),$this->currentUser);

        if(!$fbAccount->row()){return false;}

        if($fbAccount->row('default_nodes_category') > 0){
            $this->NodesCategory_Model->setUserId($this->currentUser);
            $this->NodesCategory_Model->setFbId($fbAccount->row('fb_id'));
            $groups = $this->NodesCategory_Model->groups((int)$fbAccount->row('default_nodes_category'));
        }else{
            $this->db->select('groups');
            $this->db->from('fb_accounts');
            $this->db->where('fb_id', $fbAccount->row('fb_id'));
            $this->db->where('user_id', $this->currentUser);
            $groups = $this->db->get();
        }

        if($groups && $groups->row() && $groups->row('groups') != null){
            $listGroups = json_decode($groups->row('groups'),true);
            // Check show open group only option is on unset non open groups
            if($this->User_Model->Options($this->currentUser) && $this->User_Model->Options($this->currentUser)->row('openGroupOnly') == 1){
                $listGroups = $this->unsetNoneOpenGroups($listGroups);
            }
            
            $this->User_Model->setID($this->User_Model->currentUser()['user_id']);
            $userSettings = $this->User_Model->userSettings();

            if(isset($userSettings['show_hidden_nodes']) && $userSettings['show_hidden_nodes'] == 0){
                // Unset hidden groups
                $this->db->select('hidden_groups');
                $this->db->from('fb_accounts');
                $this->db->where('fb_id', $fbAccount->row('fb_id'));
                $this->db->where('user_id', $this->currentUser);
                $hiddenGroups = $this->db->get();

                if($hiddenGroups && $hiddenGroups->row()){
                    $hiddenGroups = (array)json_decode($hiddenGroups->row('hidden_groups'),TRUE);
                    if(count($hiddenGroups) > 0){
                        $listGroups = $this->unsetHiddenNodes($listGroups,$hiddenGroups);
                    }
                }
            }

            $this->groupsCount = count($listGroups);
            return $listGroups;
        }
            
        return false;
    }

    public function GetPages(){
        
        $pages = null;

        $fbAccount = $this->getFbAccountById($this->fbId,$this->userId);

        if(!$fbAccount->row()){
            return false;
        }

        if($fbAccount->row('default_nodes_category') > 0){
            $this->NodesCategory_Model->setUserId($this->userId);
            $this->NodesCategory_Model->setFbId($fbAccount->row('fb_id'));
            $pages = $this->NodesCategory_Model->pages((int)$fbAccount->row('default_nodes_category'));
        }else{
            $this->db->reconnect();
            $this->db->select('pages');
            $this->db->from('fb_accounts');
            $this->db->where('fb_id', $fbAccount->row('fb_id'));
            $this->db->where('user_id', $this->userId);
            $pages = $this->db->get();
        }
        
        if($pages->row()){

            $listPages = json_decode($pages->row('pages'),true);

            $this->User_Model->setID($this->User_Model->currentUser()['user_id']);
            $userSettings = $this->User_Model->userSettings();
            
            if(isset($userSettings['show_hidden_nodes']) && $userSettings['show_hidden_nodes'] == 0){
                // Unset hidden groups
                $this->db->reconnect();
                $this->db->select('hidden_pages');
                $this->db->from('fb_accounts');
                $this->db->where('fb_id', $this->fbId);
                $this->db->where('user_id', $this->currentUser);
                $hiddenPages = $this->db->get();

                if($hiddenPages && $hiddenPages->row()){
                    $hiddenPages = (array)json_decode($hiddenPages->row('hidden_pages'),TRUE);
                    if(count($hiddenPages) > 0){
                        $listPages = $this->unsetHiddenNodes($listPages,$hiddenPages);
                    }
                }
            }

            $this->pagesCount = count($listPages);
            return $listPages;
        }
            
        return false;
    }

    public function GetManagedPages(){
        
        $managedPages = null;

        $fbAccount = $this->getFbAccountById($this->fbId,$this->userId);

        if(!$fbAccount->row()){return false;}

        if($fbAccount->row('default_nodes_category') > 0){
            $this->NodesCategory_Model->setUserId($this->userId);
            $this->NodesCategory_Model->setFbId($fbAccount->row('fb_id'));
            $managedPages = $this->NodesCategory_Model->managedPages((int)$fbAccount->row('default_nodes_category'));
        }else{
            $this->db->reconnect();
            $this->db->select('managed_pages');
            $this->db->from('fb_accounts');
            $this->db->where('fb_id', $fbAccount->row('fb_id'));
            $this->db->where('user_id', $this->userId);
            $managedPages = $this->db->get();
        }

        if($managedPages->row()){

            $listPages = (array)json_decode($managedPages->row('managed_pages'),true);

            $this->User_Model->setID($this->User_Model->currentUser()['user_id']);
            $userSettings = $this->User_Model->userSettings();
            
            if(isset($userSettings['show_hidden_nodes']) && $userSettings['show_hidden_nodes'] == 0){
                // Unset hidden groups
                $this->db->reconnect();
                $this->db->select('hidden_managed_pages');
                $this->db->from('fb_accounts');
                $this->db->where('fb_id', $this->fbId);
                $this->db->where('user_id', $this->currentUser);
                $hiddenPages = $this->db->get();

                if($hiddenPages && $hiddenPages->row()){
                    $hiddenPages = (array)json_decode($hiddenPages->row('hidden_managed_pages'),TRUE);
                    if(count($hiddenPages) > 0){
                        $listPages = $this->unsetHiddenNodes($listPages,$hiddenPages);
                    }
                }
            }

            $this->managedPagesCount = count($listPages);
            return $listPages;
        }
            
        return false;
    }

    public function getFBFriends(){
        $this->db->select('friends');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $friends = $this->db->get();
            
        if($friends->row()){
            $listFriends = json_decode($friends->row('friends'),true);
            $this->totalFriends = count($listFriends);
            return $listFriends;
        }
            
        return false;
    }

    public function getFBGroups(){
        $this->db->select('groups');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $groups = $this->db->get();
            
        if($groups->row()){
            $listGroups = json_decode($groups->row('groups'),true);
            $this->groups = count($listGroups);
            return $listGroups;
        }
            
        return false;
    }

    public function getFBPages(){
        $this->db->select('pages');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $pages = $this->db->get();
            
        if($pages->row()){
            $listPages = json_decode($pages->row('pages'),true);
            if(!is_array($listPages)) return false;
            $this->User_Model->setID($this->User_Model->currentUser()['user_id']);
            $this->pages = count($listPages);
            return $listPages;
        }
            
        return false;
    }

    public function getFBManagedPages(){
        $this->db->select('managed_pages');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $managedpages = $this->db->get();
            
        if($managedpages->row()){
            $listmanagedPages = json_decode($managedpages->row('managed_pages'),true);
            if(!is_array($listmanagedPages)) return false;
            $this->User_Model->setID($this->User_Model->currentUser()['user_id']);
            $this->managedpages = count($listmanagedPages);
            return $listmanagedPages;
        }
            
        return false;
    }

    private function unsetNoneOpenGroups($listGroups){
        $i = 0;
        foreach ($listGroups as $group) {
            if(isset($group['privacy'])){
                if($group['privacy'] == 'SECRECT' || $group['privacy'] == 'CLOSED') {
                    unset($listGroups[$i]);
                }
            }
            $i++;
        }

        return $listGroups;
    }

    private function unsetHiddenNodes($listGroups,$hiddenGroups){
        $i = 0;
        foreach ($listGroups as $group) {
            if(isset($group['id']) && in_array($group['id'], $hiddenGroups)){
                unset($listGroups[$i]);
            }
            $i++;
        }
        return $listGroups;
    }

    public function countFbAccount($userID = null){
        if($userID == null){
            $userID = $this->currentUser;
        }
        $this->db->where('user_id', $userID);
        return $this->db->count_all_results("fb_accounts");
    }

    public function getUserNodes(){

        $this->User_Model->setId($this->currentUser);
        $userSettings = $this->User_Model->userSettings();

        $this->userId = $this->currentUser;
        $this->fbId = $this->UserDefaultFbAccount();

        $showGroups = @$userSettings['show_groups'];
        $showPages = @$userSettings['show_pages'];
        $showManagedPages = @$userSettings['show_managed_pages'];

        $groupsList = array();
        $pagesList = array();
        $managedMagesList = array();

        if($showGroups) $groupsList = $this->GetGroups();
        if($showPages) $pagesList = $this->GetPages();
        if($showManagedPages) $managedMagesList = $this->GetManagedPages();


        $this->groupsCount = $groupsList ? count($groupsList) : 0;
        $this->pagesCount = $pagesList ? count($pagesList) : 0;
        $this->managedPagesCount = $managedMagesList ? count($managedMagesList) : 0;

        $nodes = array();
        if($showGroups && $groupsList){$nodes = array_merge($nodes,$groupsList);}
        if($showPages && $pagesList){$nodes =  array_merge($nodes,$pagesList);}
        if($showManagedPages && $managedMagesList){$nodes =  array_merge($nodes, $managedMagesList);}

        if(!$showGroups && !$showPages && !$showManagedPages){
            $this->User_Model->UpdateOptions(array('show_groups' => 1));
            if($groupsList){
                $nodes = array_merge($nodes, $groupsList);
            }
        }

        return $nodes;
    }

    public function fbAccountApps(){
        $this->db->select("f.*,f.appid as 'fbappid',uf.*");
        $this->db->from('fbapps f');
        $this->db->join('user_fbapp uf','f.id = uf.appid');
        $this->db->where('uf.userid', $this->userId);
        $this->db->where('uf.fb_id', $this->fbId);
        $res = $this->db->get();
        return $res ?  $res->result() : false;
    }

    public function defaultAccessToken($appid){
        $this->db->select("access_token");
        $this->db->from('user_fbapp');
        $this->db->where('userid', $this->userId);
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('appid', $appid);
        return $this->db->get();   
    }

    public function clearProcessedFbAccounts(){
        date_default_timezone_set('UTC');
        $cdt = new DateTime();
        $this->db->where("created_at < DATE_FORMAT('".$cdt->format('Y-m-d H:i')."','%Y-%m-%d %H:%i')");
        $this->db->delete('processed_fb_accounts');
    }

    public function addProcessedFbAccount(){
        date_default_timezone_set('UTC');
        $cdt = new DateTime();
        $this->db->reconnect();
        $this->db->set('fb_id',$this->fbId);
        $this->db->set('created_at', date('Y-m-d H:i'));
        $this->db->insert('processed_fb_accounts');
        return $this->db->affected_rows() > 0;
    }

    public function isFbAccountProcessed(){
        $this->db->reconnect();
        $this->db->where('fb_id',$this->fbId);
        return $this->db->count_all_results("processed_fb_accounts") > 0 ? TRUE : FALSE;
    }

    public function countFBAccountsGroups()
    {
        $this->db->select('groups');
        $this->db->where('user_id',$this->userId);
        $this->db->from('fb_accounts');
        $res = $this->db->get();
        $count = 0;
        foreach ($res->result() as $fbaccount) {
            $count += count(json_decode($fbaccount->groups,TRUE));
        }
        return $count;
    }

    public function countFBAccountsPages()
    {
        $this->db->select('pages');
        $this->db->where('user_id',$this->userId);
        $this->db->from('fb_accounts');
        $res = $this->db->get();
        $count = 0;
        foreach ($res->result() as $fbaccount) {
            $count += count(json_decode($fbaccount->pages,TRUE));
        }
        return $count;
    }

    public function hiddenNodes()
    {
        $this->db->select('hidden_groups,hidden_pages');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        return $this->db->get();
    }

    public function hideGroups($nodes){
        
        if( $this->userId == null || $this->fbId == null ){
            $this->error = "User ID and facebook ID can not be empty.";
        }

        // Get facebook account nodes
        $this->db->select('groups,hidden_groups');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $groups = $this->db->get();

        if(!$groups->row()){
            return FALSE;
        }

        $groupsToHide = (array)json_decode($groups->row("hidden_groups"),TRUE);
        $mainList = (array)json_decode($groups->row("groups"),TRUE);

        foreach ($mainList as $group) {
            if(in_array($group['id'],$nodes) && !in_array($group['id'],$groupsToHide)){
                $groupsToHide[] = $group['id'];
            }
        }

        $groupsToHide = json_encode($groupsToHide);

        $this->db->set('hidden_groups',$groupsToHide);
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        $this->db->update("fb_accounts");

        return $this->db->affected_rows() > 0;
    }

    public function hidePages($nodes){
        
        if( $this->userId == null || $this->fbId == null ){
            $this->error = "User ID and facebook ID can not be empty.";
        }

        // Get facebook account nodes
        $this->db->select('pages,hidden_pages');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $pages = $this->db->get();

        if(!$pages->row()){
            return FALSE;
        }

        $pagesToHide = (array)json_decode($pages->row("hidden_pages"),TRUE);
        $mainList = (array)json_decode($pages->row("pages"),TRUE);

        foreach ($mainList as $group) {
            if(in_array($group['id'],$nodes) && !in_array($group['id'],$pagesToHide)){
                $pagesToHide[] = $group['id'];
            }
        }

        $pagesToHide = json_encode($pagesToHide);

        $this->db->set('hidden_pages',$pagesToHide);
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        $this->db->update("fb_accounts");

        return $this->db->affected_rows() > 0;
    }

    public function unhideGroups($nodes){
        
        if( $this->userId == null || $this->fbId == null ){
            $this->error = "User ID and facebook ID can not be empty.";
        }

        // Get facebook account nodes
        $this->db->select('hidden_groups');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $groups = $this->db->get();

        if(!$groups->row()){
            return FALSE;
        }

        $mainList = (array)json_decode($groups->row("hidden_groups"),TRUE);
        $newList = array();

        if(count($mainList) == 0 ) return FALSE;
       
        for ($i=0; $i < count($mainList) ; $i++) { 
            if(!in_array($mainList[$i], $nodes)){
                $newList[] = $mainList[$i];
            }
        }

        $mainList = json_encode($newList);

        $this->db->set('hidden_groups',$mainList);
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        $this->db->update("fb_accounts");

        return $this->db->affected_rows() > 0;
    }

    public function unhidePages($nodes){
        
        if( $this->userId == null || $this->fbId == null ){
            $this->error = "User ID and facebook ID can not be empty.";
        }

        // Get facebook account nodes
        $this->db->select('hidden_pages');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $groups = $this->db->get();

        if(!$groups->row()){
            return FALSE;
        }

        $mainList = (array)json_decode($groups->row("hidden_pages"),TRUE);
        $newList = array();
       
        if(count($mainList) == 0 ) return FALSE;

        for ($i=0; $i < count($mainList) ; $i++) { 
            if(!in_array($mainList[$i], $nodes)){
                $newList[] = $mainList[$i];
            }
        }

        $mainList = json_encode($newList);

        $this->db->set('hidden_pages',$mainList);
        $this->db->where('user_id',$this->userId);
        $this->db->where('fb_id',$this->fbId);
        $this->db->update("fb_accounts");

        return $this->db->affected_rows() > 0;
    }

    public function getAllNodes(){
        $this->db->select('groups,pages,managed_pages');
        $this->db->from('fb_accounts');
        $this->db->where('fb_id', $this->fbId);
        $this->db->where('user_id', $this->userId);
        $nodes = $this->db->get();
            
        if(!$nodes->row()){return FALSE;}

        $listGroups = (array)json_decode($nodes->row('groups'),true);
        $listPages = (array)json_decode($nodes->row('pages'),true);
        $listmanagedPages = (array)json_decode($nodes->row('managed_pages'),true);


        $nodes = array();
        $nodes = array_merge($nodes,$listGroups);
        $nodes = array_merge($nodes,$listPages);
        $nodes = array_merge($nodes,$listmanagedPages);

        return $nodes;
        
    }
}
?>