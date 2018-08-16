<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{

    public  function getBlog(){
        $query = $this->db->get('test_table');
        if($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }


    public function submit(){
        $field = array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email')

        );
        $this->db->insert('test_table', $field);


    }


    public function  delete($id){
        $this->db->delete('test_table');
        $this->db->where('id'. $id);

    }



    public function getBlogById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('test_table');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
         $id = $this->input->post('txt_hidden_id');
         $field = array(
             'name'=>$this->input->post('name'),
             'email'=>$this->input->post('email')

         );
         $this->db->where('id',$id);
         $this->db->update('test_table',$field);

     }
}