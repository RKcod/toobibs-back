<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Actions\Action;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

/**
 * Class GetAllUsersAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class GetAllUsersAction extends Action
{

  /**
   * @return mixed
   */
  public function run(Request $request)
  {
    return Apiato::call('User@GetAllUsersTask',
      [],
      [
        'addRequestCriteria',
        'ordered',
      ]
    );
  }

}
