<?php

namespace App\Helpers;

class APIHelpers {

	public static function createAPIResponse($is_error, $code, $message, $content){
		
		$result = []; //defined empty array to store information

		// Checking here if "is_error" parameter is true or false
		if($is_error){
			$result['success'] = false;
			$result['code'] = $code;
			$result['message'] = $message;
		}else{

			$result['success'] = true;
			$result['code'] = $code;

				// Checking if content is null or not
				if($content == null){
					$result['message'] = 'No records found.';	
				}else{
					$result['data'] = $content;	
				}
		}

		return $result;

	}
}


?>