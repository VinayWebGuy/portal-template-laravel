@extends('layouts.main')
@section('title', 'All Question')
@section('question', 'active')
@section('questionExpanded', 'expanded')
@section('allQuestion', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">All Question</h2>

    <div class="table-container">
        <h3>Question Details</h3>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Options</th>
                    <th>Answer</th>
                    <th>Correct / Negative</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>HTML Stands for</td>
                    <td>
                        <span class="single-option">Hyper transfer meta log</span>
                        <span class="single-option">Hypertext markup lanaguage</span>
                        <span class="single-option">Hack trick main list</span>
                        <span class="single-option">Have to mark language</span>
                    </td>
                    <td>Hypertext markup lanaguage</td>
                    <td>1 / 0</td>
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
</div>
@endsection