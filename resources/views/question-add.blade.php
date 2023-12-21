@extends('layouts.main')
@section('title', 'Add Question')
@section('question', 'active')
@section('questionExpanded', 'expanded')
@section('addQuestion', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">Add Question</h2>

    <div class="form-container">
        <h3>Question Details</h3>
        <form action="">
            <div class="form-row">
                <div class="form-group full">
                    <input type="text" id="title" required>
                    <label for="title">Title</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group four">
                    <input type="text" id="option1" required>
                    <label for="option1">Option 1</label>
                </div>
                <div class="form-group four">
                    <input type="text" id="option2" required>
                    <label for="option2">Option 2</label>
                </div>
                <div class="form-group four">
                    <input type="text" id="option3" required>
                    <label for="option3">Option 3</label>
                </div>
                <div class="form-group four">
                    <input type="text" id="option4" required>
                    <label for="option4">Option 4</label>
                </div>
            </div>
            <div class="all-toggles">
                <div class="single-toggle">
                    <label for="option_1">Option 1</label>
                    <input type="radio" name="ans" id="option_1">
                </div>
                <div class="single-toggle">
                    <label for="option_2">Option 2</label>
                    <input type="radio" name="ans" id="option_2">
                </div>
                <div class="single-toggle">
                    <label for="option_3">Option 3</label>
                    <input type="radio" name="ans" id="option_3">
                </div>
                <div class="single-toggle">
                    <label for="option_4">Option 4</label>
                    <input type="radio" name="ans" id="option_4">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <input type="number" id="correct_mark" required value="1">
                    <label for="correct_mark">Correct Mark</label>
                </div>
                <div class="form-group">
                    <input type="number" id="nagative_mark" required value="0">
                    <label for="nagative_mark">Nagative Mark</label>
                </div>
                
            </div>


            <button class="btn">Add</button>
        </form>
    </div>
</div>

@endsection