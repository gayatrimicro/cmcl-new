<?php
class My_lab
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



    public function get_display_msg($msg=array())
    {
       
       $_REQUEST=$msg;

        $data= $this->CI->session->set_userdata('msg',$_REQUEST);


        return $data;
     //  echo "<script> window.location</script>";
                


    }

    public function display_msg(){

     

        if($this->CI->session->userdata('msg')){

      
           print_r('<script>alert("'.$this->CI->session->userdata('msg').'");</script>');


            $this->CI->session->unset_userdata('msg');

        }


    }

        public function msg(){
  

        if($this->CI->session->userdata('msg')){
                $message=$this->CI->session->userdata('msg');
   //   print_r($message);die();
           print_r('<script>alert("'.$this->CI->session->userdata('msg').'");</script>');
           // print_r('  <script> $.growl({ title: "hgfh", message:'.$this->CI->session->userdata('msg').'}); </script>');


            $this->CI->session->unset_userdata('msg');
        }


    }



    public function metadata($pageid){

       /* $sql = "SELECT * FROM pages WHERE pageid = ?"; 
     $results = $this->CI->db->query($sql, array($pageid));
     $pageMetadata = $results->row(); 
         $data['keywords'] = $pageMetadata->keywords;
     $data['description'] = $pageMetadata->description;
         $this->CI->load->view('templates/header',$data); */
      


    } 


}