<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('surname');
            $table->string('business_name');
            $table->text('business_type');
            $table->string('business_phone_number');
            $table->string('mobile_phone_number');
            $table->string('email');
            $table->string('business_web_address');
            $table->string('image');

            $table->timestamps();
            $table->index('user_id');


//    ToDo 
// We need to add a section where the clients have to choose between a service or product .. 
// this is the case for those providing services such as legal department schools, but they arent't products... Pending Client


// Business type  Start typing to see categories
// business phone number 
// mobile phone number
// subcounty
// County
// Email 
// Phone number 
// Business web address
// e.g. www.scoot.co.uk
// Please note: By adding yourself to this directory you will be automatically added to our network of directories including Scoot, The Sun, The Independent and Touch Local.
// You acknowledge this information will be publicly displayed and will be used to contact you by users of these directories, who are individuals looking for the products and services you offer and suppliers (including web.com) who may wish to provide services to businesses like yours. If you ever would like to be removed from our directories you may unsubscribe at any time or review our privacy policy

// Accept   


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
