<?php namespace App\Libraries;

/**
* Author: Mos Lee
*/
class Calendar
{
	/**
	 * 
	 */
	public function __construct()
	{

	}

	/**
    * 
    */
	public function getMonth($month, $year=null)
	{
		if(null==($year))
            $year =  date("Y",time()); 
 
        if(null==($month))
            $month = date("m",time());

		$days_in_month = $this->_daysInMonth($month, $year);
		$first_day = date('N',strtotime($year.'-'.$month.'-01'));
		$month_info = [];

		for ($i=0; $i < $days_in_month ; $i++) { 
			$data = [ "day" => ($first_day + $i) % 7,
					  "date" => $month."/".($i+1), 
					  "meetings" => $this->_getMeetings() ];

			array_push($month_info, $data);
		}

		return $month_info;
	}

	private function _getMeetings()
	{
		$meetings = [];
		$num = rand(0, 9);

		for ($i=0; $i < $num ; $i++) { 
			array_push($meetings, [
				"name" => "",
				"lab" => "",
				"start_at" => "",
				"end_at" => ""
			]);
		}

		return $meetings;
	}

	/**
    * calculate number of days in a particular month
    */
	private function _daysInMonth($month=null,$year=null){
         
        if(null==($year))
            $year =  date("Y",time()); 
 
        if(null==($month))
            $month = date("m",time());
             
        return date('t',strtotime($year.'-'.$month.'-01'));
    }
}