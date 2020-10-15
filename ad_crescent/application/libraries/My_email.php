<?php
class My_email
{

      var $CI;
    public function __construct($params = array())
    {
        $this->CI =& get_instance();

        $this->CI->load->helper('url');
        $this->CI->config->item('base_url');
        $this->CI->load->database();
        $this->CI->load->library('session');
        
    }



    public function send_mail($to=null,$from=null,$cc=null,$msg=null,$subject=null)
    {
       
       $_REQUEST=$msg;
        $data= $this->CI->session->set_userdata('msg',$_REQUEST);


        return $data;
     //  echo "<script> window.location</script>";
                


    }




}