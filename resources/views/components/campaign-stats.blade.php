@props(['campaigns', 'donations'])
{{-- <x-donors> --}}
<!-- Header -->
  <div class="relative bg-blueGray-600 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap">
          @foreach ($campaigns as $campaign)
            <div class="w-full lg:w-6/12 xl:w-4/12 px-4 mb-6">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white rounded xl:mb-0 shadow-lg"
              >
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div
                      class="relative w-full pr-4 max-w-full flex-grow flex-1"
                    >
                      <a href="/campaign/{{$campaign->id }}">
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        {{$campaign->name}}
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{ $campaign->goal}}
                        </span>
                      </a>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full {{ $campaign->goal>$donations[$campaign->id] ? 'bg-red-500' : 'bg-green-500'}} "
                      >
                        <i class="far fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-blueGray-400 mt-4">
                    <span class=" {{ $campaign->goal>$donations[$campaign->id] ? 'text-red-500' : 'text-green-500'}}  mr-2">
                      {{ $donations[$campaign->id]}}
                    </span>
                    <span class="whitespace-nowrap">
                      Raised so far.
                    </span>
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
{{-- </x-donors> --}}