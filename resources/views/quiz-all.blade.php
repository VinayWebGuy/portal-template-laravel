@extends('layouts.main')
@section('title', 'All Quiz')
@section('quiz', 'active')
@section('quizExpanded', 'expanded')
@section('allQuiz', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">All Quiz</h2>
    <div class="table-container">
        <h3>Question Details</h3>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Questions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Technical v1</td>
                    <td>Easy</td>
                    <td> <button type="button" class="add-ques-btn">View Questions</button></td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
               
            </tbody>
        </table>

        <div class="pagination">
           <div class="all-pages">
            <a class="page_no active" href="#">1</a>
            <a class="page_no" href="#">2</a>
            <a class="page_no" href="#">3</a>
            <a class="page_dots" href="#">.....</a>
            <a class="page_no" href="#">12</a>
            <a class="page_no" href="#">13</a>
           </div>
        </div>
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
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of CSS</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of JS</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of PHP</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of MERN</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of MEAN</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
            <div class="select-question">
                <span class="question-title">Full form of VS Code</span>
                <span class="question-marks">1</span>
                <span class="select-this"><i class="fa fa-eye"></i></span>
            </div>
        </div>
    </div>
</div>
@endsection