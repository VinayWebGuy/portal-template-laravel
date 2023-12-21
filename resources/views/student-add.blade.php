@extends('layouts.main')
@section('title', 'Add Student')
@section('student', 'active')
@section('studentExpanded', 'expanded')
@section('addStudent', 'active')
@section('content')

<div class="data">
    <h2 class="page-heading">Add Student</h2>

    <div class="form-container">
        <h3>Student Details</h3>
        <form action="">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="name" required>
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="number" id="mobile" required>
                    <label for="mobile">Mobile</label>
                </div>
                <div class="form-group">
                    <input type="date" id="dob" required>
                    <label for="dob">Date of birth</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-group">
                    <input type="confirm_password" id="password" required>
                    <label for="password">Confirm Password</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group three">
                   <select name="a_country" class="search-select" data-placeholder="Select Country">
                        <option value="india">India</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="nepal">Nepal</option>
                        <option value="sri lanka">Sri Lanka</option>
                        <option value="australia">Australia</option>
                        <option value="uk">UK</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                        <option value="new zealand">New Zealand</option>
                        <option value="germany">Germany</option>
                        <option value="france">France</option>
                        <option value="italy">Italy</option>
                   </select>
                </div>
                <div class="form-group three">
                   <select name="a_state" class="search-select" data-placeholder="Select State">
                        <option value="haryana">Haryana</option>
                        <option value="delhi">Delhi</option>
                        <option value="punjab">Punjab</option>
                        <option value="uttar pradesh">Uttar Pradesh</option>
                        <option value="uttarakhand">Uttarakhand</option>
                        <option value="bihar">Bihar</option>
                        <option value="mumbai">Mumbai</option>
                   </select>
                </div>
                <div class="form-group three">
                   <select name="a_city" class="search-select" data-placeholder="Select City">
                        <option value="karnal">Karnal</option>
                        <option value="ambala">Ambala</option>
                        <option value="kurukshetra">Kurukshetra</option>
                        <option value="panipat">Panipat</option>
                        <option value="sonepat">Sonepat</option>
                        <option value="gohana">Gohana</option>
                        <option value="narnaul">Narnaul</option>
                        <option value="rohtak">Rohtak</option>
                        <option value="bhiwani">Bhiwani</option>
                        <option value="hisar">hisar</option>
                        <option value="sirsa">Sirsa</option>
                   </select>
                </div>
            </div>

            <button class="btn">Add</button>
        </form>
    </div>
</div>
@endsection