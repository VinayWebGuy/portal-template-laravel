@extends('layouts.main')
@section('title', 'Security')
@section('security', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">Security</h2>

    <div class="container">
        <h3>Manage Security</h3>
        <div class="all-toggles">
            <div class="single-toggle">
                <label for="tfa">Two Factor Authentication</label>
                <input type="checkbox" name="tfa" id="tfa">
            </div>
            <div class="single-toggle">
                <label for="multiple_login">Multiple Login</label>
                <input type="checkbox" name="multiple_login" id="multiple_login">
            </div>
            <div class="single-toggle checked">
                <label for="public_account">Public Account</label>
                <input checked type="checkbox" name="public_account" id="public_account">
            </div>
        </div>
    </div>
    <div class="form-container">
        <h3>Change Password</h3>
        <form action="">
            <div class="form-row">
                <div class="form-group three">
                    <input type="password" id="old_password" required>
                    <label for="old_password">Old Password</label>
                </div>
                <div class="form-group three">
                    <input type="password" id="new_password" required>
                    <label for="new_password">New Password</label>
                </div>
                <div class="form-group three">
                    <input type="password" id="confirm_password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>
            </div>
            <button class="btn">Update</button>
        </form>
    </div>

</div>

@endsection