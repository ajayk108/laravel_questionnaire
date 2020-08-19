@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires" method='post'>

                        @csrf

                        <div class="form-group">
                            <label for="title">title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="title" placeholder="title">
                            <small id="title" class="form-text text-muted">give your questionnaire a title that attracts attention</small>
                            @error('title')
                            <small class="text-danger">{{ $message  }}</small>
                            @enderror
                          </div>

                        <div class="form-group">
                            <label for="purpose">purpose</label>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purpose" placeholder="purpose">
                            <small id="purpose" class="form-text text-muted">giving response </small>
                            @error('purpose')
                            <small class="text-danger">{{ $message  }}</small>
                            @enderror
                          </div>

                          <button type="submit" class="btn btn-primary">Save Questionnaire</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
