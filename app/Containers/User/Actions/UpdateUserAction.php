<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Hash;
use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserAction extends Action
{

  /**
   * @param \App\Ship\Transporters\DataTransporter $data
   *
   * @return  \App\Containers\User\Models\User
   */
  public function run(Request $data): User
  {
    $fName = null;//'uploads/profile/default.png';
    if ($data->exists('profile')) {
      // Get image file
      $image = $data->profile;
      // Make a image name based on user name and current timestamp
      $name = 'profile_'.str_slug($data->id).'_'.time();
      // Define folder path
      $folder = public_path() .'/uploads/profile/';
      $folder2 = 'uploads/profile/';
      // Make a file path where image will be stored [ folder path + file name + file extension]
      $filePath = $folder . $name. '.' . $data->imageExtension;
      $filePath2 = $folder2 . $name. '.' . $data->imageExtension;
      // Upload image
      //$this->uploadOne($image, $folder, 'public', $name);
      //$file = $image->storeAs($folder, $name.'.'.$request->imageExtension, 'public');
      file_put_contents($filePath, base64_decode($image));
      //Image::make(file_get_contents($image))->save($filePath);
      // Set user profile image path in database to filePath
      $fName = $filePath2;
    }

    $userData = [
      'password' => $data->password ? Hash::make($data->password) : null,
      'first_name' => $data->first_name,
      'last_name' => $data->last_name,
      'gender' => $data->gender,
      'birth' => $data->birth,
      'confirmed' => $data->confirmed,
      'social_token' => $data->token,
      'social_expires_in' => $data->expiresIn,
      'social_refresh_token' => $data->refreshToken,
      'social_token_secret' => $data->tokenSecret,
      'address' => $data->address,
      'phone' => $data->phone,
      'phone_login'=>$data->phone,
      'email' => $data->email,
      'speciality' => $data->speciality,
      'user_type' => $data->user_type,
      'center_id' => $data->center_id,
      'profile_picture' => $fName,
      'doctor_serial_number' => $data->doctor_serial_number,
      'status' => $data->status,
      //'display_home' => $data->display_home,
    ];


    //echo "display_hom : ". $data->display_home;
    // remove null values and their keys
    $userData = array_filter($userData,function($value){
	return !is_null($value) && $value !== '';
    });
    if(isset($data->display_home)) {
        if ($data->display_home == 0) {
            $userData["display_home"] = $data->display_home;
        } else if ($data->display_home == 1) {
            $userData["display_home"] = $data->display_home;
        }
    }

    //print_r($userData);
    //print_r($data);
    //print_r($data->display_home);
    $user = Apiato::call('User@UpdateUserTask', [$userData, $data->id]);

    return $user;
  }
}
