<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    // Team
    public function addTeam() {
        return view('team-add');
    }
    public function allTeam() {
        return view('team-all');
    }

    // Student
    public function addStudent() {
        return view('student-add');
    }
    public function allStudent() {
        return view('student-all');
    }

    // Quiz
    public function addQuiz() {
        return view('quiz-add');
    }
    public function allQuiz() {
        return view('quiz-all');
    }

    // Question
    public function addQuestion() {
        return view('question-add');
    }
    public function allQuestion() {
        return view('question-all');
    }

    // Pricing
    public function pricing() {
        return view('pricing');
    }

    // Certificate
    public function certificate() {
        return view('certificate');
    }

    // Profile
    public function profile() {
        return view('profile');
    }

    // Account
    public function account() {
        return view('account');
    }

    // Security
    public function security() {
        return view('security');
    }

    // Login
    public function login() {
        return view('login');
    }

    // Register
    public function register() {
        return view('register');
    }

    // Forget
    public function forget() {
        return view('forget');
    }
}
