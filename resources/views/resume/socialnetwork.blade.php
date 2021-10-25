@extends('lay.master')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <a class="btn btn-primary me-2"
                href="{{ $edit ? route('socialnetwork.update', $socialnetwork) : url('admin') }}">Back</a>


            @if (!$edit && !$socialnetwork->isEmpty())
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">SocialNetwork table</h4>
                                <p class="card-description">
                                    Add Categories
                                </p>
                                <div class="table-responsive pt-3">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th> name </th>
                                                <th> icon </th>
                                                <th> link </th>
                                                <th>Delete/Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($socialnetwork as $network)
                                                <tr>
                                                    <td>{{ $network->name }} </td>
                                                    <td> {{ $network->icon }}</td>
                                                    <td> {{ $network->link }}</td>
                                                    <td>

                                                        <div class="d-flex">
                                                            <form method="POST"
                                                                action="{{ route('socialnetwork.destroy', $network) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" style="background:unset; border:none">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="delete-icon" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                            <a href="{{ route('socialnetwork.edit', $network) }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="edit-icon" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Form elements</h4>
                            <p class="card-description">
                                Input socialnetwork information to form
                            </p>
                            <form class="forms-sample" method="POST"
                                action="{{ $edit ? route('socialnetwork.update', $socialnetwork) : url('socialnetwork') }}">
                                @csrf
                                @if ($edit)
                                    @method('PUT')
                                @endif

                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Site Name"
                                        value="{{ $edit ? $socialnetwork->name : '' }}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Icon</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        placeholder="Site icon name in font-awesome"
                                        value="{{ $edit ? $socialnetwork->icon : '' }}" name="icon">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Profile link</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        placeholder="Site profile link" value="{{ $edit ? $socialnetwork->link : '' }}"
                                        name="link">
                                </div>
                                @if ($edit)
                                    <button type="submit" class="btn btn-primary me-2">Update</button>

                                @else
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                @endif
                                <a class="btn btn-light" href="{{ route('admin') }}">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
