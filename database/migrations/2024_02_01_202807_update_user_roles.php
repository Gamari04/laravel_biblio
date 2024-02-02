<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Obtenez l'ID du rôle par défaut (vous devez ajuster cela selon votre logique)
       $defaultRoleId = Role::where('name', 'default')->value('id');

       // Mettez à jour les utilisateurs sans rôle avec le rôle par défaut
       User::whereNull('role_id')->update(['role_id' => $defaultRoleId]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
