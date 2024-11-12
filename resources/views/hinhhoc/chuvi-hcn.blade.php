@extends('app')

@section('content')
    <form class="w-50 mx-auto mt-5" action="{{ route('hinhhoc.tinhchuvihcn') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Length Perimeter:</label>
            <input type="text" class="form-control" name="length" value="{{ old('length', $length1 ?? '') }} " required>
        </div>

        <div class="mb-3">
            <label class="form-label">Width Perimeter:</label>
            <input type="text" class="form-control" name="width" value="{{ old('width', $width1 ?? '') }}" required>
        </div>

        <div class="flex">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            <a href="{{ route('hinhhoc.chuvi-hcn') }}" class="btn btn-primary mt-3">Reset</a>
        </div>

        @if (isset($chuvi))
            <h3 class="mt-3">Total: {{ $chuvi }}</h3>
        @endif


    </form>
@endsection
