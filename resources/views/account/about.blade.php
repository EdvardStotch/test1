@extends('layouts.account')

@section('content')
    <!-- !PAGE CONTENT! -->

    <h1><b>Account Info:</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
        <div class="w3-responsive">
            <table class="w3-table-all">
                <tr>
                    <th>Field</th>
                    <th>Info</th>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td>{{ auth()->user()->first_name }}</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>{{ auth()->user()->last_name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <td>Questions</td>
                    <td><!--TODO user question counts --></td>
                </tr>
                <tr>
                    <td>Answers</td>
                    <td><!--TODO user answers counts --></td>
                </tr>
                <tr>
                    <td>Comments</td>
                    <td><!--TODO user answer's comments counts --></td>
                </tr>
                <tr>
                    <td>Account Created</td>
                    <td>{{ auth()->user()->created_at }}</td>
                </tr>
            </table>
        </div>

    </div>
    <!-- End page content -->
@endsection
