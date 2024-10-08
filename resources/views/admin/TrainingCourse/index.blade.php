@extends('layouts.app-admin')

@section('title', 'Business Trips')

@section('content')
  
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
          <div class="card-title">Training Courses</div>
        </div>
        <div class="card-body">
          @if (Auth::user()->name == 'Abdixojayev')
            
          @else
          <div class="card-sub">
            <a href="{{ route('training_courses.create') }}" class="btn btn-primary">Add New Training Courses</a>
          </div>
          @endif
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                    <tr>
                      <th>№</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Organizer</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Invite Count</th>
                        <th>List Person</th>
                        <th>Chorak</th>
                        @if(Auth::user()->name == 'Abdixojayev')
                        @else
                            <th>Action</th>  
                        @endif
                    </tr>
              </thead>
              <tbody>
                @foreach ($trainingCourses as $trip)
                    <tr>
                      <td>{{ ++$i }}</td>
                        <td>{{ $trip->name }}</td>
                        <td>{{ $trip->type }}</td>
                        <td>{{ $trip->organizer }}</td>
                        <td>{{ $trip->date }}</td>
                        <td>{{ $trip->adress }}</td>
                        <td>{{ $trip->invite_count }}</td>
                        <td>{{ $trip->list_person }}</td>
                        <td>{{ $trip->quarter->name }}</td>
                        @if (Auth::user()->name == 'Abdixojayev')
                        @else
                        <td>
                            <form action="{{ route('training_courses.destroy',$trip->id) }}" method="POST">        
                                <a class="btn btn-info" href="{{ route('training_courses.edit',$trip->id) }}">Ўзгартириш</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Ўчириш</button>
                            </form>
                        </td> 
                        @endif
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection
