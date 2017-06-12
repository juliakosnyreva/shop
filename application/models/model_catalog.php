<?php

class Model_Catalog extends Model {
	
	public function get_list() {	
	
		 $sql = "SELECT * FROM product";
		 $result = mysql_query($sql);

		while ($row = mysql_fetch_assoc($result)) {		 
			$сatalogProducts[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"price"=>$row['price']		
			);
		}
		
		return $сatalogProducts;
	}

}
