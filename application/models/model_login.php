<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Model_login extends CI_Model {
// awal model login

function cek_login($table,$where)
{
    return $this->db->get_where($table,$where);
}   

}
