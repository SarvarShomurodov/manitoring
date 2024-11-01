<!-- resources/views/publishes/edit.blade.php -->

@extends('layouts.app-admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Илмий нашриёт ишларини таҳрирлаш</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('publishes') }}"> Орқага</a>
        </div>
    </div>
</div>
<hr>
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
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('publishes.update', $publishTypes->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="name"><b>Илмий иши номи</b></label>
                                <textarea name="name" id="summernote" class="form-control" required>{{ old('name', $publishTypes->name) }}</textarea>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="author"><b>Муаллифи</b></label>
                                <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $publishTypes->author) }}" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="jurnal_name"><b>Журнал/анжуман ёки нашриёт номи</b></label>
                                <textarea name="jurnal_name" id="summernote2" class="form-control" required>{{ old('jurnal_name', $publishTypes->jurnal_name) }}</textarea>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="type_id"><b>Илмий иш тури</b></label>
                                <select name="type_id" id="type_id" class="form-control" required>
                                    @foreach($publishTypesIds as $type)
                                    {{-- <option value="{{ $type->id }}" {{ old('type_id', $type->type_id) == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option> --}}
                                    <option value="{{ $type->id }}" 
                                        {{ (old('type_id', $publishTypes->type_id ?? '') == $type->id) ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="date"><b>Чоп этилган санаси</b></label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $publishTypes->date) }}" required>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="number"><b>Журнал сони рақами</b></label>
                                <input type="number" name="number" id="number" class="form-control" value="{{ old('number', $publishTypes->number) }}" min="0" required>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="pages"><b>Журнал/анжуман материаллар тўпламида бетлар</b></label>
                                <input type="number" name="pages" id="pages" class="form-control" value="{{ old('pages', $publishTypes->pages) }}" min="0" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="link"><b>Ҳавола</b></label>
                                <textarea name="link" id="summernote3" class="form-control" required>{{ old('link', $publishTypes->link) }}</textarea>
                            </div>

                            <div class="form-group col-lg-2">
                                <label for="quarters_id" class="form-label"><b>Чораклар</b></label>
                                <select name="quarters_id" id="quarters_id" class="form-control" required>
                                    @foreach($quarters as $quarter)
                                    <option value="{{ $quarter->id }}" 
                                        {{ (old('quarters_id', $publishTypes->quarters_id ?? '') == $quarter->id) ? 'selected' : '' }}>
                                        {{ $quarter->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Таҳрирлаш</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
