<?php


    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/json/courses.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

    $exec = curl_exec($curl);
    curl_close($curl);

    //print_r(json_decode($exec));
	$data = json_decode($exec);

	foreach ($data as $key => $value)
	{

		echo 'ID: '. $value->id;
		echo '<br>';

		echo 'TITlE: '. $value->c_title;
		echo '<br>';

		echo 'DETAIL: '. $value->c_detail;
		echo '<br>';

		echo 'DATE: '. $value->c_date;
		echo '<br>';
		

		echo 'VIEW: '. $value->c_view;
		echo '<br>';
		echo '<a href="request_cmtc_detail.php?id='. $value->id.' ">คลิ๊กเพื่อดูขู้อมูล </a>';
		echo '<hr>';

		
	}

	//echo var_dump(json_decode($exec));

?>