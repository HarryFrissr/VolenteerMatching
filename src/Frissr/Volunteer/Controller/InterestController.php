<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 17-12-15
 * Time: 17:48
 */

namespace Frissr\Volunteer\Controller;

use Frissr\Volunteer\Entity\Interest;
use Frissr\Volunteer\Entity\InterestRepo as InterestRepo;

class InterestController extends Controller
{

    public function indexAction()
    {
        $sports= new Interest("Sports","Sports");
        $list=[$sports];
        $page='Interests';
        return $this->render('pages/interests.html.php',array(
            'list'=>$list,
            'page'=>$page
            ));
    }
}