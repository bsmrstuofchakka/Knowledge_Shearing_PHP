<?php

	Class format{
		public function formatDate($date){
			return date('F j, Y, g:i a',strtotime($date));
		}

		public function textShorten($content , $limit=200){
			$content = $content. " ";
			$content = substr($content, 0, $limit);
			$content = substr($content, 0, strrpos($content, ' '));
			$content = $content. ".......";
			return $content;
		}

		public function validation($data){
			$data =trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	}

?>