@props('donors')
<div class="table w-full ...">
    <div class="table-row-group">

        <div class="table-row">
            <div class="table-cell ...">Company</div>
            <div class="table-cell ...">Primary Contact</div>
            <div class="table-cell ...">Phone Number</div>
            <div class="table-cell ...">Email</div>
        </div>
        @foreach ($donors as $donor)
        <div class="table-row">
            <div class="table-cell ...">{{$donor['name']}}</div>
            <div class="table-cell ...">{{$donor['primary_contact_name']}}</div>
            <div class="table-cell ...">{{$donor['pc_phone_number']}}</div>
            <div class="table-cell ...">{{$donor['pc_email']}}</div>
        </div>
        @endforeach

    </div>
</div>
