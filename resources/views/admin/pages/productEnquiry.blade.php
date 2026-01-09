@extends('admin.layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-end">
                    <h2 class="mb-0">Product Enquiries</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">

                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 20%">Name</th>
                                        <th style="width: 25%">Email</th>
                                        <th style="width: 20%">Product</th>
                                        <th style="width: 30%">Message</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($enquiries as $enquiry)
                                        <tr>
                                            <td>{{ $enquiry->id }}</td>
                                            <td>{{ $enquiry->name }}</td>
                                            <td>{{ $enquiry->email }}</td>
                                            <td>
                                                {{ $enquiry->product?->title ?? '-' }}
                                            </td>
                                            <td>
                                                <div class="message-cell">
                                                    {!! nl2br(e(Str::limit($enquiry->query, 100))) !!}
                                                </div>
                                            </td>
                                          <td>
    <a href="{{ route('admin.product-enquiries.show', $enquiry->id) }}"
       class="btn btn-sm btn-info mb-1">
        <i class="mdi mdi-eye"></i>
    </a>
</td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No enquiries found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $enquiries->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
