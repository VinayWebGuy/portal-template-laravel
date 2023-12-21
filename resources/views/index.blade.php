@extends('layouts.main')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')
    <div class="data">
        <h2 class="page-heading">Dashboard</h2>
        <div class="all-counter-blocks">
            <div class="counter-block">
                <h4>Total Users</h4>
                <span data-counter="306">0</span>
            </div>
            <div class="counter-block">
                <h4>Total Team</h4>
                <span data-counter="16">0</span>
            </div>
            <div class="counter-block">
                <h4>Total Quiz</h4>
                <span data-counter="160">0</span>
            </div>
            <div class="counter-block">
                <h4>Total Questions</h4>
                <span data-counter="1720">0</span>
            </div>
        </div>
        <div class="table-container">
            <h3>Recent Users</h3>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Vinay</td>
                        <td>vinay@gmail.com</td>
                        <td>7206881088</td>
                        <td>5 mins ago</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Vinay</td>
                        <td>vinay@gmail.com</td>
                        <td>7206881088</td>
                        <td>5 mins ago</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Vinay</td>
                        <td>vinay@gmail.com</td>
                        <td>7206881088</td>
                        <td>5 mins ago</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Vinay</td>
                        <td>vinay@gmail.com</td>
                        <td>7206881088</td>
                        <td>5 mins ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-container">
            <h3>Add User</h3>
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
                        <input type="number" id="age" required>
                        <label for="age">Age</label>
                    </div>
                </div>
                <button class="btn">Submit</button>
            </form>
        </div>
        <div class="card-container">
            <div class="all-cards">
                <div class="card">
                    <div class="card-header">@charliegroup</div>
                    <div class="card-body">
                        <div class="details">Name: <span>Charlie Group</span></div>
                        <div class="details">Email: <span>charlie@charliegroup.in</span></div>
                        <div class="details">Mobile: <span>+91 9996716300</span></div>
                        <div class="details">Address: <span>SCO 385 MC Karnal</span></div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="small btn">View More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">@charliegroup</div>
                    <div class="card-body">
                        <div class="details">Name: <span>Charlie Group</span></div>
                        <div class="details">Email: <span>charlie@charliegroup.in</span></div>
                        <div class="details">Mobile: <span>+91 9996716300</span></div>
                        <div class="details">Address: <span>SCO 385 MC Karnal</span></div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="small btn">View More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">@charliegroup</div>
                    <div class="card-body">
                        <div class="details">Name: <span>Charlie Group</span></div>
                        <div class="details">Email: <span>charlie@charliegroup.in</span></div>
                        <div class="details">Mobile: <span>+91 9996716300</span></div>
                        <div class="details">Address: <span>SCO 385 MC Karnal</span></div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="small btn">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
