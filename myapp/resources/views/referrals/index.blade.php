@extends('layouts/master')
@section('title', 'Ph orders')

@section('content')       
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>MY REFERRALS</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Referral</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                Your referral ID is <span class="error"> https://gethelpworldwide.com?ref_id=maxteetechnologies@gmail.com</span>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">

                 <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Total</span>
                                <h5>CONFIRMED REFERRAL BONUS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Total</span>
                                <h5>NUMBER OF REFERRALS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    @include('partials/_alert')
                                    
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DONATION AMOUNT</th>
                        <th>MY BONUS</th>
                        <th>STATUS</th>
                        <th>DATE ADDED</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($referrals)
                    <?php $count = 0; ?>
                    @foreach ($referrals as $referral)
                        <tr>
                            <td>{{ ++$count }}</td>
                            <td>{{ $referral->member->name }}</td>
                            <td>{{ $referral->member->name }}</td>
                            <td>{{ $referral->member->name }}</td>
                            <td>{{ $referral->member->name }}</td>
                            <td>{{ $referral->member->name }}</td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <th colspan="8"><center>No Data Available</center></th>
                        </tr>
                    @endif
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DONATION AMOUNT</th>
                        <th>MY BONUS</th>
                        <th>STATUS</th>
                        <th>DATE</th>
                    </tr>
                    </tfoot>
                    </table>
                    <div><span class="paginate">{{ $referrals->render() }}</span></div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>        
@stop
@section('resources')
<!-- Data Tables -->
<script src="{{ asset('js/inspinia/plugins/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/inspinia/plugins/dataTables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('js/inspinia/plugins/dataTables/dataTables.responsive.js') }}"></script>
<script src="{{ asset('js/inspinia/plugins/dataTables/dataTables.tableTools.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.dataTables-example').dataTable({
            responsive: true,
        });
    });
</script>
@stop