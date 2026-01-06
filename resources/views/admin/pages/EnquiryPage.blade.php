@extends('admin.layout.main')

@section('content')
        <div class="content-wrapper">
                <div class="row">
                        <div class="col-md-12 grid-margin">
                                <div class="d-flex justify-content-between align-items-end">
                                        <h2 class="mb-0">Contact Enquiry Details</h2>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-12 stretch-card">
                                <div class="card">
                                        <div class="card-body">

                                                <div class="table-responsive">
                                                        <table 
                                                                class="table table-bordered table-hover  no-footer"
                                                                role="grid">

                                                                <thead>
                                                                        <tr>
                                                                                <th style="width: 5%">#</th>
                                                                                <th style="width: 15%">Name</th>
                                                                                <th style="width: 20%">Email</th>
                                                                                <th style="width: 60%">Message</th>
                                                                        </tr>
                                                                </thead>

                                                                <tbody>
                                                                        @forelse($data as $enquiry)
                                                                                <tr>
                                                                                        <td>{{ $enquiry->id }}</td>
                                                                                        <td>{{ $enquiry->name }}</td>
                                                                                        <td>{{ $enquiry->email }}</td>
                                                                                        <td>
                                                                                                <div class="message-cell">
                                                                                                       {{ $enquiry->message }}
                                                                                                </div>
                                                                                        </td>
                                                                                </tr>
                                                                        @empty
                                                                                <tr>
                                                                                        <td colspan="3" class="text-center">
                                                                                                No enquiries found
                                                                                        </td>
                                                                                </tr>
                                                                        @endforelse
                                                                </tbody>

                                                        </table>
                                                </div>
                                                <div class="">
                                                        {{ $data->links() }}
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

        </div>
@endsection