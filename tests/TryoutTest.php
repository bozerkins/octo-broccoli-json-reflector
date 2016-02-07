<?php

/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/28/16
 * Time: 1:32 AM
 */

class TryoutTest extends PHPUnit_Framework_TestCase
{
    public function testAnything()
    {
        $faker = Faker\Factory::create();

        $record = array();
        $record['id'] = 15;
        $record['name'] = $faker->name;
        $record['title'] = $faker->title;
        $record['address'] = $faker->address;
        $record['phone'] = $faker->phoneNumber;
        $record['email'] = $faker->companyEmail;
        $record['country'] = $faker->country;
        $record['date'] = $faker->dateTime->format('YYYY-mm-dd');
        $record['addresses'] = array(
            array(
                'id' => 16,
                'address' => $faker->address
            ),
            array(
                'id' => 22,
                'address' => $faker->address
            )
        );

        $decode = json_decode(json_encode($record));

        $structure = new \OctoBroccoli\ReflectionJsonStructure();
        $reflection = $structure->generateReflection($decode);
        dump($reflection);
    }
}
