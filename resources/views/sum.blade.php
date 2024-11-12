@extends('app')
@section('content')
    <form class="w-50 mx-auto mt-5" action="{{ route('sum.tinhtong') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Number A:</label>
            <input type="text" class="form-control" name="number_A" value="{{ old('number_A', $numberA ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Number B:</label>
            <input type="text" class="form-control" name="number_B" value="{{ old('number_B', $numberB ?? '') }}"
                required>
        </div>

        <div class="flex">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <a href="{{ route('sum.sumnumber') }}" class="btn btn-primary mt-3">Reset</a>
        </div>

        @if (isset($sumNumber))
            <h3 class="mt-3">Total: {{ $sumNumber }}</h3>
        @endif

    </form>
@endsection
