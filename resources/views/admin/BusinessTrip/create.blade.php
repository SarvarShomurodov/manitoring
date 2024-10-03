@extends('layouts.app-admin')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Create a New Business Trip</div>
        </div>
        <div class="card-body">
          <div class="row">
            <form action="{{ route('business_trips.store') }}" method="POST">
              @csrf
              <div class="col-md-6 mx-5">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="form-group col-lg-4">
                  <label for="type">Type</label><br>
                  {{-- <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}" required> --}}
                  <select class="form-control" name="type" id="type">
                      <option value="hududiy">Hududlarga</option>
                      <option value="xorijiy">Xorijiy</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="goal">Goal</label>
                    <textarea name="goal" id="goal" class="form-control" required>{{ old('goal') }}</textarea>
                </div>

                <div class="form-group col-lg-4">
                  <label for="start_date">Start Date</label>
                  <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}" required>
                </div>

                <div class="form-group col-lg-4">
                  <label for="end_date">End Date</label>
                  <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}" required>
                </div>

                <div class="form-group">
                  <label for="adress">Address</label>
                  <input type="text" name="adress" id="adress" class="form-control" value="{{ old('adress') }}" required>
                </div>

                <div class="form-group">
                  <label for="list_person">List Person</label>
                  <textarea name="list_person" id="list_person" class="form-control" required>{{ old('list_person') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="data_name">Data Name</label>
                  <input type="text" name="data_name" id="data_name" class="form-control" value="{{ old('data_name') }}" required>
                </div>

                <div class="form-group col-lg-3">
                  <label for="invite_count">Invite Count</label>
                  <input type="number" name="invite_count" id="invite_count" class="form-control" value="{{ old('invite_count') }}" min="0" required>
                </div>

                <div class="form-group col-lg-3">
                  <label for="ball">Ball</label>
                  <input type="number" name="ball" id="ball" class="form-control" value="{{ old('ball') }}" min="0" required>
                </div>

                <div class="form-group col-lg-4">
                  <label for="quarters_id" class="form-label">Select Quarter</label>
                  <select name="quarters_id" class="form-control" id="quarters_id" class="form-control" required>
                      <option value="">-- Select a Quarter --</option>
                      @foreach($quarters as $quarter)
                          <option value="{{ $quarter->id }}" {{ old('quarters_id') == $quarter->id ? 'selected' : '' }}>
                              {{ $quarter->name }}
                          </option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="card-action">
                <button class="btn btn-success">Submit</button>
                <button class="btn btn-danger">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
