<?php

namespace App\Containers\User\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class RegisterUserRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class RegisterUserRequest extends Request
{

  /**
   * Define which Roles and/or Permissions has access to this request.
   *
   * @var  array
   */
  protected $access = [
    'permissions' => '',
    'roles' => '',
  ];

  /**
   * Id's that needs decoding before applying the validation rules.
   *
   * @var  array
   */
  protected $decode = [

  ];

  /**
   * Defining the URL parameters (`/stores/999/items`) allows applying
   * validation rules on them and allows accessing them like request data.
   *
   * @var  array
   */
  protected $urlParameters = [

  ];

  /**
   * @return  array
   */
  public function rules()
  {
    return [
      'email' => 'unique:users,email',
      'phone_login' => 'required|unique:users,phone_login',
      'password' => 'required|min:6|max:30',
      'user_type' => 'required',
      'first_name' => 'min:2|max:50',
      'last_name' => 'min:2|max:50',
    ];
  }

  /**
   * @return  bool
   */
  public function authorize()
  {
    return $this->check([
      'hasAccess',
    ]);
  }
}
