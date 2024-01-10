<?php

namespace App\Containers\User\Actions;

use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchUserAction extends Action
{
    public function run(Request $request)
    {
        // $var = Apiato::call('Container@Task', [$arg1, $arg2, ...]);

      $str = "";
      if($request->exists("do_teleconsult")){
        $str = "and do_teleconsult=1";
      }
      $order = "";
      $order_table = "";
      $order_group = "";

      $av_field = "";
      if($request->exists("availability")){
        $order = "and users.id=availabilities.users_id and availabilities.date >= cast(now() as date)";
        $order_table = ", availabilities";
        //$order_group = " group by users.id,first_name,last_name,email,confirmed";
      }
      else {
        $av_field = ", (select count(*) from availabilities where availabilities.users_id=users.id and availabilities.date >= cast(now() as date)) as av";
        $order_group = " order by av desc";
      }

      $str_queries_1 = "";
      if($request->queries != ""){
        $str_queries_1 = "or ( specialities.name like '%".$request->queries."%')";
      }

      //SELECT users.* FROM users, specialities WHERE users.speciality=specialities.id and confirmed=1 and ((first_name like '%%' or last_name='%%') and user_type='DOCTOR' and address='akwa' or ( specialities.name like '%%'))
      //SELECT users.* FROM users, specialities WHERE users.speciality=specialities.id and confirmed=1 and ((first_name like '%".$request->queries."%' or last_name='%".$request->queries."%') and user_type='DOCTOR' and address like '%".$request->location."%' or ( specialities.name like '%".$request->queries."%'))
      //echo   "SELECT users.* FROM users, specialities ".$order_table." WHERE users.speciality=specialities.id ".$order." and confirmed=1 ".$str." and ((first_name like '%".$request->queries."%' or last_name='%".$request->queries."%') and user_type='DOCTOR' and address like '%".$request->location."%' ".$str_queries_1.")";
      $results = DB::select("SELECT DISTINCT users.* ".$av_field." FROM users, specialities ".$order_table." WHERE users.speciality=specialities.id ".$order." and confirmed=1 ".$str." and ((first_name like '%".$request->queries."%' or last_name='%".$request->queries."%') and user_type='DOCTOR' and address like '%".$request->location."%' ".$str_queries_1.") ".$order_group." ");
        /*
         $results = DB::select("SELECT * FROM users, specialities WHERE first_name like '%:query%' or last_name='%:query%' and user_type='DOCTOR' and address like '%:location%' and users.speciality=specialities.id and specialities.name like '%:query%'", array(
          'query' => $request->queries,
          'location' => $request->location,
        ));
         */
        //DB::select("");
      //$queries = [];
      //array_push($queries, ['first_name','like', '%'.$request->queries.'%'], ['last_name','like', '%'.$request->queries.'%'], ['address','like', '%'.$request->location.'%']);
      //print_r($results);
      //$users = new User();

      //$users_ = Apiato::call('User@SearchUserTask', [$queries]);

      /*for ($i = 0; $i < count($results); $i++){
        $results[$i]->availabilities()->where("date", "cast(now() as date)");// = DB::select("SELECT * from availabilities where users_id=".$results[$i]->id." and availabilities.date >= cast(now() as date)");
      }*/

      $pagination = $this->arrayPaginator($results, $request);
      //print_r($pagination);
      return  $pagination;//$users->hydrate($pagination->items());
    }

  public function arrayPaginator($array, $request)
  {
    $page = Input::get('pageIndex', 1);
    $perPage = 10;
    $offset = ($page * $perPage) - $perPage;

    return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
      ['path' => $request->url(), 'query' => $request->query()]);
  }
}
