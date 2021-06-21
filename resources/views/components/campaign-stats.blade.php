@props(['campaigns'])
{{-- <x-donors> --}}
<!-- Header -->
  <div class="relative bg-blueGray-600 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap">
          @foreach ($campaigns as $campaign)
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
              >
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <a href="/campaign/{{$campaign->id }}">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        {{$campaign->name}}
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{ $campaign->goal}}
                        </span>
                      </div>
                    </a>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                      >
                        <i class="far fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-blueGray-400 mt-4">
                    <span class="text-emerald-500 mr-2">
                      {{ $campaign->current_donations}}
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