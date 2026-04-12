<?php

namespace App\Livewire;

use Livewire\Component;

class Faq extends Component
{
    public $questions = [
        [
    "question" => "What is your school about?",
    "answer" => "We provide high-quality education focused on academic excellence, skill development, and the overall growth of our students in a supportive ",
    "open" => false,
],
[
    "question" => "Where are you located?",
    "answer" => "We are located in the city center, making it easy and convenient for students and parents to access our school from different parts of the city.",
    "open" => false,
],
[
    "question" => "Do you offer online classes?",
    "answer" => "Yes, we offer both online and offline classes to ensure flexible learning options for all students, allowing them to study anytime and anywhere.",
    "open" => false,
],
        [
    "question" => "What courses do you provide?",
    "answer" => "We provide a variety of courses including science, math, and language subjects.",
    "open" => false,
],
    ];

    public function toggle($index)
    {
        // بستن بقیه سوال‌ها (اختیاری)
        // foreach ($this->questions as $i => $q) {
        //     $this->questions[$i]['open'] = false;
        // }

        // باز کردن آیتم کلیک شده
        $this->questions[$index]['open'] = !$this->questions[$index]['open'];
    }

    public function render()
    {
        return view('livewire.faq');
    }
}