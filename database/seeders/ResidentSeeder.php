<?php

namespace Database\Seeders;

use App\enum\GenderResident;
use App\enum\IsArchived;
use App\enum\MarriageStatusResident;
use App\enum\NationalityResident;
use App\enum\ReligionResident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => '1234567890123456',
                'full_name' => 'Azhar Testing',
                'place_of_birth' => 'Jakarta',
                'date_of_birth' => '1990-01-01',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'A',
                'religion' => ReligionResident::Islam,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNI,
                'income' => 5_000_000,
                'whatsapp_number' => '+6281234567890',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123457',
                'full_name' => 'Azhar Testing 2',
                'place_of_birth' => 'Jakarta',
                'date_of_birth' => '1990-01-01',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'A',
                'religion' => ReligionResident::Islam,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNI,
                'income' => 5_000_000,
                'whatsapp_number' => '+6281234567891',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123458',
                'full_name' => 'Azhar Testing 3',
                'place_of_birth' => 'Jakarta',
                'date_of_birth' => '1990-01-01',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'A',
                'religion' => ReligionResident::Islam,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNI,
                'income' => 5_000_000,
                'whatsapp_number' => '+6281234567892',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123459',
                'full_name' => 'Azhar Testing 4',
                'place_of_birth' => 'Jakarta',
                'date_of_birth' => '1990-01-01',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'A',
                'religion' => ReligionResident::Islam,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNI,
                'income' => 5_000_000,
                'whatsapp_number' => '+6281234567893',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123460',
                'full_name' => 'Azhar Testing 5',
                'place_of_birth' => 'Jakarta',
                'date_of_birth' => '1990-01-01',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'A',
                'religion' => ReligionResident::Islam,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNI,
                'income' => 5_000_000,
                'whatsapp_number' => '+6281234567894',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123461',
                'full_name' => 'John Doe',
                'place_of_birth' => 'New York',
                'date_of_birth' => '1985-05-10',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'B',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::Kawin,
                'nationality' => NationalityResident::WNA,
                'income' => 10_000_000,
                'whatsapp_number' => '+12345678901',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123462',
                'full_name' => 'Jane Smith',
                'place_of_birth' => 'Los Angeles',
                'date_of_birth' => '1992-08-20',
                'gender' => GenderResident::Perempuan,
                'blood_type' => 'O',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::Kawin,
                'nationality' => NationalityResident::WNA,
                'income' => 8_000_000,
                'whatsapp_number' => '+12345678902',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123463',
                'full_name' => 'Michael Johnson',
                'place_of_birth' => 'Chicago',
                'date_of_birth' => '1988-12-15',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'AB',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::Kawin,
                'nationality' => NationalityResident::WNA,
                'income' => 7_500_000,
                'whatsapp_number' => '+12345678903',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123464',
                'full_name' => 'Emily Brown',
                'place_of_birth' => 'Houston',
                'date_of_birth' => '1995-04-25',
                'gender' => GenderResident::Perempuan,
                'blood_type' => 'A',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNA,
                'income' => 6_000_000,
                'whatsapp_number' => '+12345678904',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123465',
                'full_name' => 'David Wilson',
                'place_of_birth' => 'Seattle',
                'date_of_birth' => '1987-09-30',
                'gender' => GenderResident::LakiLaki,
                'blood_type' => 'O',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::Kawin,
                'nationality' => NationalityResident::WNA,
                'income' => 9_000_000,
                'whatsapp_number' => '+12345678905',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123466',
                'full_name' => 'Sarah Johnson',
                'place_of_birth' => 'Miami',
                'date_of_birth' => '1990-07-18',
                'gender' => GenderResident::Perempuan,
                'blood_type' => 'A',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNA,
                'income' => 7_200_000,
                'whatsapp_number' => '+12345678906',
                'is_archived' => 'False',
            ],
            [
                'nik' => '1234567890123490',
                'full_name' => 'Sarah Johnson archive',
                'place_of_birth' => 'Miami',
                'date_of_birth' => '1990-07-18',
                'gender' => GenderResident::Perempuan,
                'blood_type' => 'A',
                'religion' => ReligionResident::Kristen,
                'marriage_status' => MarriageStatusResident::BelumKawin,
                'nationality' => NationalityResident::WNA,
                'income' => 7_200_000,
                'whatsapp_number' => '+12345678906',
                'is_archived' => 'True',
            ],
        ];

        DB::table('resident')->insert($data);
        // DB::table('resident')->truncate();
    }
}
