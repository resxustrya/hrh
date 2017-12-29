<?php

class AdminController extends \BaseController {

	public function __construct()
	{

	}

	public function index()
	{
		if(Auth::check()){
			if(Auth::user()->usertype == '1')
			{
				return Redirect::to('home');
			} else {
				return Redirect::to('/profile');
			}
		}

		if(!Auth::check() and Request::method() == 'GET') {
			$province = Province::where('status',1)->get();
			$municipality = Municipality::where('status',1)->get();
			$hrh_type = HrhType::where('status',1)->get();
			return View::make('auth.login',[
				"province" => $province,
				"municipality" => $municipality,
				"hrh_type" => $hrh_type
			]);
		}

		if(Request::method() == 'POST') {
			$username = Input::get('username');
			$password = Input::get('password');
			$user = Users::where('username', '=', $username)
				->where('password', '=', $password)
				->first();

			if(isset($user) and count($user) > 0) {
				if (Auth::loginUsingId($user->id)) {
					if (Auth::user()->usertype == '1') {
						return Redirect::to('home');
					} else {
						return Redirect::to('home');
					}
				} else {
					return Redirect::to('/')->with('ops', 'Invalid Login');
				}
			} else {
				if(Auth::attempt(array('username' => $username, 'password' => $password))) {
					if(Auth::user()->usertype == '1') {
						return Redirect::to('home');
					} else {
						return Redirect::to('/profile');
					}
				} else {
					return Redirect::to('/')->with('ops','Invalid Login');
				}
			}
		}

	}

	public function home()
	{
	    $hrh_type = HrhType::where('status',1)->get();
		return View::make('coordinator.coordinator_home',[
		    "hrh_type" => $hrh_type
        ]);
	}

	public function register()
	{
		$user = new Users();
		foreach(Input::all() as $key => $value){
			if($key == 'password'){
				$user->$key = Hash::make($value);
			}
			else {
				$user->$key = $value;
			}
		}
		$user->status_of_employment = 1;
		$user->save();

		Session::put('successRegister',true);
	}

	public function exportExcel(){
		Excel::create('ExportHRH', function ($excel) {

			$excel->sheet('ALL', function($sheet) {

				$headerColumn = array("Hrh Type","Last Name","First Name","Middle Name","Name Extension","AOA(Province)","AOA(Municipality)","DateOfBirth","Age","Gender","Civil Status",
					"Residential Add","Permanent Add","Cell Num","Email Add","Citizenship","Philhealth Num","TIN","GSIS Beneficiaries","GSIS Beneficiaries","PRC Lic Num",
					"Date Of Entrance","Status Of Emp");

				$sheet->appendRow($headerColumn);
				$sheet->row($sheet->getHighestRow(), function ($row) {
					$row->setFontFamily('Comic Sans MS');
					$row->setFontSize(10);
					$row->setFontWeight('bold');
					$row->setBackground('#FFFF00');
				});

				$users = Users::where('usertype',0)->get();
				foreach($users as $row) {
					if($row->date_of_birth) {
						$birthDate = $row->date_of_birth;
						$birthDate = explode("/", $birthDate);

						$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
							? ((date("Y") - $birthDate[2]) - 1)
							: (date("Y") - $birthDate[2]));
					}
					else {
						$age = 'NO AGE';
					}

					$data = array(
						hrhController::hrh_type($row->hrh_type),
						$row->lname,
						$row->fname,
						$row->mname,
						hrhController::hrh_extension($row->name_extension),
						hrhController::hrh_province($row->province),
						hrhController::hrh_municipality($row->municipality),
						$row->date_of_birth,
						$age,
						$row->sex,
						$row->civil_status,
						$row->residential_address,
						$row->permanent_address,
						$row->mobile_no,
						$row->email_address,
						$row->citizenship,
						$row->philhealth_no,
						$row->tin_no,
						$row->gsis_beneficiaries1,
						$row->gsis_beneficiaries2,
						$row->prc_license,
						$row->date_of_entrance_to_duty,
						hrhController::hrh_status($row->status_of_employment)
					);
					$sheet->appendRow($data);
				}

			});

			$hrh_type = HrhType::all();
			foreach($hrh_type as $type){
				Session::put('typeId',$type->id);
				$excel->sheet($type->suffix, function($sheet) {

					$headerColumn = array("Hrh Type","Last Name","First Name","Middle Name","Name Extension","AOA(Province)","AOA(Municipality)","DateOfBirth","Age","Gender","Civil Status",
						"Residential Add","Permanent Add","Cell Num","Email Add","Citizenship","Philhealth Num","TIN","GSIS Beneficiaries","GSIS Beneficiaries","PRC Lic Num",
						"Date Of Entrance","Status Of Emp");

					$sheet->appendRow($headerColumn);
					$sheet->row($sheet->getHighestRow(), function ($row) {
						$row->setFontFamily('Comic Sans MS');
						$row->setFontSize(10);
						$row->setFontWeight('bold');
						$row->setBackground('#FFFF00');
					});

					/*// Sets all borders
					$sheet->setAllBorders('thin');
					// Set auto size for sheet
					$sheet->setAutoSize(true);*/

					$users = Users::where('hrh_type',Session::get('typeId'))
						->where('usertype',0)
						->get();
					foreach($users as $row) {
						if($row->date_of_birth) {
							$birthDate = $row->date_of_birth;
							$birthDate = explode("/", $birthDate);

							$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
								? ((date("Y") - $birthDate[2]) - 1)
								: (date("Y") - $birthDate[2]));
						}
						else {
							$age = 'NO AGE';
						}

						$data = array(
							hrhController::hrh_type($row->hrh_type),
							$row->lname,
							$row->fname,
							$row->mname,
							hrhController::hrh_extension($row->name_extension),
							hrhController::hrh_province($row->province),
							hrhController::hrh_municipality($row->municipality),
							$row->date_of_birth,
							$age,
							$row->sex,
							$row->civil_status,
							$row->residential_address,
							$row->permanent_address,
							$row->mobile_no,
							$row->email_address,
							$row->citizenship,
							$row->philhealth_no,
							$row->tin_no,
							$row->gsis_beneficiaries1,
							$row->gsis_beneficiaries2,
							$row->prc_license,
							$row->date_of_entrance_to_duty,
							hrhController::hrh_status($row->status_of_employment)
						);
						$sheet->appendRow($data);
					}

				});
			}


		})->export('xls');
	}

	public function exportHrh(){
		Excel::create('ExportReport', function ($excel) {

			// Our first sheet
			$excel->sheet('HRH REPORT', function($sheet) {

				$headerColumn = [
					'Republic of the Philippines',
					'DEPARTMENT OF HEALTH REGIONAL OFFICE NO. VII',
					'Osmeña Boulevard, Cebu City, 6000 Philippines',
					'Regional Director’s Office Tel. No. (032) 253-6355 Fax No. (032) 254-0109',
					'Official Website http://www.ro7.doh.gov.ph/Email Address: dohro7@gmail.com',
					'HUMAN RESOURCES FOR HEALTH MONTHLY TRACKING OF DEPLOYMENT',
					'CENTRAL VISAYAS'
				];
				for($i=1; $i <= count($headerColumn); $i++){
					$sheet->mergeCells('A'.$i.':N'.$i);
					$sheet->row($i, function ($row){
						$row->setAlignment('center');
					});
					$sheet->row($i,[$headerColumn[$i-1]]);
				}

				$headerDown = [
					'PROVINCE',
					'ALLOCATION',
					'January',
					'February',
					'March',
					'April',
					'May',
					'June',
					'July',
					'August',
					'September',
					'October',
					'November',
					'December'
				];

				$calendarGrand = [
					'janGrand' => 0,
					'febGrand' => 0,
					'marGrand' => 0,
					'aprGrand' => 0,
					'mayGrand' => 0,
					'junGrand' => 0,
					'julGrand' => 0,
					'augGrand' => 0,
					'sepGrand' => 0,
					'octGrand' => 0,
					'novGrand' => 0,
					'decGrand' => 0,
					'alocGrand' => 0
				];

				$hrhType = HrhType::where('status',1)->get();
				$count = 8;
				foreach($hrhType as $type){
					//hrh type
					$sheet->mergeCells('A'.$count.':N'.$count);
					$sheet->row($count, function ($row){
						$row->setFontFamily('Comic Sans MS');
						$row->setFontSize(10);
						$row->setFontWeight('bold');
					});
					$sheet->row($count,[$type->description]);
					$count +=4;

					$sheet->appendRow($headerDown);

					// Set auto size for sheet
					$sheet->setAutoSize(true);

					$calendarTotal = [
						'janTotal' => 0,
						'febTotal' => 0,
						'marTotal' => 0,
						'aprTotal' => 0,
						'mayTotal' => 0,
						'junTotal' => 0,
						'julTotal' => 0,
						'augTotal' => 0,
						'sepTotal' => 0,
						'octTotal' => 0,
						'novTotal' => 0,
						'decTotal' => 0,
						'alocTotal' => 0
					];

					$province = Province::where('hrh_type',$type->id)->where('status',1)->get();
					$count+=count($province);
					foreach($province as $row){
						$calendar = [
							'1' => 0,
							'2' => 0,
							'3' => 0,
							'4' => 0,
							'5' => 0,
							'6' => 0,
							'7' => 0,
							'8' => 0,
							'9' => 0,
							'10' => 0,
							'11' => 0,
							'12' => 0
						];
						$monthReport = Users::where('province',$row->id)
                            ->where('status_of_employment','1')
							->where('hrh_type',$type->id)
							->where('usertype',0)
							->get();
						foreach($monthReport as $userCount){
							//$calendar[explode('-',$userCount->created_at)[1]]++;
                            $start = explode('-',$userCount->created_at)[1];
                            $end = explode('-',\Carbon\Carbon::now())[1];

							for($i = (int)$start; $i <= (int)$end; $i++){
                                $calendar[$i]++;
                            }
						}

						$data = [
							$row->description,
							$row->allocation,
							$calendar['1'],
							$calendar['2'],
							$calendar['3'],
							$calendar['4'],
							$calendar['5'],
							$calendar['6'],
							$calendar['7'],
							$calendar['8'],
							$calendar['9'],
							$calendar['10'],
							$calendar['11'],
							$calendar['12'],
						];
						$dataTotal = [
							'Total',
							$calendarTotal['alocTotal'] += $row->allocation,
							$calendarTotal['janTotal'] += $calendar['1'],
							$calendarTotal['febTotal'] += $calendar['2'],
							$calendarTotal['marTotal'] += $calendar['3'],
							$calendarTotal['aprTotal'] += $calendar['4'],
							$calendarTotal['mayTotal'] += $calendar['5'],
							$calendarTotal['junTotal'] += $calendar['6'],
							$calendarTotal['julTotal'] += $calendar['7'],
							$calendarTotal['augTotal'] += $calendar['8'],
							$calendarTotal['sepTotal'] += $calendar['9'],
							$calendarTotal['octTotal'] += $calendar['10'],
							$calendarTotal['novTotal'] += $calendar['11'],
							$calendarTotal['decTotal'] += $calendar['12'],
						];
						$sheet->appendRow($data);
					}
					$dataGrand = [
						'Grand Total',
						$calendarGrand['alocGrand'] += $calendarTotal['alocTotal'],
						$calendarGrand['janGrand'] += $calendarTotal['janTotal'],
						$calendarGrand['febGrand'] += $calendarTotal['febTotal'],
						$calendarGrand['marGrand'] += $calendarTotal['marTotal'],
						$calendarGrand['aprGrand'] += $calendarTotal['aprTotal'],
						$calendarGrand['mayGrand'] += $calendarTotal['mayTotal'],
						$calendarGrand['junGrand'] += $calendarTotal['junTotal'],
						$calendarGrand['julGrand'] += $calendarTotal['julTotal'],
						$calendarGrand['augGrand'] += $calendarTotal['augTotal'],
						$calendarGrand['sepGrand'] += $calendarTotal['sepTotal'],
						$calendarGrand['octGrand'] += $calendarTotal['octTotal'],
						$calendarGrand['novGrand'] += $calendarTotal['novTotal'],
						$calendarGrand['decGrand'] += $calendarTotal['decTotal'],
					];
					//$sheet->appendRow($dataTotal);
                    $sheet->row($count-2, function ($row){
                        $row->setFontFamily('Comic Sans MS');
                        $row->setFontSize(8);
                        $row->setFontWeight('bold');
                    });
                    if(!isset($dataTotal)){
                        $dataTotal = array();
                    }
                    $sheet->row($count-2,$dataTotal);
				}
				$sheet->row($count-1, function ($row){
					$row->setFontFamily('Comic Sans MS');
					$row->setFontSize(10);
					$row->setFontWeight('bold');
					$row->setBackground('#FFFF00');
				});
				$sheet->row($count-1,$dataGrand);
			});


		})->export('xls');
	}

}

