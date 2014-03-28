@section('content')

<h1>Companies Index</h1>

@foreach ($companies as $company)
<p>
    <strong>{{$company->english_name}} ({{$company->chinese_name}})</strong><br />
    <strong>
        Brochure location/s:
        @foreach ($company->brochures as $brochure)
            {{$brochure->folder}}, 
        @endforeach
    </strong><br />
    {{$company->url}}<br />
    {{$company->address->street_address}}, {{$company->address->district}}<br />
    {{$company->address->city}}, {{$company->address->province}}<br />
    {{$company->address->country}} {{$company->address->postcode}}
</p>
@endforeach


@stop