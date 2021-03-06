@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Edit Questions</h2>
                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Go back to all Questions</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('questions.update', $question->id)}}">
                            {{method_field('PUT')}}
                            @include('layouts._form', ['buttonText' => 'Update Question'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
