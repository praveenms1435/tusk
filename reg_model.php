<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reg_model
 *
 * @author Rahul
 */
class reg_model extends database {
    //put your code here
    public function getdata()
    {
        $query=$this->db->prepare("select * from employee");
        $query->execute();
        $data=$query->fetchAll();
        return $data;
    }
    public function insertdata($name,$salary)
    {
        $q="insert into employee(emp_name, emp_salary) values(:name,:salary)";
       $query= $this->db->prepare($q);
       $ins=$query->execute(array(':name'=>$name,':salary'=>$salary));
       if($ins)
       {
           $this->msg='Saved';
           return TRUE;
       }
       else
       {
           $this->error='Error';
           return FALSE;
       }

    }

}
?>
