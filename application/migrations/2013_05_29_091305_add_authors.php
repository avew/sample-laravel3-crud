<?php

class Add_Authors {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        DB::table('authors')->insert(array(
            'name' => 'Asep Rojali',
            'bio' => 'Asep Rojali ganteng',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name' => 'Dhea Herlianda',
            'bio' => 'Dhea herlianda Rewel',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name' => 'Asep ave',
            'bio' => 'Asep ave ganteng',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('authors')->insert(array(
            'name' => 'Dhea Herlianda',
            'bio' => 'Dhea herlianda Rewel',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        DB::table('authors')->delete(1);
        DB::table('authors')->delete(2);
        DB::table('authors')->delete(3);
        DB::table('authors')->delete(4);
    }

}