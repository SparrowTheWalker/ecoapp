<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LargeCashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generating 10 random records for the large_cashes table
        for ($i = 0; $i < 10; $i++) {
            DB::table('large_cashes')->insert([
                'BRANCH_NAME' => $faker->company,
                'AC_BRANCH' => $faker->word,
                'CIF' => $faker->unique()->numerify('CIF####'),
                'BANK_CODE' => $faker->word,
                'TRN_DT' => $faker->date(),
                'NAME_OF_PERSANON_TRANSACTING' => $faker->name,
                'AC_NO' => $faker->unique()->numerify('AC#######'),
                'ID_OF_PERSON_TRANSACTING' => $faker->uuid,
                'NATIONALITY_OF_PERSON_TRANSACTING' => $faker->country,
                'DESCRIPTION_OF_TXN' => $faker->sentence,
//                 'NARRATIONS' => $faker->paragraph,
                'AC_CCY' => $faker->currencyCode,
                'LCY_AMOUNT' => $faker->randomFloat(2, 1000, 10000),
                'USD_EQUIV' => $faker->randomFloat(2, 50, 500),
                'TRN_CODE' => $faker->word,
                'TRN_REF_NO' => $faker->unique()->numerify('TRN#######'),
                'TRANSACTING_CUSTOMER' => $faker->name,
                'CUSTOMER_NAME' => $faker->name,
                'EXCH_RATE' => $faker->randomFloat(4, 1, 1.5),
                'PURPOSE_OF_TRANSACTION' => $faker->word,
                'SOURCE_OF_FUNDS' => $faker->word,
                'NATURE_OF_BUSINESS' => $faker->word,
                'PIN_NO_OF_ENTITY' => $faker->word,
                'NAME_OF_SIGNATORIES' => $faker->name,
                'ID_PP_NO_OF_SIGNATORIES' => $faker->uuid,
                'OCCUPATION_OF_SIGNATORIES' => $faker->word,
                'DOB_OF_SIGNATORIES' => $faker->date(),
                'NATIONALITY_OF_SIGNATORIES' => $faker->country,

                'CC' => $faker->countryCode,
                'STATUS' => $faker->randomElement(['pending', 'completed', 'cancelled']),
                'TRNCODES' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
