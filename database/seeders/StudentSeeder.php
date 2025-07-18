<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Skill;
use App\Models\Fact;
use App\Models\Testimonial;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            [
                'name' => 'Islom Baxromov',
                'photo' => 'students/islom.jpg',
                'job' => 'Full-stack Developer',
                'about' => 'Tajribali Laravel dasturchi va o‘qituvchi.',
                'birthday' => '1998-05-15',
                'website' => 'https://alicoder.uz',
                'phone' => '+998 99 588 88 98',
                'city' => 'Buxoro',
                'degree' => 'Bakalavr',
                'email' => 'islom@example.com',
                'telegram_username' => 'alicoderuz',
            ],
            [
                'name' => 'Dilnoza Karimova',
                'photo' => 'students/dilnoza.jpg',
                'job' => 'Frontend Developer',
                'about' => 'React va Vue bo‘yicha tajribaga ega.',
                'birthday' => '1999-11-23',
                'website' => 'https://dilnoza.dev',
                'phone' => '+998 90 123 45 67',
                'city' => 'Toshkent',
                'degree' => 'Magistr',
                'email' => 'dilnoza@example.com',
                'telegram_username' => 'dilkarim',
            ],
            [
                'name' => 'Javlon Sobirov',
                'photo' => 'students/javlon.jpg',
                'job' => 'Backend Developer',
                'about' => 'PHP, Laravel va REST API bo‘yicha ixtisoslashgan.',
                'birthday' => '1997-03-10',
                'website' => 'https://javlon.dev',
                'phone' => '+998 91 876 54 32',
                'city' => 'Samarqand',
                'degree' => 'Bakalavr',
                'email' => 'javlon@example.com',
                'telegram_username' => 'javlondev',
            ],
            [
                'name' => 'Malika Abdullayeva',
                'photo' => 'students/malika.jpg',
                'job' => 'UI/UX Designer',
                'about' => 'Adobe XD va Figma bilan ishlaydi.',
                'birthday' => '2000-01-05',
                'website' => null,
                'phone' => '+998 91 000 11 22',
                'city' => 'Namangan',
                'degree' => 'Bakalavr',
                'email' => 'malika@example.com',
                'telegram_username' => 'malikadesign',
            ],
            [
                'name' => 'Sardor Ergashev',
                'photo' => 'students/sardor.jpg',
                'job' => 'DevOps Engineer',
                'about' => 'CI/CD, Docker, Linux bilan ishlaydi.',
                'birthday' => '1995-06-30',
                'website' => 'https://sardor.dev',
                'phone' => '+998 93 333 22 11',
                'city' => 'Farg‘ona',
                'degree' => 'Magistr',
                'email' => 'sardor@example.com',
                'telegram_username' => 'sardorops',
            ],
            [
                'name' => 'Aziza Xamidova',
                'photo' => 'students/aziza.jpg',
                'job' => 'Mobile Developer',
                'about' => 'Flutter va Android native dasturlash.',
                'birthday' => '2001-09-12',
                'website' => 'https://aziza.dev',
                'phone' => '+998 97 555 44 33',
                'city' => 'Andijon',
                'degree' => 'Bakalavr',
                'email' => 'aziza@example.com',
                'telegram_username' => 'azizamobile',
            ],
        ];

        foreach ($students as $data) {
            $student = Student::create($data);

            // Skill
            Skill::create([
                'student_id' => $student->id,
                'title' => 'Laravel',
                'procent' => rand(80, 100),
            ]);
            Skill::create([
                'student_id' => $student->id,
                'title' => 'JavaScript',
                'procent' => rand(60, 90),
            ]);
            Skill::create([
                'student_id' => $student->id,
                'title' => 'Communication',
                'procent' => rand(70, 100),
            ]);

            // Fact
            Fact::create([
                'student_id' => $student->id,
                'title' => 'Loyihalar',
                'count' => rand(5, 50),
            ]);
            Fact::create([
                'student_id' => $student->id,
                'title' => 'Yillik Tajriba',
                'count' => rand(1, 5),
            ]);

            // Testimonial
            Testimonial::create([
                'student_id' => $student->id,
                'name' => 'Mijoz ' . $student->name,
                'photo' => 'testimonials/default.jpg',
                'position' => 'CEO, TechCorp',
                'start_count' => rand(4, 5),
                'comment' => 'Bu talaba bilan ishlash juda qulay va samarali bo‘ldi.',
            ]);
        }
    }
}
