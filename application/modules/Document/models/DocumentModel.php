<?php 
    class DocumentModel extends CI_Model{
        
        var $_table_name = 'document';
        var $_primary_key = 'documentId';
        protected $_primary_filter = 'intval';
        protected $_timestamps = FALSE;
        
        public $rules = array(
            'documentFilename' => array(
                'field' => 'addFilename',
                'label' => 'File Name',
                'rules' => 'trim|required'
            ),
            'documentEmployeeId' => array(
                'field' => 'addEmployeeId',
                'label' => 'Employee Id',
                'rules' => 'trim|required'
            )
        );

        public $rulesEdit = array(
            'documentFilename' => array(
                'field' => 'editFilename',
                'label' => 'File Name',
                'rules' => 'trim|required'
            ),
            'documentEmployeeId' => array(
                'field' => 'editEMployeeId',
                'label' => 'Employee Id',
                'rules' => 'trim|required'
            )
        );
        
        public function __construct(){
            parent::__construct();
        }

        public function getDataJoin(){
            $this->db->select('*');
            $this->db->from($this->_table_name);
            $this->db->join('employee', 'employee.employeeId = document.documentEmployeeId');
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
            $this->db->select('document.*, employee.*');
            $this->db->from('document');
            $this->db->join('employee', 'employee.employeeId = document.documentEmployeeId');
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