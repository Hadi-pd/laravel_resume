@extends('lay.master')
@section('content')


    @foreach ($contacts as $contact)
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="h5 mb-1">{{ $contact->name }} <span class="text-muted h6">at
                                    {{ $contact->email }}</span></div>
                            <div class="text-muted text-small mb-2">
                            </div>
                            <div>
                                {{ $contact->message }}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <form method="POST" action="{{ route('contacts.destroy', $contact) }}">
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
                        &nbsp; &nbsp; &nbsp;
                        <div class="text-muted text-small mb-2" style="line-height: 2.0;"> Sent in:
                            {{ $contact->updated_at }} </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
