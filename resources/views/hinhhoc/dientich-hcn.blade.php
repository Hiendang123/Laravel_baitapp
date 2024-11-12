@extends('app')

@section('content')
    <form class="w-50 mx-auto mt-5" action="{{ route('hinhhoc.tinhdientichhcn') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Length Area:</label>
            <input type="text" class="form-control" name="length_rectangle"
                value="{{ old('length_rectangle', $Length_rectangle ?? '') }} " required>
        </div>

        <div class="mb-3">
            <label class="form-label">Width Area:</label>
            <input type="text" class="form-control" name="width_rectangle"
                value="{{ old('width_rectangle', $Width_rectangle ?? '') }}" required>
        </div>

        <div class="flex">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <a href="{{ route('hinhhoc.dientich-hcn') }}" class="btn btn-primary mt-3">Reset</a>
        </div>

        @if (isset($dientich))
            <h3 class="mt-3">Total: {{ $dientich }}</h3>
        @endif

    </form>
@endsection
