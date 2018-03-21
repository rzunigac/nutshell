<?php 
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\Event\Event;
use ArrayObject;

class ChangeDateBehavior extends Behavior
{
	public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
	{	
		
		foreach($data as $name => $value){
			//if(gettype($value) == 'string'){
				$name_pattern = '/^fecha*/';
				if(preg_match($name_pattern, $name)){
					$fecha = explode('-', $data[$name]);
					$array_fecha = [
						'day' 	=> $fecha[0],
						'month' => $fecha[1],
						'year'	=> $fecha[2],
						'hour'	=> 0,
						'minute'=> 0
					];
				$data[$name] = $array_fecha;
				}
			//}
		}		
	}
}
