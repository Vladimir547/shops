<?php
namespace App\Providers\ViewComposers;
use App\Maintext;
use Illuminate\Contracts\View\View;
class BaseComposers {
	public function compose(View $view){
		$v_objs= Maintext::where('status','main')->get();
		$view->with('v_objs', $v_objs);
	}
}