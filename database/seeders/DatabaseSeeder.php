<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Student;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesPermSeeder::class,
        ]);

			//estos tres no tienen anecdotes
			//porque son admin y curadores
        User::factory(10)
            ->hasStudents(1)
            ->create();
        
          

        User::factory(4)
            ->hasTeachers(1)
            ->hasClases(2 , function (array $attributes, User $user) {
                $teacherIds = $user->teachers->pluck('id');
                return ['teacher_id' => $teacherIds->random()];
            }) 
            ->create();




            $this->call(AttendanceSeeder::class);
            $this->call(AttendanceStudentSeeder::class);
            $this->call(ClaseStudentSeeder::class);
            $this->call(PuntuacionSeeder::class);
            $this->call(ConviviosSeeder::class);
          

    }


    
}
 