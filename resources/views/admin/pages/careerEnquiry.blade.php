@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <h2 class="mb-4">Career Enquiry Details</h2>
        </div>
    </div>

   <div class="row">
                        <div class="col-md-12 stretch-card">
                                <div class="card">
                                        <div class="card-body">

                                                <div class="table-responsive">
                        <table class="table table-bordered table-hover  no-footer"
                                                                role="grid">
                            <thead >
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Applied Position</th>
                                    <th>Current Designation</th>
                                    <th>Total Experience</th>
                                    <th>Current Organization</th>
                                    <th>Expected Salary</th>
                                    <th>Highest Qualification</th>
                                    <th>File</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($career as $car)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->email }}</td>
                                    <td>{{ $car->contact_no }}</td>
                                    <td>{{ $car->applied_position }}</td>
                                    <td>{{ $car->current_designation }}</td>
                                    <td>{{ $car->total_experience }}</td>
                                    <td>{{ $car->current_organization }}</td>
                                    <td>{{ $car->expected_salary }}</td>
                                    <td>{{ $car->highest_qualification }}</td>
                                    <td>
                                        @if($car->file_path)
                                            <a href="{{ asset('storage/'.$car->file_path) }}" target="_blank" class="btn btn-sm btn-primary">
                                                View File
                                            </a>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="11" class="text-center">No records found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
