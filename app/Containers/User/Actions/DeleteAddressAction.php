<?php

namespace App\Containers\User\Actions;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\DB;
/**
 * Class DeleteUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class DeleteAddressAction extends Action
{
    public function run(Request $request)
    {
      return DB::table('address')->where('id', $request->id)->delete();;
    }
}
