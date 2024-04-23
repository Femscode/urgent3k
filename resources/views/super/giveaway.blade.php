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
                            <h3 class="card-label">Giveaways({{ number_format(count($giveaways)) }})
                            </h3>
                        </div>
                     
                    </div>
                    <div class="card-body">
                        <div class='col-md-6'>
                            <input type="text" class="form-control" placeholder="Search..." id="searchTable">
                            </div>
                            <table
                            class="table datatable table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                            data-kt-table-widget-3="all">
                            <thead class="d-none">
                                <tr>
                                    <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1"
                                        colspan="1" aria-label="Campaign: activate to sort column ascending"
                                        style="width: 0px;">Details</th>


                                </tr>
                            </thead>

                            <tbody>

                                @foreach($giveaways as $group)




                                <tr class="even">
                                    <td class="min-w-175px">
                                        <div class="position-relative ps-6 pe-3 py-2">
                                            <div
                                                class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-warning">
                                            </div>
                                            <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold"> <b>{{
                                                    $group->name }} (NGN{{ number_format($group->estimated_amount)
                                                    }})</b><br>
                                            </a>
                                            <div class="fs-7 text-muted fw-bold">
                                              
                                                @if($group->type == "question_data" || $group->type=='question_airtime'
                                                ||
                                                $group->type ==
                                                'question_cash')
                                                @if(count($group->all_questions->all()) == 0)

                                                <span class='text-danger'>Kindly add questions to display the giveaway
                                                    live
                                                    link!</span><br>
                                                @else
                                                <div class="d-flex">
                                                    <input id="copy_content_{{ $loop->iteration }}" type="text"
                                                        class="form-control form-control-solid me-3 flex-grow-1"
                                                        name="search"
                                                        value="https://vtubiz.com/{{ $group->slug }}">

                                                    <button id="copy_btn"
                                                        class="btn btn-light btn-light-primary fw-bold flex-shrink-0 copy-btn"
                                                        data-clipboard-target="#copy_content_{{ $loop->iteration }}"><i class='fa fa-copy'></i></button>
                                                </div>
                                               
                                                @endif
                                                @else
                                                <div class="d-flex">
                                                    <input id="copy_content_{{ $loop->iteration }}" type="text"
                                                        class="form-control form-control-solid me-3 flex-grow-1"
                                                        name="search"
                                                        value="https://vtubiz.com/{{ $group->slug }}">

                                                    <button id="copy_btn"
                                                        class="btn btn-light btn-light-primary fw-bold flex-shrink-0 copy-btn"
                                                        data-clipboard-target="#copy_content_{{ $loop->iteration }}"><i class='fa fa-copy'></i></button>
                                                </div>
                                                
                                                @endif

                                            </div>


                                            @if($group->type == 'question_data' || $group->type == 'question_airtime' ||
                                            $group->type ==
                                            'question_cash')
                                            <a href='/add_question/{{ $group->slug }}'
                                                class='btn btn-sm btn-primary'>Add
                                                Questions</a>
                                            @endif
                                            {{-- <a href='https://vtubiz.com/{{ $group->slug }}'
                                                class='btn btn-sm btn-primary'>Copy Link</a> --}}

                                            <a href='/giveaway_participant/{{ $group->slug }}'
                                                data-total_amount="{{ number_format($group->estimated_amount) }}"
                                                class='btn btn-sm btn-info'>More Info</a>
                                            <a href='/giveaway_transactions/{{ $group->slug }}'
                                                data-total_amount="{{ number_format($group->estimated_amount) }}"
                                                class='btn btn-sm btn-success'>Transactions</a>
                                            <a onclick="return confirm('Are you sure you want to delete this giveaway?')"
                                                href='/delete_giveaway/{{ $group->slug }}'
                                                class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                            <!--end::Table-->
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

    
    var clipboard = new ClipboardJS('.copy-btn');

clipboard.on('success', function (e) {
e.clearSelection();
var btn = e.trigger;
btn.innerHTML = 'Copied!';
        setTimeout(function () {
            btn.innerHTML = '<i class="fa fa-copy"></i>';
        }, 2000); // Reset to 'Copy' after 2 seconds
});

clipboard.on('error', function (e) {
console.error('Action:', e.action);
console.error('Trigger:', e.trigger);
});
        
    })

</script>


@endsection