<?php
App::uses('AppController', 'Controller');

class GraphDatasController extends AppController {
	
	public function index() {
		$counter = 0;
		$row = 1;
		$this->loadModel('GraphData');
		if (($handle = fopen("files/kosendata.csv", "r")) !== FALSE) {
		$data = fgetcsv($handle, 1000, ",");
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $data = array(
				    'GraphData' => array(
				        'name' => $data[0],
				        'gender' => $data[1],
				        'location' => $data[2],
				        'major' => $data[3],
				        'kosen_kanji' => $data[4],
				        'kosen_roman' => $data[5],
				        'kosen_year' => $data[6],
				        'phone_number' => $data[7],
				        'mail' => $data[8],
				        'uni' => $data[9]
				    )
				);
				$this->GraphData->create();
				$this->GraphData->save($data);
				$counter++;
		    }
		    fclose($handle);
		}
		$this->set('data', $counter);
	}

}
