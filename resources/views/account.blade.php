@extends('layouts.main')
@section('title', 'Account')
@section('account', 'active')
@section('content')
<div class="data">
    <h2 class="page-heading">Account</h2>

    <div class="container">
        <h3>Wallet</h3>
        <div class="my-wallet">
            <div class="wallet-balance">PT 2147.50</div>
            <div class="add-balance"><a href="#" class="btn small">Add Balance</a></div>
        </div>
    </div>
    <div class="table-container">
        <h3>Recent Transactions</h3>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Credit</th>
                    <th>Debit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>18-12-2023</td>
                    <td>700</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>18-12-2023</td>
                    <td></td>
                    <td>320</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>16-12-2023</td>
                    <td>1320</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>15-12-2023</td>
                    <td>1050</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>11-12-2023</td>
                    <td></td>
                    <td>400</td>
                </tr>
               
            </tbody>
        </table>
    </div>

    <div class="container">
        <h3>Referral Code</h3>
        <div class="my-referral-code">2fry5grddswc56sdvbgcdvd345 <i
                class="fa fa-copy copy-referral-code"></i></div>
    </div>
    <div class="table-container">
        <h3>Recent Referrals</h3>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Roshan</td>
                    <td>iamroshan@gmail.com</td>
                    <td>3 days ago</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Preet</td>
                    <td>hellopreet@yahoo.com</td>
                    <td>6 days ago</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Simran</td>
                    <td>simran240@gmail.com</td>
                    <td>1 month ago</td>
                </tr>
               
               
            </tbody>
        </table>
    </div>
</div>

@endsection