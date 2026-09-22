<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Badge;
use App\Models\Material;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | ADMIN
        |--------------------------------------------------------------------------
        */

        User::create([
            'name' => 'Administrator EduFun',
            'email' => 'admin@edufun.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        /*
        |--------------------------------------------------------------------------
        | GURU
        |--------------------------------------------------------------------------
        */

        $guru = User::create([
            'name' => 'Budi Santoso',
            'email' => 'guru@edufun.test',
            'password' => Hash::make('password'),
            'role' => 'guru',
        ]);

        Teacher::create([
            'user_id' => $guru->id,
            'nip' => '198501012010011001',
            'subject' => 'Matematika',
        ]);

        /*
        |--------------------------------------------------------------------------
        | SISWA
        |--------------------------------------------------------------------------
        */

        $siswa = User::create([
            'name' => 'Rizky',
            'email' => 'siswa@edufun.test',
            'password' => Hash::make('password'),
            'role' => 'siswa',
        ]);

        Student::create([
            'user_id' => $siswa->id,
            'nis' => '20260001',
            'class' => '6A',
            'school' => 'SD EduFun',
        ]);

        /*
        |--------------------------------------------------------------------------
        | MATA PELAJARAN
        |--------------------------------------------------------------------------
        */

        $matematika = Subject::create([
            'name' => 'Matematika',
            'description' => 'Belajar matematika dengan cara yang menyenangkan.',
            'icon' => 'bi-calculator',
        ]);

        $bahasaIndonesia = Subject::create([
            'name' => 'Bahasa Indonesia',
            'description' => 'Meningkatkan kemampuan membaca dan memahami bahasa.',
            'icon' => 'bi-book',
        ]);

        $ipa = Subject::create([
            'name' => 'IPA',
            'description' => 'Mengenal alam dan berbagai fenomena sains.',
            'icon' => 'bi-lightbulb',
        ]);

        $ips = Subject::create([
            'name' => 'IPS',
            'description' => 'Mengenal masyarakat, lingkungan, dan kehidupan sosial.',
            'icon' => 'bi-globe',
        ]);

        /*
        |--------------------------------------------------------------------------
        | MATERI
        |--------------------------------------------------------------------------
        */

        $materiPecahan = Material::create([
            'subject_id' => $matematika->id,
            'title' => 'Mengenal Pecahan',
            'description' => 'Mempelajari dasar-dasar pecahan.',
            'content' => 'Pecahan digunakan untuk menyatakan bagian dari keseluruhan.',
            'class' => '6',
            'is_active' => true,
        ]);

        Material::create([
            'subject_id' => $matematika->id,
            'title' => 'Bangun Datar',
            'description' => 'Mengenal berbagai macam bangun datar.',
            'content' => 'Bangun datar adalah bentuk dua dimensi yang memiliki panjang dan lebar.',
            'class' => '6',
            'is_active' => true,
        ]);

        Material::create([
            'subject_id' => $bahasaIndonesia->id,
            'title' => 'Membaca dan Memahami Teks',
            'description' => 'Belajar memahami isi sebuah teks.',
            'content' => 'Membaca dengan teliti membantu kita memahami informasi dalam teks.',
            'class' => '6',
            'is_active' => true,
        ]);

        Material::create([
            'subject_id' => $ipa->id,
            'title' => 'Sistem Tata Surya',
            'description' => 'Mengenal planet dan benda langit.',
            'content' => 'Tata surya terdiri dari Matahari dan berbagai benda langit yang mengitarinya.',
            'class' => '6',
            'is_active' => true,
        ]);

        Material::create([
            'subject_id' => $ips->id,
            'title' => 'Kenampakan Alam Indonesia',
            'description' => 'Mengenal berbagai kenampakan alam di Indonesia.',
            'content' => 'Indonesia memiliki berbagai kenampakan alam seperti gunung, sungai, dan pantai.',
            'class' => '6',
            'is_active' => true,
        ]);

        /*
        |--------------------------------------------------------------------------
        | KUIS
        |--------------------------------------------------------------------------
        */

        $quiz = Quiz::create([
            'material_id' => $materiPecahan->id,
            'title' => 'Kuis Pecahan Dasar',
            'description' => 'Uji pemahamanmu tentang pecahan.',
            'duration' => 10,
        ]);

        /*
        |--------------------------------------------------------------------------
        | SOAL
        |--------------------------------------------------------------------------
        */

        $question1 = Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Berapakah hasil dari 1/2 + 1/2?',
            'points' => 10,
        ]);

        Answer::create([
            'question_id' => $question1->id,
            'option' => 'A',
            'answer' => '1/4',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => $question1->id,
            'option' => 'B',
            'answer' => '1/2',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => $question1->id,
            'option' => 'C',
            'answer' => '1',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => $question1->id,
            'option' => 'D',
            'answer' => '2',
            'is_correct' => false,
        ]);

        $question2 = Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Pecahan 2/4 dapat disederhanakan menjadi?',
            'points' => 10,
        ]);

        Answer::create([
            'question_id' => $question2->id,
            'option' => 'A',
            'answer' => '1/2',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => $question2->id,
            'option' => 'B',
            'answer' => '1/3',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => $question2->id,
            'option' => 'C',
            'answer' => '2/3',
            'is_correct' => false,
        ]);

        Answer::create([
            'question_id' => $question2->id,
            'option' => 'D',
            'answer' => '3/4',
            'is_correct' => false,
        ]);

        /*
        |--------------------------------------------------------------------------
        | BADGES
        |--------------------------------------------------------------------------
        */

        Badge::create([
            'name' => 'First Step',
            'description' => 'Menyelesaikan materi pertama.',
            'icon' => '🏆',
        ]);

        Badge::create([
            'name' => 'Rajin Belajar',
            'description' => 'Menyelesaikan 5 materi.',
            'icon' => '📚',
        ]);

        Badge::create([
            'name' => 'Quiz Master',
            'description' => 'Menyelesaikan 5 kuis.',
            'icon' => '🎯',
        ]);

        Badge::create([
            'name' => 'Perfect Score',
            'description' => 'Mendapatkan nilai 100.',
            'icon' => '⭐',
        ]);

        Badge::create([
            'name' => 'Consistent Learner',
            'description' => 'Belajar secara konsisten.',
            'icon' => '🔥',
        ]);
    }
}