<?

class Data {

	public static function data_BR_USA($data){
		// dd/mm/aaaa
		$exp = explode('/',$data);
		$aux = $exp[2]."-".$exp[1]."-".$exp[0];
		return $aux;
	}

	public static function data_USA_BR($data){
		// aaaa-mm-dd
		$exp = explode('-',$data);
		$aux = $exp[0]."/".$exp[1]."/".$exp[2];
		return $aux;
	}

	public static function datahora_BR_USA($data){
		// dd/mm/aaaa 00:00:00
		$exp = explode('-',$data);
		$aux = data_BR_USA($exp[0])." ".$exp[1];
		return $aux;
	}

	public static function datahora_USA_BR($data){
		// aaaa-mm-dd 00:00:00
		$exp = explode('-',$data);
		$aux = data_USA_BR($exp[0])." ".$exp[1];
		return $aux;
	}
}

?>