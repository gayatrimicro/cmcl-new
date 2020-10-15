<?php  


class Testresult extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('result');
	}

	public function index(){

		if(isset($_POST['testname'])){
			if(!empty($_POST['testname'])){
				$function = ($this->input->post('testname')).'result';
				if($this->$function($_POST)){
					redirect('user/remainingtest');
				}
				else{
					redirect('home');
				}
			}
			else{
				redirect('home');
			}
		}
		else{
			redirect('home');
		}
	}

	public function ptwresult($data)
	{
		if(count($data['option'])){
			$group_1 = array();$group_2 = array();$group_3 = array();$group_4 = array();$arr_val = array();$option_1 = array();$option_11 = array();$report = array();$option_2 = array();$option_21 = array();$option_31 = array();$option_41 = array();$option_51 = array();$option_61 = array();$option = array();
			$i=1;
			foreach ($data['option'] as $key => $value) {
				$arr_val[] = $value;
				if($value==2){
					$opt=2;
				}
				else{
					$opt=1;
				}
				$option[] = $opt;
				$i++;
			}
			$arr_chunk=array_chunk($arr_val,4);
			$count=count($arr_chunk);
			$a=1;
			foreach($arr_chunk as $key=>$value){
				if($value[0]==1){
					$option_1[]=1;
					$option_2[]=0;
				}
				else{
					$option_1[]=0;
					$option_2[]=1;
					
				}
				if($value[1]==1){
					$option_11[]=1;
					$option_21[]=0;
						
				}
				else{
					$option_11[]=0;
					$option_21[]=1;
					
				}
				if($value[2]==1){
					$option_31[]=1;
					$option_41[]=0;
						
				}
				else{
					$option_31[]=0;
					$option_41[]=1;
					
				}
				if($value[3]==1){
					$option_51[]=1;
					$option_61[]=0;
						
				}
				else{
					$option_51[]=0;
					$option_61[]=1;
					
				}
			}
			$group_1[]=array_sum($option_1);
			$group_1[]=array_sum($option_2);
			
			$group_2[]=array_sum($option_11);
			$group_2[]=array_sum($option_21);
			
			$group_3[]=array_sum($option_31);
			$group_3[]=array_sum($option_41);
			
			$group_4[]=array_sum($option_51);
			$group_4[]=array_sum($option_61);
			
			$report[]=$group_1;
			$report[]=$group_2;
			$report[]=$group_3;
			$report[]=$group_4;
			$result="";
			$report_latter=array("E","I","S","N","T","F","J","P");
			$i=0;
			foreach($report as $key=>$value){
				if($value[0]>$value[1]){
					$result.=$report_latter[$i];
					$i=$i+2;
				}
				else{	
					$i=$i+1;
					$result.=$report_latter[$i];
					$i=$i+1;
				}
			}
			if(!empty($result)){
				if(count($option) == 124){
					if(isset($this->session->userdata['individual'])){
						$date = date('Y-m-d');
						$time = time();
						$option = implode(',',$option);
						$uniqid = uniqid().rand(0,9999);
						$array = array('userid' => $this->session->userdata['individual']['id'], 'username' => $this->session->userdata['individual']['uname'],'testid' => base64_decode($this->input->post('testid')), 'testname' => $this->input->post('testname'), 'testdate' => $date, 'testtime' => $time, 'testoptions' => $option, 'resultuniqid' => $uniqid);
						$this->result->insertoptionind($array);
						if(!empty($result)){
							$arrayresult = array('userid' => $this->session->userdata['individual']['id'], 'username' => $this->session->userdata['individual']['uname'],'testid' => base64_decode($this->input->post('testid')), 'testname' => $this->input->post('testname'), 'testdate' => $date, 'testtime' => $time, 'testresult' => $result, 'resultuniqid' => $uniqid);
							if($this->result->insertresultind($arrayresult)){
								$where = array('userid' => $this->session->userdata['individual']['id'], 'username' => $this->session->userdata['individual']['uname'],'testid' => base64_decode($this->input->post('testid')));
								if($count = $this->result->gettotaltest('testdetailsindividual',$where)){
									$qty = $count-1;
									$set = array('testqty' => $qty);
									$this->result->updatetestqty('testdetailsindividual',$where,$set);
								}
								return true;
							}
							else{
								return false;
							}
						}	
						else{
							return false;
						}
					}
					if(isset($this->session->userdata['employee']))
					{
						$date = date('Y-m-d');
						$time = time();
						$option = implode(',',$option);
						$uniqid = uniqid().rand(0,9999);
						$array = array('userid' => $this->session->userdata['employee']['id'], 'username' => $this->session->userdata['employee']['uname'],'testid' => base64_decode($this->input->post('testid')), 'testname' => $this->input->post('testname'), 'testdate' => $date, 'testtime' => $time, 'testoptions' => $option, 'resultuniqid' => $uniqid);
						$this->result->insertoptionind($array);
						if(!empty($result))
						{
							$arrayresult = array('userid' => $this->session->userdata['employee']['id'], 'username' => $this->session->userdata['employee']['uname'],'testid' => base64_decode($this->input->post('testid')), 'testname' => $this->input->post('testname'), 'testdate' => $date, 'testtime' => $time, 'testresult' => $result, 'resultuniqid' => $uniqid,'orgid' => $this->input->post('orgid'),'usertype' => $this->input->post('usertype'));

							if($this->result->insertresultorg($arrayresult))
							{
								$where = array('userid' => $this->session->userdata['employee']['id'],'testid' => base64_decode($this->input->post('testid')));
								if($count = $this->result->gettotaltest('assigntestempcan',$where)) 
								{
									
									$qty = $count-1;
									$set = array('testqty' => $qty);
									$this->result->updatetestqtyemp('assigntestempcan',$where,$set);
								}
								return true;
							}
							else
							{
								return false;
							}
						}	
						else
						{
							return false;
						}
					}

					if(isset($this->session->userdata['candidate'])){
						$date = date('Y-m-d');
						$time = time();
						$option = implode(',',$option);
						$uniqid = uniqid().rand(0,9999);
						$array = array('userid' => $this->session->userdata['candidate']['id'], 'username' => $this->session->userdata['candidate']['uname'],'testid' => base64_decode($this->input->post('testid')), 'testname' => $this->input->post('testname'), 'testdate' => $date, 'testtime' => $time, 'testoptions' => $option, 'resultuniqid' => $uniqid);
						$this->result->insertoptionind($array);
						if(!empty($result))
						{
							$arrayresult = array('userid' => $this->session->userdata['candidate']['id'], 'username' => $this->session->userdata['candidate']['uname'],'testid' => base64_decode($this->input->post('testid')), 'testname' => $this->input->post('testname'), 'testdate' => $date, 'testtime' => $time, 'testresult' => $result, 'resultuniqid' => $uniqid,'orgid' => $this->input->post('orgid'),'usertype' => $this->input->post('usertype'));

							if($this->result->insertresultorg($arrayresult))
							{
								$where = array('userid' => $this->session->userdata['candidate']['id'],'testid' => base64_decode($this->input->post('testid')));
								if($count = $this->result->gettotaltest('assigntestempcan',$where)) 
								{									
									$qty = $count-1;
									$set = array('testqty' => $qty);
									$this->result->updatetestqtyemp('assigntestempcan',$where,$set);
								}
								return true;
							}
							else
							{
								return false;
							}
						}	
						else
						{
							return false;
						}
					}

				}
			}
		}
		else
		{
			return false;
		}
	} 


	public function etiresult($data)
	{
		/*$userid = $this->session->userdata['individual']['id'];
		$username = $this->session->userdata['individual']['uname'];*/
		$testid = base64_decode($this->input->post('testid')); 
		$testname = strtoupper($this->input->post('testname'));
		$date = date('Y-m-d');
		$time = time();

		$option = implode(',',$data['option']);
		$arr_dim = array();
		$arr_dim['REALISTIC ORIENTATION'] = "";
		$arr_dim['SELF ASSERTION'] = "";
		$arr_dim['IMPULSE CONTROL'] = "";
		$arr_dim['EMPATHY'] = "";
		$arr_dim['COMMUNICATION N CO-OPERATION'] = "";
		$arr_dim['OPTIMISM'] = "";
		$arr_dim['SELF AWARENESS'] = "";
		$arr_dim['INNOVATIVE/CREATIVE INSTINCTS'] = "";
		$arr_dim['RISK TAKING'] = "";
		$arr_dim['ANALYTICAL'] = "";
		$arr_dim['SOCIAL SELF/EFFECTIVE RELATIONSHIP'] = "";
		$arr_dim['ENTERPRISING /INITIATIVE TAKER'] = "";
		$arr_dim['ARTISTIC'] = "";
		$arr_dim['WELL ADJUSTED'] = "";
		$i=1;
		foreach($data['option'] as $key=>$value){
			if($i==1 || $i==2 || $i==5 || $i==6 || $i==7 || $i==12){
				$arr_dim['REALISTIC ORIENTATION']=$arr_dim['REALISTIC ORIENTATION']+$value;
			}
			if($i==3 || $i==4 || $i==8 || $i==9 || $i==10 || $i==11 || $i==13 || $i==14){
				$arr_dim['SELF ASSERTION']=$arr_dim['SELF ASSERTION']+$value;
			}
			if($i==15 || $i==16 || $i==17 || $i==19 || $i==20 || $i==21 || $i==24 || $i==26){
				$arr_dim['IMPULSE CONTROL']=$arr_dim['IMPULSE CONTROL']+$value;
			}
			if($i==18 || $i==22 || $i==23 || $i==25){
				$arr_dim['EMPATHY']=$arr_dim['EMPATHY']+$value;
			}
			if($i==27 || $i==28 || $i==29 || $i==30 || $i==32 || $i==33 || $i==35 || $i==41){
				$arr_dim['COMMUNICATION N CO-OPERATION']=$arr_dim['COMMUNICATION N CO-OPERATION']+$value;
			}
			if($i==31 || $i==34 || $i==36 || $i==37 || $i==38 || $i==39 || $i==40 || $i==42){
				$arr_dim['OPTIMISM']=$arr_dim['OPTIMISM']+$value;
			}
			if($i==43 || $i==45 || $i==46 || $i==48 || $i==49 || $i==50 || $i==52){
				$arr_dim['SELF AWARENESS']=$arr_dim['SELF AWARENESS']+$value;
			}
			if($i==44 || $i==47 || $i==53 || $i==54 || $i==55 || $i==57){
				$arr_dim['INNOVATIVE/CREATIVE INSTINCTS']=$arr_dim['INNOVATIVE/CREATIVE INSTINCTS']+$value;
			}
			if($i==51 || $i==56 || $i==58 || $i==59 || $i==60 || $i==61){
				$arr_dim['RISK TAKING']=$arr_dim['RISK TAKING']+$value;
			}
			if($i==62 || $i==63 || $i==64 || $i==65 || $i==66 || $i==75){
				$arr_dim['ANALYTICAL']=$arr_dim['ANALYTICAL']+$value;
			}
			if($i==67 || $i==68 || $i==69 || $i==71 || $i==72 || $i==73 || $i==74){
				$arr_dim['SOCIAL SELF/EFFECTIVE RELATIONSHIP']=$arr_dim['SOCIAL SELF/EFFECTIVE RELATIONSHIP']+$value;
			}
			if($i==76 || $i==77 || $i==78 || $i==81 || $i==85){
				$arr_dim['ENTERPRISING /INITIATIVE TAKER']=$arr_dim['ENTERPRISING /INITIATIVE TAKER']+$value;
			}
			if($i==79 || $i==80 || $i==82 || $i==83 || $i==84){
				$arr_dim['ARTISTIC']=$arr_dim['ARTISTIC']+$value;
			}
			if($i==70 || $i==86 || $i==87 || $i==88 || $i==89 || $i==89 || $i==90){
				$arr_dim['WELL ADJUSTED']=$arr_dim['WELL ADJUSTED']+$value;
			}
			$i=$i+1;
		}
		$arr_sum=array_sum($arr_dim);
		$arr_sum=$arr_sum+30;
		if($arr_sum>=0 && $arr_sum<=294){
			$eti_result = "Low";
		}
		elseif($arr_sum>=295 && $arr_sum<=315){
			$eti_result = "Below average";
		}
		elseif($arr_sum>=316 && $arr_sum<=345){
			$eti_result = "Average";
		}
		elseif($arr_sum>=346 && $arr_sum<=390){
			$eti_result = "Above average";
		}
		elseif($arr_sum>=391 && $arr_sum<=428){
			$eti_result = "High";
		}
		elseif($arr_sum>=429){
			$eti_result="Too High";
		}
		$dim_required_score=array(280,295,316,333,345,359,390,409,428);
		$count=count($dim_required_score);
		$j=1;
		$score=0;
		for($i=0;$i<$count;$i++){
			$sum=round(($dim_required_score[$i]+$dim_required_score[$j])/2);
			if($arr_sum==$sum || $arr_sum<=$sum){
				$score=$score+$i;
				break;
			}
			if($arr_sum>$dim_required_score[8]){
				$score=$score+8;
				break;
			}
			if($arr_sum<=280){
				$score=0;
			}
			if($j==8){
				$j=8;
			}
			else{
				$j=$j+1;
			}
		}
		$count=count($dim_required_score);
		$dim_evaluate=array(
		"REALISTIC ORIENTATION"=>array(18,19,20,22,23,25,25,27,29),
		"SELF ASSERTION"=>array(25,27,29,32,33,35,37,39,40),
		"IMPULSE CONTROL"=>array(23,24,26,29,31,32,35,37,40),
		"EMPATHY"=>array(8,9,9,11,12,13,14,15,15),
		"COMMUNICATION N CO-OPERATION"=>array(22,25,28,30,32,34,36,39,40),
		"OPTIMISM"=>array(19,22,25,28,30,33,35,38,40),
		"SELF AWARENESS"=>array(18,22,25,26,28,30,33,34,35),
		"INNOVATIVE/CREATIVE INSTINCTS"=>array(17,19,20,22,23,25,27,28,30),
		"RISK TAKING"=>array(12,15,17,19,21,24,27,30,30),
		"ANALYTICAL"=>array(17,19,21,23,24,26,29,30,30),
		"SOCIAL SELF/EFFECTIVE RELATIONSHIP"=>array(22,23,25,27,28,31,33,35,35),
		"ENTERPRISING /INITIATIVE TAKER"=>array(14,16,17,18,20,21,22,24,25),
		"ARTISTIC"=>array(11,13,14,15,17,19,21,23,25),
		"WELL ADJUSTED"=>array(16,18,19,22,23,25,27,28,30));

		$etiresul['userid'] = $userid;
		$etiresul['username'] = $username;
		$etiresul['testid'] = $testid;
		$etiresul['testname'] = $testname;


		$column_name[] = 'realistic_orientation';
		$column_name[] = 'self_assertion';
		$column_name[] = 'impulse_control';
		$column_name[] = 'empthy';
		$column_name[] = 'comminication_cooperation';
		$column_name[] = 'optimism';
		$column_name[] = 'self_awareness';
		$column_name[] = 'innovation';
		$column_name[] = 'risk_taking';
		$column_name[] = 'analytical';
		$column_name[] = 'social_self';
		$column_name[] = 'enterprising';
		$column_name[] = 'artistic';
		$column_name[] = 'well_adjusted';
		$i = 0; $sum = 0;
		foreach($dim_evaluate as $key=>$value){
			$etiresul[$column_name[$i]]= $value[$score]."/".$arr_dim[$key];
			$sum = $sum+$arr_dim[$key];
			$i++;
		}

		$etiresul['total'] = $sum;
		if(!empty($eti_result)){
			$uniqid = uniqid();
			$arrayresult = array('userid' => $userid, 'username' => $username,'testid' => $testid, 'testname' => $testname, 'testdate' => $date, 'testtime' => $time, 'testresult' => $eti_result, 'resultuniqid' => $uniqid);
			if($this->result->insertresultind($arrayresult)){
				if($this->result->insertetiresult($etiresul)){
					$array = array('userid' => $userid, 'username' => $username,'testid' => $testid, 'testname' => $testname, 'testdate' => $date, 'testtime' => $time, 'testoptions' => $option, 'resultuniqid' => $uniqid);
					if($this->result->insertoptionind($array)){
						$where = array('userid' => $this->session->userdata['individual']['id'], 'username' => $this->session->userdata['individual']['uname'],'testid' => base64_decode($this->input->post('testid')));
						if($count = $this->result->gettotaltest('testdetailsindividual',$where)){
							$qty = $count-1;
							$set = array('testqty' => $qty);
							$this->result->updatetestqty('testdetailsindividual',$where,$set);
						}
					}
				}
				return true;
			}
			else{
				return false;
			}
		}
	}



	public function cptiresult(){
		echo "<pre>";
		$testid = base64_decode($this->input->post('testid')); 
		$testname = strtoupper($this->input->post('testname'));
		$date = date('Y-m-d');
		$time = time();
		$options = implode(',',$_POST['option']);
		$arr_new = array();
		foreach ($_POST['option'] as $key => $value) {
			$arr_new[] = $value;
		}
		$arr_chunk=array_chunk($arr_new,13);
		$arr_sum=array();
		$i=1;
		foreach($arr_chunk as $key=>$value){	
			$arr_sum['Dimension'.$i]=array_sum($value);
			$i=$i+1;
		}
		$max = array_keys($arr_sum, max($arr_sum));
		$arr_dimension=array("Dimension1"=>"PERFECTIONIST","Dimension2"=>"HELPER","Dimension3"=>"ACHIEVER","Dimension4"=>"ROMANTIC","Dimension5"=>"OBSERVER","Dimension6"=>"QUESTIONER","Dimension7"=>"ADVENTURER","Dimension8"=>"ASSERTER","Dimension9"=>"PEACEMAKER");
		$i = 1;
		$this->session->set_userdata('result', '');
		function myfunction($value,$key,$val){
			global $i;
			global $str;
			$i++;
			$str = '';
			$arr_dim=array("Dimension1"=>"PERFECTIONIST","Dimension2"=>"HELPER","Dimension3"=>"ACHIEVER","Dimension4"=>"ROMANTIC","Dimension5"=>"OBSERVER","Dimension6"=>"QUESTIONER","Dimension7"=>"ADVENTURER","Dimension8"=>"ASSERTER","Dimension9"=>"PEACEMAKER");
			if($value == $val){
				$CI = @get_instance();
				$result = $CI->session->userdata['result'].$arr_dim[$key].',';
				$CI->session->set_userdata('result', $result);
			}
 		}
		$str=array_walk($arr_sum,"myfunction",$arr_sum[$max[0]]);
		$result = rtrim($this->session->userdata['result'],',');
		if($this->isloggedin())
		{
			$userid = $this->session->userdata['individual']['id'];
			$username = $this->session->userdata['individual']['uname'];
			$uniqid = uniqid();
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $testid, 'testname' => $testname, 'testoptions' => $options, 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid);
			$this->result->insertoptionind($array);
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $testid, 'testname' => $testname, 'testresult' => $result, 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid);
			if($this->result->insertresultind($array)){
				$where = array('userid' => $userid, 'username' => $username,'testid' => $testid);
				if($count = $this->result->gettotaltest('testdetailsindividual',$where)){
					$qty = $count-1;
					$set = array('testqty' => $qty);
					$this->result->updatetestqty('testdetailsindividual',$where,$set);
				}
				return true;
			}
			else{
				return false;
			}
		}
		if($this->isloggedinemployee())
		{
			//echo $this->getlogintype();die;
			$userid = $this->session->userdata['employee']['id'];
			$username = $this->session->userdata['employee']['uname'];
			$uniqid = uniqid();
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $testid, 'testname' => $testname, 'testoptions' => $options, 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid);
			$this->result->insertoptionind($array);
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $testid, 'testname' => $testname, 'testresult' => $result, 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid,'orgid' => $this->input->post('orgid'),'usertype' => $this->input->post('usertype'));
			if($this->result->insertresultorg($array))
			{
				$where = array('userid' => $userid,'testid' => $testid);
				if($count = $this->result->gettotaltest('assigntestempcan',$where))
				{
					$qty = $count-1;
					$set = array('testqty' => $qty);
					$this->result->updatetestqty('assigntestempcan',$where,$set);
				}
				return true;
			}
			else
			{
				return false;
			}
		}
		if($this->isloggedincandidate())
		{
			//echo $this->getlogintype();die;
			$userid = $this->session->userdata['candidate']['id'];
			$username = $this->session->userdata['candidate']['uname'];
			$uniqid = uniqid();

			$array = array('userid' => $userid, 'username' => $username, 'testid' => $testid, 'testname' => $testname, 'testoptions' => $options, 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid);

			$this->result->insertoptionind($array);
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $testid, 'testname' => $testname, 'testresult' => $result, 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid,'orgid' => $this->input->post('orgid'),'usertype' => $this->input->post('usertype'));
			
			if($this->result->insertresultorg($array))
			{
				$where = array('userid' => $userid,'testid' => $testid);
				if($count = $this->result->gettotaltest('assigntestempcan',$where))
				{
					$qty = $count-1;
					$set = array('testqty' => $qty);
					$this->result->updatetestqty('assigntestempcan',$where,$set);
				}
				return true;
			}
			else
			{
				return false;
			}
		}
	}

}


?>