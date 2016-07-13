<?php

use Illuminate\Database\Seeder;
use App\User;
class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          $roleSubissor = Defender::createRole('submissor');
          $roleAdmin = Defender::createRole('revisor');
          $roleRevisor = Defender::createRole('admin');

          // The first parameter is the permission name
          // The second is the "friendly" version of the name. (usually for you to show it in your application).
          // $permission =  Defender::createPermission('submission.create', 'Criar Submissão');

          // You can assign permission directly to a user.
          $user = User::find(1);
          $userSub = User::find(2);
          // $user->attachPermission($permission);

          // or you can add the user to a group and that group has the power to rule create users.
          // $roleSub->attachPermission($permission);

          // Now this user is in the Administrators group.
          $user->attachRole($roleAdmin);
          $userSub->attachRole($roleSubissor);
    }
}
