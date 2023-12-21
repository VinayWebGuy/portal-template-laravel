@extends('layouts.main')
@section('title', 'Add Quiz')
@section('quiz', 'active')
@section('quizExpanded', 'expanded')
@section('addQuiz', 'active')
@section('content')

<div class="data">
    <h2 class="page-heading">Add Quiz</h2>
    <div class="form-container">
        <h3>Quiz Details</h3>
        <form action="">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="title" required>
                    <label for="title">Title</label>
                </div>
                <div class="form-group">
                    <select required name="type" id="type" class="select">
                        <option hidden value="">Choose</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                        <option value="Real">Real</option>
                    </select>
                    <label for="type">Type</label>
                </div>
                <button type="button" class="add-ques-btn">Add Question</button>
            </div>
            <button class="btn">Add</button>
        </form>
    </div>

    <div class="backdrop"></div>
    <div class="modal">
        <div class="modal-heading">
            <input class="select_question" type="text" placeholder="Select Question">
            <div class="close-modal"><i class="fa fa-times"></i></div></div>
        <div class="modal-body">
            <div class="select-question">
                <span class="question-title">Full form of HTML</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of CSS</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of JS</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of PHP</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of MERN</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of MEAN</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of VS Code</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-plus"></i></span>
            </div>
        </div>
    </div>
</div>
@endsection