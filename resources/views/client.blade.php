@extends('layout')

@section('content')
    <div class="w3-sidebar w3-bar-block w3side" style="width:17%">
        <div style="margin-top:10vh">
            <a  onclick="location.href='{{ url('client') }}'" class="w3-bar-item w3-button" >Dashboard</a>
            <a href="{{ url('client') }}" class="w3-bar-item w3-button">Blogs</a>
            <a href="#" class="w3-bar-item w3-button">Rms Profile</a>
            <a href="#" class="w3-bar-item w3-button">Profile</a>

        </div>

    </div>

    <div style="margin-left:17%">
        <div class="topnav">
            <h5>
                joe milton
            </h5>
        </div>
        <div class="dash shadow-sm p-3 mb-5 bg-white rounded">
            <h2 class="">Investment ideas</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bitcoin crash Expect1</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-info" onclick="location.href='{{ url('viewblog') }}'">View</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Bitcoin crash Expect 2</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-info">View</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Bitcoin crash Expect 3</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-info">View</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
