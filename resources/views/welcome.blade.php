@extends("layouts.app")

@section("Title", "Home-page")

@section('main')

<form action="{{ route('trains') }}">
    <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">Treni</button>
    </div>
</form>


@endsection