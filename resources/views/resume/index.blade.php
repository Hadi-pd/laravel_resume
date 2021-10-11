@extends('lay.master')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">

            <a class="btn btn-primary me-2"
                href="{{ $edit ? route('resume.update', $resume) : url('admin') }}">Back</a>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Form elements</h4>
                            <p class="card-description">
                                Input Resume information to form
                            </p>
                            <form class="forms-sample" method="POST"
                                action="{{ $edit ? route('resume.update', $resume) : url('resume') }}">
                                @csrf
                                @if ($edit)
                                    @method('PUT')
                                @endif

                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $edit ? $resume->name : '' }}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Work subject</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        value="{{ $edit ? $resume->work_subject : '' }}" name="work_subject">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">About me</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        value="{{ $edit ? $resume->about : '' }}" name="about"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Age</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $edit ? $resume->age : '' }}" name="age">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $edit ? $resume->email : '' }}" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $edit ? $resume->phone : '' }}" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $edit ? $resume->address : '' }}" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Image</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $edit ? $resume->image : '' }}" name="image">
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