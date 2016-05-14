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

            return view('front/programs/program', [
                'item' => $item,
                'gallery'=>'program_gallery_group',
                'educator_id'=>'program_educators'
            ]);
        }
        catch (\Exception $exception){
            try{
                $item = $this->queryAgent->getGroupItemBySlug('dom_target_upgrade', 'upgrade_program', $slug);

                return view('front/programs/program', [
                    'item' => $item,
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
        $company = $this->queryAgent->getBlock('static_study', [], []);
        $study = $this->queryAgent->getBlock('dom_study', [], []);
        return view('front/study/study', [
            's_study' => $company,
            'study' => $study,
        ]);
    }


    public function getContacts()
    {
        $company = $this->queryAgent->getBlock('static_service', [], []);
        $study = $this->queryAgent->getBlock('dom_service', [], []);
        return view('front/service/service', [
            's_study' => $company,
            'service' => $study,
        ]);
    }


    public function getBlog()
    {
        $study = $this->queryAgent->getBlock('dom_news', [], []);
        $news = $this->queryAgent->getGroupFlat('dom_news', 'news', [['news' => ['sorter' => 'DESC']]], [], ['news' => ['take' => 9, 'skip' => 4]]);
        $news_big = $this->queryAgent->getGroupFlat('dom_news', 'news', [['news' => ['sorter' => 'DESC']]], [], ['news' => ['take' => 3, 'skip' => 1]]);
        $agregators = config('rss')['links'];

        return view('front/news/news', [
            'news' => $study,
            'small_news' => $news,
            'news_big' => $news_big,
            'agr' => $agregators
        ]);
    }

}
