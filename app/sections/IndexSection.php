<?php
class IndexSection extends AbstractSection {
	
	public function runGetMethod($params) {

		header("Content-type: application/json");

		echo json_encode(array('a' => 'b'));
	}
}