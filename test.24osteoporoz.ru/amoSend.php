<? 
session_start();
include 'amo.php';

$amo = new Amo;


$status1 = 14584798;
$status2 = 14584801;

$fields = array(
	'inputName' => '476033',  //
	'question7' => '476037',  // mob
	'question_middle1' => '476041',  // podtv uchast
	'question8' => '476107',  // diplom
	'inputPlace' => '476043',  // work place
	'inputDolj' => '476047',  // doljnost
	'inputMail' => '476049',  //
	'inputPhone' => '476055',  //
	'question13' => '476057',  // Есть ли платные
	'question_middle2' => '476059',  // podtv uchast 2
	'question14' => '476063',  // podpiska
);

$fields2 = array(
	'inputName' => '476033',  //
	'question7' => '477329',  // mob
	'question_middle1' => '476041',  // podtv uchast
	'question8' => '477343',  // diplom
	'inputPlace' => '477515',  // work place
	'inputDolj' => '456307',  // doljnost //
	'inputMail' => '456311',  // ///
	'inputPhone' => '456309',  // ///
	'question13' => '477345',  // Есть ли платные
	'question_middle2' => '476059',  // podtv uchast 2
	'question14' => '477347',  // podpiska
	'question4' => '477349',  // city
	'question3' => '477355',  // osteo
	'question5' => '477359',  // tejalyy osteo
	'question1' => '477353',  // Специальность
);


	$_SESSION[ $_POST['field'] ] = $_POST['value'];


if(!isset($fields[ $_POST['field'] ])) die;







//print_r($amo->getAccaunt()); die;

if(!isset($_SESSION['amo'])) $_SESSION['amo'] = array();
$_SESSION['amo'][$_POST['field']] = $_POST['value'];

if($_POST['field'] == 'inputName'){
	$res = $amo->add( array('name'=>$_POST['value'], 'status_id'=>$status1) );
	$amo->setField(476033, $_POST['value']);
	$res = $amo->send();
	$_SESSION['leadId'] = $res->leadId;
	echo $res->leadId;
	
	die;
}

$status = $_POST['field'] == 'question14' ? $status2 : $status1;

$amo->update( array('id'=>$_SESSION['leadId'],'name'=>$_POST['leadName'], 'status_id'=>$status) );



$amo->setField($fields[ $_POST['field'] ], $_POST['value']);

if($_POST['field'] == 'question_middle1') $amo->setField('477505', $_POST['value']);
if($_POST['field'] == 'question_middle2') $amo->setField('477509', $_POST['value']);


$amo->send();

if($_POST['field'] == 'question14'){
	
	$data = array('request'=>array( 'contacts' => array('add'=>array() ) ) );
	
	$t = array();
	foreach($fields2 as $k=>$v) if(isset($_SESSION[$k])){ //'enum'=>'WORK'
					$a = array(
							array(
								'value'=> $_SESSION[$k],
							)
						);
						if($v == 456311) $a[0]['enum'] = 'WORK';
						if($v == 456309) $a[0]['enum'] = 'WORK';
		$t[] = array(

						'id'=>$v,
						'values'=>$a
					);
	}
	
	$contacts['request']['contacts']['add']=array(
			array(
				'name' => $_SESSION['amo']['inputName'],
				'linked_leads_id' => array($_SESSION['leadId']),
				'custom_fields' => $t
				)
		);
	$amo->getData('v2/json/contacts/set', $contacts);
}
