@extends('layouts.app')

@section('content')

                  {{ $application_info->PI_fullname}}<br />
                  {{ $application_info->PI_address}}<br />
                  {{ $application_info->SP_fullname}}<br />
                  {{ $application_info->PA_fullname}}<br />
                  {{ $application_info->PA_churchname}}
@endsection
