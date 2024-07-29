<div class="row">
    <div class="col-12 mb-4 text-center d-none d-print-block">
        <h4>{{ get_settings('project_name') }}</h4>
        @if( !empty($report_name) )
            <p class="m-0">{{ $report_name }}</p>
        @endif
        <p class="m-0">Loan Number: {{ get_settings('loan_number') }}</p>
        <p class="m-0"><b>{{ date('d F, Y', $from_date) }}</b> - <b>{{ date('d F, Y', $to_date) }}</b></p>
    </div>
</div>
