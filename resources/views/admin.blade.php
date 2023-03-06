@extends('layout')

@section('content')
<h2 class="bg-primary text-light py-3 text-center">ADMIN</h2>
<div class="py-2 px-5">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-rm-tab" data-bs-toggle="pill" data-bs-target="#pills-rm"
                type="button" role="tab" aria-controls="pills-rm" aria-selected="true">RMs</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-client-tab" data-bs-toggle="pill" data-bs-target="#pills-client"
                type="button" role="tab" aria-controls="pills-client" aria-selected="false">Clients</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-idea-tab" data-bs-toggle="pill" data-bs-target="#pills-idea"
                type="button" role="tab" aria-controls="pills-idea" aria-selected="false">Ideas</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-rm" role="tabpanel" aria-labelledby="pills-rm-tab">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>RM 1</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>RM 2</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>RM 3</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success w-100">CREATE RM</button>
        </div>
        <div class="tab-pane fade" id="pills-client" role="tabpanel" aria-labelledby="pills-client-tab">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>CLIENT 1</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>CLIENT 2</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>CLIENT 3</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success w-100">CREATE CLIENT</button>
        </div>
        <div class="tab-pane fade" id="pills-idea" role="tabpanel" aria-labelledby="pills-idea-tab">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>IDEA 1</td>
                        <td>01.01.2023</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-warning">UPDATE</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>IDEA 2</td>
                        <td>01.01.2023</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-warning">UPDATE</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>IDEA 3</td>
                        <td>01.01.2023</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-warning">UPDATE</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success w-100">CREATE IDEA</button>
        </div>
    </div>
</div>

@endsection