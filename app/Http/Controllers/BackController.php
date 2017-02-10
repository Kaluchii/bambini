<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Interpro\QuickStorage\Concept\QueryAgent;

use Illuminate\Http\Request;

class BackController extends Controller
{

	private $queryAgent;


	function __construct(QueryAgent $queryAgent)
	{
		$this->queryAgent = $queryAgent;

		$images = $this->queryAgent->getBlock('dom_all_images', [], []);

		view()->share('dom_all_images', $images);
	}


	public function getIndex(){
		return view('back.layout');
	}


	public function getAll(){
		$all =  $this->queryAgent->getBlock('static_all_site',[],[]);
		return view('back.blocks.static_all_site',[
			'static_all_site' => $all,
		]);
	}


	public function getAbout(){
		$all =  $this->queryAgent->getBlock('static_about',[],[]);
		return view('back.blocks.static_about',[
			'static_about' => $all,
		]);
	}


	public function getGallery(){
		$all =  $this->queryAgent->getBlock('static_good_atm',[],[]);
		return view('back.blocks.static_good_atm',[
			'static_good_atm' => $all,
		]);
	}

	public function getPrograms(){
		$all =  $this->queryAgent->getBlock('dom_upgrade',[],[]);
		return view('back.blocks.dom_upgrade',[
			'dom_upgrade' => $all,
		]);
	}


	public function getType(){
		$all =  $this->queryAgent->getBlock('dom_target_upgrade',[],[]);
		return view('back.blocks.dom_target_upgrade',[
			'dom_target_upgrade' => $all,
		]);
	}


	public function getEducators(){
		$all =  $this->queryAgent->getBlock('dom_staff',[],[]);
		return view('back.blocks.dom_staff',[
			'dom_staff' => $all,
		]);
	}


	public function getContact(){
		$all =  $this->queryAgent->getBlock('static_contacts',[],[]);
		return view('back.blocks.static_contacts',[
			'static_contacts' => $all,
		]);
	}


	public function getFidback(){
		$all =  $this->queryAgent->getBlock('fidback',[],[]);
		return view('back.blocks.fidback',[
			'fidback' => $all,
		]);
	}


	public function editProgram($id){
		$item =  $this->queryAgent->getGroupItem('dom_upgrade','upgrade_programs',$id);
		$staff =  $this->queryAgent->getBlock('dom_staff',[],[]);
		return view('back.blocks.groupitems.dom_upgrade.upgrade_programs_edit',[
			'item_upgrade_programs' => $item,
			'staff' => $staff,
		]);
	}

    public function getEducatorsItem($id){
        $item =  $this->queryAgent->getGroupItem('dom_staff','staff_list',$id);
        return view('back.blocks.groupitems.dom_staff.staff_list_edit',[
            'item_staff_list' => $item,
        ]);
    }


	public function editType($id){
		$item =  $this->queryAgent->getGroupItem('dom_target_upgrade','upgrade_program',$id);
		$staff =  $this->queryAgent->getBlock('dom_staff',[],[]);
		return view('back.blocks.groupitems.dom_target_upgrade.upgrade_program_edit',[
			'item_upgrade_program' => $item,
			'staff' => $staff,
		]);
	}

}
