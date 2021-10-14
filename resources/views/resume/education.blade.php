@extends('lay.master')
@section('content')

@if (!$edit)
    @foreach ($educations as $education)
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="h5 mb-1">{{ $education->education_subject }} <span class="text-muted h6">at
                                    {{ $education->college }}</span></div>
                            <div class="text-muted text-small mb-2">{{ $education->date }} </div>
                            <div>
                                {{ $education->description }}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <form method="POST" action="{{ route('education.destroy', $education) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:unset; border:none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="delete-icon" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                        <a href="{{ route('education.edit', $education) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="edit-icon" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                        &nbsp; &nbsp; &nbsp;
                        <div class="text-muted text-small mb-2" style="line-height: 2.0;"> last update:
                            {{ $education->updated_at }} </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Form elements</h4>
        <p class="card-description">
          Input education information to form 
        </p>
        <form class="forms-sample" method="POST" action="{{($edit) ? route('education.update',$education) :  url('education')}}">
          @csrf
          @if ($edit)
            @method('PUT')
          @endif
        
          <div class="form-group">
            <label for="exampleInputName1">Work Name</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{($edit) ? $education->education_subject : ""}}" name="education_subject">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Company Name</label>
            <input type="text" class="form-control" id="exampleInputCity1" value="{{($edit) ? $education->college : ""}}"  name="college">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Date</label>
            <input type="text" class="form-control" id="exampleInputCity1" value="{{($edit) ? $education->date : ""}}"  name="date">
          </div>
          <div class="form-group">
              <label for="exampleTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
              name="description">{{($edit) ? $education->description : ''}}</textarea>
            </div>
          @if ($edit)
          <button type="submit" class="btn btn-primary me-2">Update</button>

          @else
          <button type="submit" class="btn btn-primary me-2">Submit</button>
         @endif
          <a class="btn btn-light" href="{{route('admin')}}" >Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
