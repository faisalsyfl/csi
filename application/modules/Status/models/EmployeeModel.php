<?php 
    class EmployeeModel extends CI_Model{
        
        var $_table_name = 'employee';
        var $_primary_key = 'employeeId';
        protected $_primary_filter = 'intval';
        
        public $rules = array(
            'employeeFirstName' => array(
                'field' => 'addFirstName',
                'label' => 'First Name',
                'rules' => 'trim|required'
            ),
            'employeeLastName' => array(
                'field' => 'addLastName',
                'label' => 'Last Name',
                'rules' => 'trim|required'
            ),
            'employeeusername' => array(
                'field' => 'addUsername',
                'label' => 'Username',
                'rules' => 'trim|required'
            ),
            'employeePassword' => array(
                'field' => 'addPassword',
                'label' => 'Password',
                'rules' => 'trim|required'
            ),
        );

        public $rulesEdit = array(
            'employeeFirstName' => array(
                'field' => 'editFirstName',
                'label' => 'First Name',
                'rules' => 'trim|required'
            ),
            'employeeLastName' => array(
                'field' => 'editLastName',
                'label' => 'Last Name',
                'rules' => 'trim|required'
            ),
            'employeeusername' => array(
                'field' => 'editUsername',
                'label' => 'Username',
                'rules' => 'trim|required'
            )
        );
        
        public function __construct(){
            parent::__construct();
        }

            public function getData(){
            $this->db->select('*');
            $this->db->from($this->_table_name);
            
            $query = $this->db->get()->result();
            return $query;
        }

        //create and update data function
        public function save($data, $id = NULL){
            if ($this->_timestamps == TRUE) {
                $now = date('Y-m-d H:i:s');
                $id || $data['created'] = $now;
                $date['modified'] = $now;
            }

            // Create (insert)
            if ($id === NULL) {
                !isset($data[$this->id]) || $data[$this->_primary_key] = NULL;
                $this->db->set($data);
                $this->db->insert($this->_table_name);
                $id = $this->db->insert_id();
            }

            // Edit (update)
            else {
                $filter = $this->_primary_filter;
                $id = $filter($id);
                $this->db->set($data);
                $this->db->where($this->_primary_key, $id);
                $this->db->update($this->_table_name);
            }

            return $id;
        }

        public function getBy($where){
            $this->db->select('*');
            $this->db->from('employee');
            $this->db->where($where);
            return $this->db->get()->result();
        }

        public function delete($id){
            $filter = $this->_primary_filter;
            $id = $filter($id);

            if (!$id) {
                return FALSE;
            }

            $this->db->where($this->_primary_key, $id);
            $this->db->limit(1);
            $this->db->delete($this->_table_name);
        }
    }
?>