<?php
use App\Column;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ColumnsTableSeeder extends Seeder
{


   private  $columns = [

            [
                'name' => 'country',
                'type' => 'enum',
                'values' => "algerian, france, usa",
                ],

            [
                'name' => 'language',
                'type' => 'enum',
                'values' => "english, french, arabe",
            ],

            [
                'name' => 'sex',
                'type' => 'enum',
                'values' => "male, female",
            ],

            [
                'name' => 'date',
                'type' => 'date',
                'values' => '',
            ]
        ];

    function run()
    {
            DB::table('columns')->delete();

            foreach ($this->columns as $column) {
                Column::create($column);
            }

            $this->generateCreateProfileTable();
    }


    private function generateCreateProfileTable()
    {

            $content = file_get_contents(__DIR__."/stub/createProfilesTable/before.stub");

            foreach($this->columns as $column){
                $content .=  $this->generateLine($column['name'], $column['type'], $column['values']);
            }

            $content .= file_get_contents(__DIR__.'/stub/createProfilesTable/after.stub');

            file_put_contents(__DIR__.'/../migrations/2015_07_31_075329_create_profiles_table.php', $content);
    }

    public function generateLine($name, $type, $values)
    {
        $line = "\$table->$type('$name'";
        if($type == "enum") $line .= ",$values";
        $line .= ")->nullable();\n";
        return $line;
    }
}
