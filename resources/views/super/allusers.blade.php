@extends('super.master')

@section('header')
@endsection

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Container-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Profile Account Information-->
        <div class="row">

            <!--begin::Content-->
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h5 class="card-label">All Users
                            </h5>
                        </div>

                    </div>
                    <div class="card-body">

                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)

                                <tr>

                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}<br><i>{{ $user->email }}</i><br>{{ Date('d-m-Y H:i',strtotime($user->created_at)) }}</td>
                                 

                                    <td>
                                      
                                      
                                        <a href='https://wa.me/{{ substr($user->phone ?? "09058744473", 1) }}'
                                            class='btn btn-success btn-sm'>Message User</a>
                                        <a href='transactions/{{ $user->uuid }}'
                                            class='btn btn-info btn-sm'>Transactions</a>
                                       
                                        <a 
                                            class='btn btn-danger btn-sm'>Delete User</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile Account Information-->
    </div>
    <!--end::Container-->
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var oTable = $('.datatable').DataTable({
            ordering: false,
            searching: true
            });   
            $('#searchTable').on('keyup', function() {
              oTable.search(this.value).draw();
            });

        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
        
    })

</script>
@endsection