<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="mobile-prohibitted">
    </div>
    <!-- Content Starts -->
    <div class="content">
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="logo">
                    <a href="{{ url('/') }}">Portal <i class="fa-solid fa-splotch"></i> </a>
                </div>
                <a class="sidebar-link @yield('dashboard')" href="{{ url('/') }}">Dashboard</a>
                <a class="sidebar-link haveSubmenu @yield('team')" href="javascript:void(0)">Team <i
                        class="fa-solid fa-caret-down"></i></a>
                <div class="sidebar-submenu @yield('teamExpanded')">
                    <a href="{{ url('team/add') }}" class="sidebar-link @yield('addTeam')">Add Team</a>
                    <a href="{{ url('team/all') }}" class="sidebar-link @yield('allTeam')">All Team</a>
                </div>
                <a class="sidebar-link haveSubmenu @yield('student')" href="javascript:void(0)">Student <i
                        class="fa-solid fa-caret-down"></i></a>
                <div class="sidebar-submenu @yield('studentExpanded')">
                    <a href="{{ url('student/add') }}" class="sidebar-link @yield('addStudent')">Add Student</a>
                    <a href="{{ url('student/all') }}" class="sidebar-link @yield('allStudent')">All Student</a>
                </div>

                <a class="sidebar-link haveSubmenu @yield('quiz')" href="javascript:void(0)">Quiz <i
                        class="fa-solid fa-caret-down"></i></a>
                <div class="sidebar-submenu @yield('quizExpanded')">
                    <a href="{{ url('quiz/add') }}" class="sidebar-link @yield('addQuiz')">Add Quiz</a>
                    <a href="{{ url('quiz/all') }}" class="sidebar-link @yield('allQuiz')">All Quiz</a>
                </div>
                <a class="sidebar-link haveSubmenu @yield('question')" href="javascript:void(0)">Question <i
                        class="fa-solid fa-caret-down"></i></a>
                <div class="sidebar-submenu @yield('questionExpanded')">
                    <a href="{{ url('question/add') }}" class="sidebar-link @yield('addQuestion')">Add Question</a>
                    <a href="{{ url('question/all') }}" class="sidebar-link @yield('allQuestion')">All Question</a>
                </div>
               
                <a class="sidebar-link @yield('pricing')" href="{{ url('pricing') }}">Pricing</a>
                <a class="sidebar-link @yield('certificate')" href="{{ url('certificate') }}">Certificate</a>
                <a class="sidebar-link @yield('profile')" href="{{ url('profile') }}">Profile</a>
                <a class="sidebar-link @yield('account')" href="{{ url('account') }}">Account</a>
                <a class="sidebar-link @yield('security')" href="{{ url('security') }}">Security</a>
                <a class="sidebar-link" href="{{ url('logout') }}">Logout</a>
            </div>
        </div>
        <div class="toggle-icon"><i class="fa-solid fa-caret-left"></i></div>
        <div class="main">
            <div class="theme-icon">
                <i class="fa-solid fa-sun"></i>
            </div>
            <div class="user-menu">
                <div class="user-menu-links">
                    <a href="{{ url('profile') }}"><i class="fa fa-user"></i></a>
                    <a href="{{ url('security') }}"><i class="fa fa-shield"></i></a>
                    <a href="{{ url('account') }}"><i class="fa fa-cog"></i></a>
                    <a href="{{ url('logout') }}"><i class="fa fa-sign-out-alt"></i></a>
                </div>
                <div class="toggle-user-menu"><i class="fa-solid fa-caret-left"></i></div>
            </div>
