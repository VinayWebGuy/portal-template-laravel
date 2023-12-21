@extends('layouts.main')
@section('title', 'Profile')
@section('profile', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">Profile</h2>

    <div class="form-container">
        <h3>Edit Profile</h3>
        <form action="">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="name" required value="Vinay">
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" required value="vinaywebguy@gmail.com">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="number" id="mobile" required value="7206881088">
                    <label for="mobile">Mobile</label>
                </div>
                <div class="form-group">
                    <input type="number" id="age" required value="24">
                    <label for="age">Age</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group full">
                    <textarea required name="bio" id="bio" cols="30" rows="5">Hello my name is Vinay.</textarea>
                    <label for="bio">Bio</label>

                </div>
            </div>
            <button class="btn">Update</button>
        </form>
    </div>
</div>

@endsection