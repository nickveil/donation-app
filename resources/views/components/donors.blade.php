@props(['donors'])

<div class="relative md:ml-64 bg-blueGray-50">
    <x-campaign-stats />
    @if($donors->count())
      <x-donor-table :donors="$donors" />
      <x-donor-table :donors="$donors" />
      <x-donor-table :donors="$donors" />
    @else
      "No Donors assigned yet"
    @endif
</div>
