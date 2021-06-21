@props(['donors'])

<div class="relative md:ml-64 bg-blueGray-50">
  
    <x-campaign-stats />
    @if($donors->count())
      <x-donor-table :donors="$donors" />
    @endif
</div>
