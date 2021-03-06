@extends('layouts.admin')
@section('content')
    <h3>{{ trans('global.show') }} Active Client</h3>

    <div class="form-group">
        <a class="btn btn-default" href="{{ route('admin.active-client.index') }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Primary Information
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.id') }}
                                </th>
                                <td>
                                    {{ $activeClient->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Company Name
                                </th>
                                <td>
                                    {{ $activeClient->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Status
                                </th>
                                <td>
                                    {{ (new \App\Models\ActiveClient)->getStatus($activeClient->status) }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Number Of Students
                                </th>
                                <td>
                                    {{ $activeClient->number_of_students}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Number Of Lectures
                                </th>
                                <td>
                                    {{ $activeClient->number_of_lecturers}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Remark
                                </th>
                                <td>
                                    {{ $activeClient->remark}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Contact Person
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Company Person Name
                                </th>
                                <td>
                                    {{ $activeClient->contact_person_name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Jabatan
                                </th>
                                <td>
                                    {{ $activeClient->contact_person_grade }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Province
                                </th>
                                <td>
                                    {{  $activeClient->contactPersonProvinceData->name ?? ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    City
                                </th>
                                <td>
                                    {{ $activeClient->contactPersonCityData->name ?? ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Address
                                </th>
                                <td>
                                    {{ $activeClient->contact_person_address}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Phone
                                </th>
                                <td>
                                    {{ $activeClient->contact_person_phone}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Mobile Phone
                                </th>
                                <td>
                                    {{ $activeClient->contact_person_mobile_phone }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td>
                                    {{ $activeClient->contact_person_mobile_email }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Addresses
        </div>
        <div class="card-body">
            <div class="form-group">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            Mailing Address
                        </th>
                        <td>
                            {{ $activeClient->address_mailing_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Country
                        </th>
                        <td>
                            {{ $activeClient->address_country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Province
                        </th>
                        <td>
                            {{  $activeClient->addressProvinceData->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            City
                        </th>
                        <td>
                            {{ $activeClient->addressCityData->name  ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Postal Code
                        </th>
                        <td>
                            {{ $activeClient->address_postal_code}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a class="btn btn-default" href="{{ route('admin.active-client.index') }}">
        {{ trans('global.back_to_list') }}
    </a>

@endsection
