@extends('layouts.main')
@section('title', 'All Team')
@section('team', 'active')
@section('teamExpanded', 'expanded')
@section('allTeam', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">All Team</h2>
    <div class="table-container">
        <h3>Team Details</h3>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Roshan</td>
                    <td>iamroshan@gmail.com</td>
                    <td>7206841212</td>
                    <td>Karnal</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>preet</td>
                    <td>preet@gmail.com</td>
                    <td>9671841212</td>
                    <td>Panipat</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sumit</td>
                    <td>heysumit@outlook.com</td>
                    <td>7206841000</td>
                    <td>Karnal</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dilip joshi</td>
                    <td>dilipj254@gmail.com</td>
                    <td>7206841212</td>
                    <td>Ambala</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Hritik Roshan</td>
                    <td>roshanhritik@gmail.com</td>
                    <td>9896748596</td>
                    <td>Gohana</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Roshan</td>
                    <td>iamroshan@gmail.com</td>
                    <td>7206841212</td>
                    <td>Karnal</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>preet</td>
                    <td>preet@gmail.com</td>
                    <td>9671841212</td>
                    <td>Panipat</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Sumit</td>
                    <td>heysumit@outlook.com</td>
                    <td>7206841000</td>
                    <td>Karnal</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Dilip joshi</td>
                    <td>dilipj254@gmail.com</td>
                    <td>7206841212</td>
                    <td>Ambala</td>
                    <td>
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Hritik Roshan</td>
                    <td>roshanhritik@gmail.com</td>
                    <td>9896748596</td>
                    <td>Gohana</td>
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
