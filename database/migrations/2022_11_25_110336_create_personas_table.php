<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Categoria;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 40);
            $table->string('apellidos', 60);
            $table->string('telefono', 15);
            $table->boolean('estrella');
            $table->foreignIdFor(Categoria::class)->constrained()
                // Si elimino una categoria, las personas que la tengan se eliminan con ella.
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
