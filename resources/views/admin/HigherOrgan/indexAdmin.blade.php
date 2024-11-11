<style>


</style>
@extends('layouts.app-admin')

@section('title', 'Higher Organ')

@section('content')
    @if (Auth::user()->name == 'Abdixojayev')
        {{-- <div class="col-lg-12 mb-4">
            <h2>Юқори ташкилотларнинг топшириқларга мувофиқ бажарилган ишлар сони, шундан</h2>
        </div> --}}
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Таҳлилий материаллар сонини ҳудудлар бўйича филтрлаш</h2>
                </div>
                <div class="pull-right mb-4">
                    <form action="{{ route('higher_admin.indexAdmin') }}" method="GET" class="d-inline-block">
                        <div class="row g-2">
                            <div class="col-auto">
                                <select name="regions_id" id="regions_id" class="form-control">
                                    <option value="">Барча ҳудудлар</option>
                                    @foreach ($regions as $quarter)
                                        <option value="{{ $quarter->id }}" {{ request('regions_id') == $quarter->id ? 'selected' : '' }}>
                                            {{ $quarter->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-auto">
                                <select name="quarters_id" id="quarters_id" class="form-control">
                                    <option value="">Барча кварталлар</option>
                                    @foreach ($quarters as $quarter)
                                        <option value="{{ $quarter->id }}" {{ request('quarters_id') == $quarter->id ? 'selected' : '' }}>
                                            {{ $quarter->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    @else
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{-- <div class="card">
        <div class="card-body">
          <div class="table-responsive"> --}}
            <table>
              <thead>
                    <tr>
                        <th>№</th>
                        <th>Таҳлилий материал номи</th>
                        <th>Асос</th>
                        <th>Топшириқ санаси(ёки хатсиз)</th>
                        <th>Топшириқ рақами(ёки хатсиз)</th>
                        <th>Кимга юборилди</th>
                        <th>Хат санаси</th>
                        <th>Хат рақами</th>
                        <th>Йўналиш</th>
                        <th>Сўровнома мавжудлиги (ҳа, йўқ)</th>
                        <th>Давлат ёки ҳудуд</th>
                        <th>Чораклар</th>
                    </tr>
              </thead>
              <tbody>
                @foreach ($higherOrgans as $trip)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{!! $trip->name !!}</td>
                        <td>{{ $trip->whogiven->name }}</td>
                        <td>{{ $trip->date }}</td>
                        <td>{{ $trip->ass_number }}</td>
                        <td>{{ $trip->who_send }}</td>
                        <td>{{ $trip->letter_date }}</td>
                        <td>{{ $trip->letter_number }}</td>
                        <td>{{ $trip->direction }}</td>
                        <td>{{ $trip->sorov }}</td>
                        <td>{{ $trip->regionsVal->name }}</td>
                        <td>{{ $trip->quarter->name }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          {{-- </div>
        </div>
      </div> --}}
@endsection