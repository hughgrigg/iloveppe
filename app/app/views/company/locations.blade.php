@section('content')

<h1>Companies by Location</h1>

@foreach ($locations as $location)
<p>
    <strong>{{$location->province}}</strong><br />
    @foreach ($location->relations->companies as $company)
    {{$company->english_name}}
    @endforeach
</p>
@endforeach


@stop