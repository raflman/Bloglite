<?php


class Database_Model extends CI_Model{

    public function __construct()
    {
            parent::__construct();
    }

    public function login($table_name, $email, $password){

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('state', 'active');
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1){

            return $query->result();

        }else {

            return false;

        }


    }

    public function select_all($table_name){

            $this->db->select('*');
            $this->db->from($table_name);

            $query = $this->db->get();

        if($query->num_rows() > 0){

            return $query->result();

        }else {

            return false;

        }

    }

    public function insertTo_table($table_name, $data){

        $this->db->insert($table_name, $data);

    }


    public function get_row($table_name, $id){

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('id', $id);

        $query = $this->db->get()->result();
        return $query;

    }

    public function updateTo_table($table_name, $id, $data){
        $query = $this->db->query('show tables');
        if(strpos($table_name, $data['authorization']) !== false){

            $this->db->where('id', $id);
            $this->db->update($table_name, $data);
            return true;

        }else{

            foreach ($query->result_array() as $table){
                foreach ($table as $r){

                    if(strpos($r, $data['authorization']) !== false){

                        $this->db->where('id', $id);
                        $this->db->delete($table_name);

                        $this->db->insert($r, $data);
                        return true;

                    }
                }
            }
        }
    }

    public function delete_row($table_name,$id){
        try{

            $this->db->where('id', $id);
            $this->db->delete($table_name);
            return true;

        }catch (Exception $e){
            return false;
        }
    }
}




?>