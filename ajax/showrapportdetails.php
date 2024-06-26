<?php


$array = ['data' => [], 'colors' => [], 'labels' => [], 'chartshow' => false];

if(!fh_access("rapport") || !fh_access("export")){
	$array['type'] = "error";
	$array['alert'] = fh_alerts($lang['alerts']['permission'], "danger");
	echo json_encode($array);
	exit;
} elseif(!db_rows("answers WHERE id = '{$id}' && author = '".us_id."'") && us_level != 6){
	$array['type'] = "error";
	$array['alert'] = fh_alerts($lang['alerts']['wrong'], "danger");
	echo json_encode($array);
	exit;
} else {
	$array['type'] = "success";
}


$a_type     = db_get("answers", "type", $id);
$a_survey   = db_get("answers", "survey", $id);
$a_question = $s ? $s : db_get("answers", "question", $id);
$a_type     = !$a_type ?  db_get("questions", "type", $s) : $a_type;
$a_step     = db_get("answers", "step", $id);
$a_val      = db_get("responses", "response", $id, "answer");
$a_ratrows = db_get("questions", "crows", $a_question);

if($a_type == 'rating'){
	for($x=$a_ratrows;$x>=1;$x--){
		$array['data'][] = db_rows("responses WHERE answer = '{$id}' && response = '{$x}'");
		$colors = randomColor();
		$array['colors'][] = "#".$colors['hex'];
		$array['labels'][] = $x;
	}
	$array['chartshow'] = true;
} elseif($a_type == 'scale'){
	for($x=10;$x>=1;$x--){
		$array['data'][] = db_rows("responses WHERE answer = '{$id}' && question = '{$a_question}' && response = '{$x}'");
		$colors = randomColor();
		$array['colors'][] = "#".$colors['hex'];
		$array['labels'][] = $x;
	}
	$array['chartshow'] = true;
} elseif(in_array($a_type, ["checkbox","radio", "dropdown", "image"])){
	$array['id'] = '';

	$a_count = db_rows("answers WHERE survey = '{$a_survey}' && step = '{$a_step}' && question = '{$a_question}'");
	$sql_a = $db->query("SELECT * FROM ".prefix."answers WHERE survey = '{$a_survey}' && step = '{$a_step}' && question = '{$a_question}' ORDER BY id ASC") or die ($db->error);
	while($rs_a = $sql_a->fetch_assoc()){
		$array['data'][] = db_rows("responses WHERE answer = '0' && response LIKE  '%{$rs_a['id']}%' GROUP BY token_id ORDER BY MAX(id) ASC", "MAX(id)");
		$array['labels'][] = $rs_a['title'];
		$array['colors'][] = "".$flatColors[array_rand($flatColors)];
		$array['id'] .= $rs_a['id'].' / ';
	}
	$array['chartshow'] = true;
} elseif($a_type == 'file'){
	$sql_rr = $db->query("SELECT MAX(survey) as msurvey, MAX(step) as mstep, MAX(question) as mquestion, token_id, response FROM ".prefix."responses WHERE question = '{$a_question}' && response != '' GROUP BY token_id ORDER BY MAX(id) ASC") or die ($db->error);
	$uu = '';
	while($rs_rr = $sql_rr->fetch_assoc()){
		$uu .= path.'/'.$rs_rr['response'];
	}
	$array['data'][] = rtrim($uu, ', ');
} elseif($a_type == 'country'){
	$sql_rr = $db->query("SELECT MAX(survey) as msurvey, MAX(step) as mstep, MAX(question) as mquestion, token_id, response FROM ".prefix."responses WHERE question = '{$s}' && response != '' GROUP BY token_id ORDER BY MAX(id) ASC") or die ($db->error);
	$uu = '';
	while($rs_rr = $sql_rr->fetch_assoc()){
		$uu .= $countries[$rs_rr['response']];
	}
	$array['data'][] = rtrim($uu, ', ');
} else {
	$a_count = db_rows("answers WHERE survey = '{$a_survey}' && step = '{$a_step}' && question = '{$a_question}'");
	$sql_a = $db->query("SELECT MAX(id) as aid FROM ".prefix."answers WHERE survey = '{$a_survey}' && step = '{$a_step}' && question = '{$a_question}' GROUP BY question ORDER BY MAX(id) ASC") or die ($db->error);
	while($rs_a = $sql_a->fetch_assoc()){

		$sql_r = $db->query("SELECT MAX(survey) as msurvey, MAX(step) as mstep, MAX(question) as mquestion, token_id FROM ".prefix."responses WHERE answer = '{$rs_a['aid']}' && response != '' GROUP BY token_id ORDER BY MAX(id) ASC") or die ($db->error);
		while($rs_r = $sql_r->fetch_assoc()){
			$sql_rr = $db->query("SELECT * FROM ".prefix."responses WHERE survey = '{$rs_r['msurvey']}' && step = '{$rs_r['mstep']}' && question = '{$rs_r['mquestion']}' && token_id = '{$rs_r['token_id']}' && response != '' ORDER BY id ASC") or die ($db->error);
			$uu = '';
			while($rs_rr = $sql_rr->fetch_assoc()){
				$att = db_get("answers", "type", $rs_rr['answer']);
				$vlee = ( $att == "phone" ? '(+'.$phones[substr($rs_rr['response'], 0, 2)]['code'].') '.substr($rs_rr['response'], 2, -1) : ( $att == "country" ? $countries[$rs_rr['response']] : $rs_rr['response'] ) );
				$uu .= $sql_rr->num_rows>1 ? db_get("answers", "title", $rs_rr['answer']).": ".$vlee.', ' : $vlee;
			}
			$array['data'][] = rtrim($uu, ', ');
		}
		$array['id'] = $rs_a['aid'].' / ';
	}

}

$array['tt'] = $a_type;

echo json_encode($array);
