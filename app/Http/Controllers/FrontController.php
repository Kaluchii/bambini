<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Interpro\QuickStorage\Laravel\QueryAgent;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    function __construct(QueryAgent $queryAgent)
    {
        $this->queryAgent = $queryAgent;

        $all_site = $this->queryAgent->getBlock('static_all_site', [], []);

        view()->share('all_site', $all_site);
    }


    public function getIndex()
    {
        $about = $this->queryAgent->getBlock('static_about', [], []);
        $programs = $this->queryAgent->getBlock('dom_upgrade', [], []);
        $target_programs = $this->queryAgent->getBlock('dom_target_upgrade', [], []);
        $gallery = $this->queryAgent->getBlock('static_good_atm', [], []);
        return view('front/index/index', [
            'about' => $about,
            'programs' => $programs,
            'target_programs' => $target_programs,
            'gallery' => $gallery
        ]);
    }


    public function getPrograms()
    {
        $programs = $this->queryAgent->getBlock('dom_upgrade', [], []);
        $target_programs = $this->queryAgent->getBlock('dom_target_upgrade', [], []);
        return view('front/programs/programs', [
            'programs' => $programs,
            'target_programs' => $target_programs
        ]);
    }


    public function getProgramsItem($slug)
    {
        try{
            $item = $this->queryAgent->getGroupItemBySlug('dom_upgrade', 'upgrade_programs', $slug);
            $educators = $this->queryAgent->getBlock('dom_staff', [], []);
            $programs = $this->queryAgent->getGroupFlat('dom_target_upgrade','upgrade_program',['upgrade_program'=>['random' => 'DESC']],[],['upgrade_program'=>['take'=>7, 'skip'=>1]]);

            return view('front/programs/program', [
                'educators' => $educators,
                'item' => $item,
                'programs' => $programs,
                'gallery'=>'program_gallery_group',
                'educator_id'=>'program_educators'
            ]);
        }
        catch (\Exception $exception){
            try{
                $item = $this->queryAgent->getGroupItemBySlug('dom_target_upgrade', 'upgrade_program', $slug);
                $educators = $this->queryAgent->getBlock('dom_staff', [], []);
                $programs = $this->queryAgent->getGroupFlat('dom_target_upgrade','upgrade_program',['upgrade_program'=>['random' => 'DESC']],[],['upgrade_program'=>['take'=>7, 'skip'=>1]]);

                return view('front/programs/program', [
                    'educators' => $educators,
                    'item' => $item,
                    'programs' => $programs,
                    'gallery'=>'program_gall_group',
                    'educator_id'=>'target_program_educators'
                ]);
            }
            catch (\Exception $exception){
                echo 'Не найдена страница';
            }
        }
        //finally {
        //    return view('front/programs/program', [
        //        'item' => $item
        //    ]);
        //}
    }


    public function getEducators()
    {
        $educators = $this->queryAgent->getBlock('dom_staff', [], []);
        $upgrade = $this->queryAgent->getBlock('dom_upgrade', [], []);
        $target_upgrade = $this->queryAgent->getBlock('dom_target_upgrade', [], []);
        return view('front/educators/educators', [
            'educators' => $educators,
            'upgrade' => $upgrade,
            'target_upgrade' => $target_upgrade,
        ]);
    }


    public function getContacts()
    {
        $contacts = $this->queryAgent->getBlock('static_contacts', [], []);
        return view('front/contacts/contacts', [
            'contacts' => $contacts,
        ]);
    }

}
