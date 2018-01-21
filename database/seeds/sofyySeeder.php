<?php

use Illuminate\Database\Seeder;

class sofyySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = [
        	['NIS'=>'1234','Nama'=>'Sofy','Kelas'=>'10','Jurusan'=>'RPL','Alamat'=>'cilisung'
             'NIS'=>'1234','Nama'=>'fitri','Kelas'=>'11','Jurusan'=>'TKR','Alamat'=>'cupu'
            'NIS'=>'123456','Nama'=>'Reksa','Kelas'=>'10','Jurusan'=>'TSM','Alamat'=>'bojongkoneng'
           'NIS'=>'1234867','Nama'=>'Dina','Kelas'=>'12','Jurusan'=>'RPL','Alamat'=>'sukamenak'
            'NIS'=>'123423','Nama'=>'Sofy','Kelas'=>'10','Jurusan'=>'RPL','Alamat'=>'sampora']
        ];
        DB:: table('siswas')->insert($a);
        
    }
}
