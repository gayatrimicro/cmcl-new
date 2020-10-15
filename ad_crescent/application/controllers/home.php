<?php 

class Home extends MY_Controller{
public function __construct(){
		parent::__construct();
		// $this->load->model('userm');
		// $this->load->model('adminm');
		// $this->load->model('employeem');
		// $this->load->model('super');
		$this->load->model('admin_data','admin');
	}



	public function index($id=null){
		$this->load->view('admin/page-login');
	}
	public function check_login($data_id=null){
		$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('admin_email','Email','required');
		if($this->form_validation->run()==FALSE){
			redirect();
		}else{
			$array=array();
			$array['admin_email']=$this->input->post('admin_email');
			$array['admin_password']=$this->input->post('admin_password');
			$table='admin';
			$data=$this->admin->match_data($table,$array)[0];
			if($data){
				$logg=array('admin_id'=>$data['admin_id'],'admin_email'=>$data['admin_email'],'full_name'=>$data['full_name'],'access'=>$data['access']);
				$this->session->set_userdata('logged_in', $logg);
				//print_r($this->session->userdata('logged_in'));

			}
			if(!empty($this->session->userdata('logged_in'))){
			$array=array('carrier_id'=>base64_decode($data_id));
			$data['update_carrier']=$this->admin->get_details('carrier_details',$array);
			$data['carrier']=$this->admin->get_carrier_details();
			$this->load->view('admin/carrier_details',$data);
			}else{
				redirect();
			}
		}
	}
	public function carrier_details($data_id=null){
		if(isset($this->session->userdata['logged_in'])){

		$array=array('carrier_id'=>base64_decode($data_id));
		$data['update_carrier']=$this->admin->get_details('carrier_details',$array);
		$data['carrier']=$this->admin->get_carrier_details();
		$this->load->view('admin/carrier_details',$data);
		}else{
			redirect();
		}
	}
	public function insert_carrier(){
		$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('carrier_title','Carrier Title','required');
		$this->form_validation->set_rules('carrier_sub_title','Shift Time','required');
		$this->form_validation->set_rules('carrier_description','Carrier Details','');
		$this->form_validation->set_rules('act','','');
		$this->form_validation->set_rules('sequence_by','','');
		if($this->form_validation->run()==FALSE){
			$data['carrier']=$this->admin->get_details('carrier_details');
			$this->load->view('admin/carrier_details',$data);
		}else{
		$array=array();
		$array['carrier_title']=$this->input->post('carrier_title');
		$array['carrier_sub_title']=$this->input->post('carrier_sub_title');
		$array['carrier_description']=$this->input->post('carrier_details');
		$array['carrier_id']=$this->input->post('act');
		$array['sequence_by']=$this->input->post('sequence_by');
		$array['time']=time();
		if(!empty($this->input->post('act'))){
			$where=array('carrier_id'=>$this->input->post('act'));
		}
		$table='carrier_details';
		$this->admin->insert_details($table,$array,$where);
		redirect('home/carrier_details');
		}
	}
	public function delete_carrier_details(){
		
		/*$id = $this->input->get('id');
		
		$data1 = array('status'=> 0);
		
		$this->db->where('carrier_id', $id);
		$da = $this->db->update('carrier_details', $data1);
		
		redirect('home/carrier_details');
		exit();*/
		//$res = $this->admin->soft_delete($id, 'carrier_id', 'carrier_details');
		//print_r($res); exit();
		
		
		$id = $this->input->post('carrier_id');
		
		$data1 = array('status'=>0);
		$this->db->where('carrier_id', $id);
		$da = $this->db->update('carrier_details', $data1);
		redirect('home/carrier_details');
	}
	/* Event  Details Insert/delete/display */
	public function event_details($data_id=null){
		if(isset($this->session->userdata['logged_in'])){
		$array=array('event_id'=>base64_decode($data_id));
		$data['update_event']=$this->admin->get_details('event_tbl',$array);
		$data['event']=$this->admin->get_details('event_tbl');
		$this->load->view('admin/event_details',$data);
		}else{
			redirect();
		}
	}
public function insert_event()
	{
		$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('event_title','Event Title','required');
		$this->form_validation->set_rules('event_details','Event Details','');
		$this->form_validation->set_rules('event_date','date','');
		$this->form_validation->set_rules('act','','');
		if($this->form_validation->run()==FALSE){
			$data['event']=$this->admin->get_details('event_tbl');
			$this->load->view('admin/event_details',$data);
		}else{
		 	$file = $_FILES['userfile'];
			$file_name = $file['name'];
			$file_type = $file ['type'];
			$file_size = $file ['size'];
			$file_path = $file ['tmp_name'];
			if(!empty($file_name)){
				$path='assets/images/event/';
				$ext = pathinfo($file_name, PATHINFO_EXTENSION);
				$document=time().'.'.$ext;
				$time=time();
				move_uploaded_file($file_path,$path.$document);
			}else{
				$document=$this->input->post('images');
			}

			$file1 = $_FILES['flyer_image'];
			// print_r($file1);
			// exit();
			$file1_name = $file1 ['name'];
			$file1_type = $file1 ['type'];
			$file1_size = $file1 ['size'];
			$file1_path = $file1 ['tmp_name'];
			if(!empty($file1_name)){
				$path1='assets/images/flyer_image/';
				$ext1 = pathinfo($file1_name, PATHINFO_EXTENSION);
				$document1='flyer_image_'.time().'.'.$ext1;
				$time=time();
				move_uploaded_file($file1_path,$path1.$document1);
			}else{
				$document1=$this->input->post('flyer_image1');
			}

			// print_r($document1);
			// exit();
			
			$array=array();
			$array['event_title']=$this->input->post('event_title');
			$array['event_details']=$this->input->post('event_details');
			$array['time']=time();
			$array['event_date']=date('Y-m-d',strtotime($this->input->post('event_date')));
			$array['images']=$document;
			$array['flyer_image']=$document1;
			if(!empty($this->input->post('act'))){
				$where=array('event_id'=>$this->input->post('act'));
			}
			$table='event_tbl';
			$this->admin->insert_details($table,$array,$where);
			
			redirect('home/event_details');
		}
	}
	public function delete_event($data_id){
		$where=array('event_id'=>base64_decode($data_id));
		$table='event_tbl';
		$this->admin->delete_data($table,$where);
		redirect('home/event_details');
	}
	/* News Details Insert/delete/display */
	public function news_details($data_id=null){
		if(isset($this->session->userdata['logged_in'])){
		$array=array('news_id'=>base64_decode($data_id));
		$data['update_news']=$this->admin->get_details('news_tbl',$array);
		$data['news']=$this->admin->get_details('news_tbl');
		$this->load->view('admin/news_details',$data);
		}else{
			redirect();
		}
	}
	public function insert_news($data=null){$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('news_title','News Title','required');
		$this->form_validation->set_rules('news_details','News Details','');
		$this->form_validation->set_rules('act','','');
		$this->form_validation->set_rules('news_date','News Date','');
		if($this->form_validation->run()==FALSE){
			$data['news']=$this->admin->get_details('news_tbl');
			$this->load->view('home/news_details',$data);
		}else{
		$array=array();
				$file = $_FILES['userfile'];
				$file_name = $file['name'];
				$file_type = $file ['type'];
				$file_size = $file ['size'];
				$file_path = $file ['tmp_name'];
				if(!empty($file_name)){
					$path='assets/images/event/';
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					$document=time().'.'.$ext;
					$time=time();
					move_uploaded_file($file_path,$path.$document);
				}else{
					$document=$this->input->post('images');
				}
		$array['news_title']=$this->input->post('news_title');
		$array['news_details']=$this->input->post('news_details');
		$array['time']=time();
		$array['images']=$document;
		if(empty($this->input->post('news_date'))){
			$array['news_date']=date('Y-m-d',$array['time']);
		}else{
			$array['news_date']=date('Y-m-d',strtotime($this->input->post('news_date')));
		}
		if(!empty($this->input->post('act'))){
			$where=array('news_id'=>$this->input->post('act'));
		}
		$table='news_tbl';
		$this->admin->insert_details($table,$array,$where);
		redirect('home/news_details');
		}
	}
	public function delete_news($data_id){
		$where=array('news_id'=>base64_decode($data_id));
		$table='news_tbl';
		$this->admin->delete_data($table,$where);
		redirect('home/news_details');
	}

	/* Applied Person */
	public function applied_person(){
		if(isset($this->session->userdata['logged_in'])){
			$data['person']=$this->admin->get_details_job_persons();
			//echo "<pre>";
			//echo date("Y-m-d",$data['person'][0]['time']);
			//exit();
			$this->load->view('admin/applied_person',$data);
		}else{
			redirect();
		}
	}

	public function delete_applied_person_old($data_id){
		$where=array('apply_id'=>base64_decode($data_id));
		$table='applied_person';
		$this->admin->delete_data($table,$where);
		redirect('home/applied_person');
	}

	public function delete_applied_person($data_id){		
		$this->admin->soft_delete(base64_decode($data_id), 'apply_id', 'applied_person');
		redirect('home/applied_person');
	}

	public function check_data(){
		$where=array('sequence_by'=>$this->input->post('data_id'));
		$table="carrier_details";
		$da=$this->admin->match_data($table,$where);
		if($da){
			echo "true";
		}else{
			echo "false";
		}
	}

	/* backup Applied Persons data */
	public function backup_applied_person_data(){
		if(isset($this->session->userdata['logged_in'])){
			$data['person']=$this->admin->backup_applied_person_data();
			$this->load->view('admin/backup_applied_person_data',$data);
		}else{
			redirect();
		}
	}


	/* Insert Physician */
	public function physician_details($data_id=null){
		if(isset($this->session->userdata['logged_in'])){
		$array=array('physician_id'=>base64_decode($data_id));
		$data['update_phy']=$this->admin->get_details('physician_details',$array);
		$data['physician']=$this->admin->get_details('physician_details');
		$this->load->view('admin/physician_details',$data);
		}else{
			redirect();
		}
	}


	

		public function insert_physician(){

		$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('physician_name','Name','required');
		$this->form_validation->set_rules('physician_speciality','Speciality','required');
		// if(empty($this->input->post('act'))){
		// 	$this->form_validation->set_rules('physician_email','Email','required|trim|is_unique[admin.admin_email]');
		// }
		if(empty($this->input->post('act'))){
			$this->form_validation->set_rules('physician_email','Email','required|trim|callback_check_user');
		}
		$this->form_validation->set_rules('physician_discription','Description','');
		$this->form_validation->set_rules('act','','');
		if($this->form_validation->run()==FALSE){
			$data['physician']=$this->admin->get_details('physician_details');
			$this->load->view('admin/physician_details',$data);
		}else{

			 	$file = $_FILES['userfile'];
				$file_name = $file['name'];
				$file_type = $file ['type'];
				$file_size = $file ['size'];
				$file_path = $file ['tmp_name'];
				if(!empty($file_name)){
					$path='assets/images/event/';
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					$document=time().'.'.$ext;
					$time=time();
					move_uploaded_file($file_path,$path.$document);
				}else{
					$document=$this->input->post('images');
				}
			
		$array=array();
		$array['physician_name']=$this->input->post('physician_name');
		$array['physician_speciality']=$this->input->post('physician_speciality');
		$array['physician_discription']=$this->input->post('physician_discription');
		$array['physician_email']=$this->input->post('physician_email');
		$array['time']=time();
		$array['images']=$document;
		if(!empty($this->input->post('act'))){
			$where=array('physician_id'=>$this->input->post('act'));
		}

		$table='physician_details';
		$this->admin->insert_details($table,$array,$where);
		
		//user name and password for physician
		if(empty($this->input->post('act'))){
		$tabl1="admin";
		$rand=rand(10000,99999);
		$phy=array('admin_email'=>$this->input->post('physician_email'),'admin_password'=>$rand,'access'=>'physician','full_name'=>$this->input->post('physician_name'),'time'=>time());
		$this->admin->insert_details($tabl1,$phy);

		// mail
		$this->load->library('email');
		// $this->email->from('your@example.com', 'Your Name');
		// $this->email->to($this->input->post('physician_email'));
		

		// $this->email->subject('Login Credencial');
		// $this->email->message("User Name: ".$this->input->post('physician_email')."\n"."password:".$rand."\n click On: https://cmclancaster.com/login/");

		// $this->email->send();
		$to =$this->input->post('physician_email');
        $subject="Login Credencial";
        $msg .="User Name: ".$this->input->post('physician_email')."\n";
        $msg .="password:".$rand."\n";
        $msg .="click On: https://cmclancaster.com/";
        mail($to,$subject,$msg);
		}else{
		$tabl1="admin";
		$phy=array('full_name'=>$this->input->post('physician_name'),'time'=>time());
		$wher=array('admin_email'=>$this->input->post('physician_email'));
		$this->admin->insert_details($tabl1,$phy,$wher);
		}
		redirect('home/physician_details');
		}
	}
	
	function check_user(){
		$array=array('admin_email'=>$this->input->post('physician_email'),'access'=>'physician');
		$table="admin";
		$data =$this->admin->get_details($table,$array);
		if(!empty($data)){
			return false;
		}else{
			return true;
		}
	}
	public function delete_physician($data_id){
		$where=array('physician_id'=>base64_decode($data_id));
		$table='physician_details';

		//  Delete Admin Athoority
		$get=$this->admin->get_details($table,$where);
		$del_admin=array('admin_email'=>$get[0]['physician_email'],'access'=>'physician');
		$this->admin->delete_data('admin',$del_admin);
		
		// Delte physician Athority
		$this->admin->delete_data($table,$where);
		redirect('home/physician_details');
	}
	public function physician_person($data_id=null){
			//echo rtrim(base64_encode('lamp@gmicro.us'),'==');
			if($data_id!=''){
			$array=array('physician_email'=>base64_decode($data_id));
			$data['update_phy']=$this->admin->get_details('physician_details',$array);
			//$data['physician']=$this->admin->get_details('physician_details');
			}else{
			$data='';
		}
			$this->load->view('admin/physician_person',$data);
	}
	public function insert_person(){

		$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('physician_name','Name','required');
		$this->form_validation->set_rules('physician_speciality','Speciality','required');
		$this->form_validation->set_rules('physician_email','Email','required|trim');
		$this->form_validation->set_rules('physician_discription','Description','');
		$this->form_validation->set_rules('act','','');
		if($this->form_validation->run()==FALSE){
			$data['physician']=$this->admin->get_details('physician_details');
			$this->load->view('admin/physician_person',$data);
		}else{

			 	$file = $_FILES['userfile'];
				$file_name = $file['name'];
				$file_type = $file ['type'];
				$file_size = $file ['size'];
				$file_path = $file ['tmp_name'];
				if(!empty($file_name)){
					$path='assets/images/event/';
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					$document=time().'.'.$ext;
					$time=time();
					move_uploaded_file($file_path,$path.$document);
				}else{
					$document=$this->input->post('images');
				}
			
		$array=array();
		$array['physician_name']=$this->input->post('physician_name');
		$array['physician_speciality']=$this->input->post('physician_speciality');
		$array['physician_discription']=$this->input->post('physician_discription');
		$array['physician_email']=$this->input->post('physician_email');
		$array['time']=time();
		$array['images']=$document;
		if(!empty($this->input->post('act'))){
			$where=array('physician_email'=>$this->input->post('act'));
		}
		$table='physician_details';
		$this->admin->insert_details($table,$array,$where);
		$this->load->view('admin/thank');
		
		}
	}

	// Check Message
	public function check_message(){
		$where=array('apply_id'=>$this->input->post('apply_id'));
		$table="applied_person";
		$data=$this->admin->get_details($table,$where)[0];
		echo "<p>".$data['message']."</p>";

	}

	public function check_news_message(){
		$where=array('news_id'=>$this->input->post('news_id'));
		$table="news_tbl";
		$data=$this->admin->get_details($table,$where)[0];
		echo "<p>".$data['news_details']."</p>";
	}
	public function check_event_message(){
		$where=array('event_id'=>$this->input->post('event_id'));
		$table="event_tbl";
		$data=$this->admin->get_details($table,$where)[0];
		echo "<p>".$data['event_details']."</p>";
	}
	// Global Function 
	public function get_data($table,$from,$to,$data){
		return $this->admin->get_data($table,$from,$to,$data);
	}
	public function create_user($data_id=null){
		if(isset($this->session->userdata['logged_in'])){
		$array=array('admin_id'=>base64_decode($data_id));
		$data['update_admin']=$this->admin->get_details('admin',$array);
		$where=array('access'=>'User');
		$data['admin_de']=$this->admin->get_details('admin',$where);
		$this->load->view('admin/user_details',$data);
		}else{
			redirect();
		}
		
	}
	public function insert_admin(){
		$this->form_validation->set_error_delimiters('<div style="color:red" role="alert">', '</div>');
		$this->form_validation->set_rules('full_name','Full Name','required');
		// if(empty($this->input->post('act'))){
		// 	$this->form_validation->set_rules('admin_email','User Name','required|is_unique[admin.admin_email]');
		// }
		if(empty($this->input->post('act'))){
			$this->form_validation->set_rules('admin_email','User Name','required|callback_check_subadmin');
		}
		$this->form_validation->set_rules('admin_password','Password','required');
		$this->form_validation->set_rules('act','','');
		
		if($this->form_validation->run()==FALSE){
			$where=array('access'=>'User');
			$data['admin_de']=$this->admin->get_details('admin',$where);
			$this->load->view('admin/user_details',$data);
		}else{
		$array=array();
		$array['full_name']=$this->input->post('full_name');
		$array['admin_email']=$this->input->post('admin_email');
		$array['admin_password']=$this->input->post('admin_password');
		$array['admin_id']=$this->input->post('act');
		$array['time']=time();
		$array['access']='User';
		if(!empty($this->input->post('act'))){
			$where=array('admin_id'=>$this->input->post('act'));
		}
		$table='admin';
		$this->admin->insert_details($table,$array,$where);
		redirect('home/create_user');
		}
	}

	function check_subadmin(){
		$array=array('admin_email'=>$this->input->post('admin_email'),'access'=>'User');
		$table="admin";
		$data =$this->admin->get_details($table,$array);
		if(!empty($data)){
			return false;
		}else{
			return true;
		}
		

	}
	public function delete_user($data_id){
		
		$where=array('admin_id'=>base64_decode($data_id));
		$table='admin';
		$this->admin->delete_data($table,$where);
		redirect('home/create_user');
	
	}
	public function logout(){
		
		$this->session->unset_userdata('logged_in');   
		$this->session->sess_destroy();
		redirect();
		
	}
	public function subscribe_mail(){
		if(isset($this->session->userdata['logged_in'])){
		
		$data['mail']=$this->admin->get_details('subscribe_mail');
		$this->load->view('admin/subscribe_person',$data);
		}else{
			redirect();
		}
	}
	public function delete_mail($data_id){
		$where=array('id'=>base64_decode($data_id));
		$table='subscribe_mail';
		$this->admin->delete_data($table,$where);
		redirect('home/subscribe_mail');
	}
	public function import_data(){
		if (isset($_REQUEST['submit'])) 
		{
		    $file = $_FILES['upload']['tmp_name'];
		    $handle = fopen($file, "r");
		    if($file == NULL) {
		      error(_('Please select a file to import'));
		      redirect(page_link_to('admin_export'));
		    }
		    else{
		    		echo "<pre>";
		    		$phy=array();
		    		$admin_phy=array();
		    		$i=0;
			      while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			        {
			          	if($i!=0){
			        	$phy[]=array('physician_name'=>$filesop[0],'physician_speciality'=>$filesop[1],'physician_email'=>$filesop[2],'physician_discription'=>$filesop[3],'time'=>time());
			        	$rnd=rand(10000,99999);
			        	$admin_phy[]=array('admin_email'=>$filesop[2],'admin_password'=>$rnd,'access'=>'physician','full_name'=>$filesop[0],'time'=>time());
						
						$msg= "";
					   	$to=$filesop[2];
					   	$subject="Credencial For Login";
					   	$msg .="User Name: ".$filesop[2]."\n";
					    $msg .="password:".$rnd."\n";
					    $msg .="click On: https://cmclancaster.com/";
					   	mail($to,$subject,$msg);
			        	}
			        	$i++;
			   		 }
			   		$this->db->insert_batch('physician_details',$phy);
			   		$this->db->insert_batch('admin',$admin_phy);
			   		redirect('home/physician_details');
		 		}
		}
	}

	public function export_subscribe(){
			$pers=$this->admin->get_details('subscribe_mail');
			$data = "First Name,Last Name,Email Id,Date\n";
			foreach ($pers as $key => $value) {
				$data .=$value['first_name'].",".$value['last_name'].",".$value['email_id'].",". date('d-m-Y',$value['time']) ."\n";
			}
			
			header('Content-Type: application/csv');
			header('Content-Disposition: attachment; filename="subscribe_person.csv"');
			echo $data; exit();
	}
	public function download_formate(){
		$data ="Physician Name * ,Speciality *,Email Id *,Description\n";
		header('Content-Type: application/csv');
		header('Content-Disposition: attachment; filename="physician_list.csv"');
		echo $data; exit();
}

	// public function blog(){
	// 	$this->load->view('blog');
	// }
	
	// public function subsribe(){
	// 	$this->form_validation->set_rules('semail','email','trim|required|valid_email|strip_tags');
	// 	if($this->form_validation->run() == false){
	// 		$this->load->view('index');
	// 	}
	// 	else{
	// 		$semail = $this->input->post('semail');
	// 		$array = array('email' => $semail, 'date' => time());
	// 		if($this->super->subsribe($array)){
	// 			redirect('home/');
	// 		}
	// 		else{
	// 			redirect('home/');
	// 		}
	// 	}	
	// }

	// public function checkusername(){
	// 	if(isset($_POST)){
	// 		if(!empty($_POST['uname'])){
	// 			$this->load->model('super');
	// 			if($this->super->checkemailusername($_POST['uname'])){
	// 				echo 'found';
	// 			}
	// 			else{
	// 				echo 'notfound in db';
	// 			}
	// 		}
	// 		else{
	// 			echo 'value is empty';
	// 		}
	// 	}
	// 	else{
	// 		echo 'value is not set';
	// 	}
	// }

	// public function privacypolicy(){
	// 	$this->load->view('privacypolicy');
	// }
	
	// public function refundandcancel(){
	// 	$this->load->view('refundandcancel');
	// }

	// public function termsandcon(){
	// 	$this->load->view('termsandcon');
	// }

	public function error(){
		if(isset($this->session->userdata['individual'])){
			$array = array('username' => $this->session->userdata['individual']['uname'], 'uniqid' => $this->session->userdata['individual']['id']);
			$data['userdata'] = $this->userm->userdata($array);
			$this->load->view('error2.php',$data);
		}
		elseif(isset($this->session->userdata['employee'])){
			$array = array('username' => $this->session->userdata['employee']['uname'], 'uniqid' => $this->session->userdata['employee']['id']);
			$data['userdata'] = $this->employeem->userdata($array);
			$this->load->view('error2.php',$data);
		}
		elseif(isset($this->session->userdata['candidate'])){
			$array = array('username' => $this->session->userdata['candidate']['uname'], 'uniqid' => $this->session->userdata['candidate']['id']);
			$data['userdata'] = $this->employeem->userdata1($array);
			$this->load->view('error2.php',$data);
		}
		elseif(isset($this->session->userdata['superadmin'])){
			$array = array('username' => $this->session->userdata['superadmin']['uname'], 'uniqid' => $this->session->userdata['superadmin']['id']);
			$data['profile'] = $this->super->profile($array);
			$this->load->view('error2.php',$data);
		}
		elseif(isset($this->session->userdata['admin'])){
			$array = array('username' => $this->session->userdata['admin']['uname'], 'uniqid' => $this->session->userdata['admin']['id']);
			$data['userdata'] = $this->adminm->userdata($array);
			$this->load->view('error2.php',$data);
		}
		else{
			$this->load->view('error.php');
		}
	}
} 
?>