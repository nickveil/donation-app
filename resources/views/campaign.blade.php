{{-- @props(['campaign']) --}}
<x-app-layout>
  
  <div class="relative md:ml-64 bg-blueGray-50">
      <main class="profile-page">
          <section class="relative block h-500-px">
            <div
              class="absolute top-0 w-full h-full bg-center bg-cover"
              style="
                background-image: url('https://images.unsplash.com/photo-1623156884380-a080a56ddc93?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1651&q=80');
              "
            >
              <span
                id="blackOverlay"
                class="w-full h-full absolute opacity-50 bg-black"
              ></span>
            </div>
            <div
              class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
              style="transform: translateZ(0px)"
            >
              <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
              >
                <polygon
                  class="text-blueGray-200 fill-current"
                  points="2560 0 2560 100 0 100"
                ></polygon>
              </svg>
            </div>
          </section>
          <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
              >
                <div class="px-6">
                  <div class="flex flex-wrap justify-center">
                    <div
                      class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                    >
                      <div class="relative">
                        <img
                          alt="..."
                          src="/img/team-3-800x800.jpg"
                          class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
                        />
                      </div>
                    </div>
                    <div
                      class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                    >
                      <div class="py-6 px-3 mt-32 sm:mt-0">
                        {{-- <a href="/campaign/{{$campaign->id }}"
                          class="bg-blueGray-800 uppercase text-white font-bold  shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                          type="button"
                        > --}}
                        <form action="/campaign/update/{{$campaign->id}}">
                          @csrf
                          <button type="submit"
                                  class="bg-blueGray-800 uppercase text-white font-bold  shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                          >
                            Update
                          </button>
                        </form>
                        </a>
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 lg:order-1">
                      <div class="flex justify-center py-4 lg:pt-4 pt-8">
                        <div class="mr-4 p-3 text-center">
                          <span
                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"
                            >
                            @if($campaign->isActive === 1 )
                                Active
                                @else
                                Ended
                            @endif
                            </span
                          ><span class="text-sm text-blueGray-400">{{$campaign->name}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-12">
                    <h3
                      class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2"
                    >
                      {{$campaign->earmark}}
                    </h3>
                    <div
                      class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase"
                    >
                      <i
                        class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"
                      ></i>
                      Los Angeles, California
                    </div>
                    <div class="mb-2 text-blueGray-600 mt-10">
                      Started: {{ $campaign->campaign_start }}
                    </div>
                    <div class="mb-2 text-blueGray-600">
                      <i
                        class="fas fa-university mr-2 text-lg text-blueGray-400"
                      ></i
                      >Ends {{ $campaign->campaign_end}}
                    </div>
                    <div class="mb-2 text-blueGray-600">
                      <i
                        class="fas fa-university mr-2 text-lg text-blueGray-400"
                      ></i
                      >{{ $campaign->goal}}
                    </div>
                  </div>
                  <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full lg:w-9/12 px-4">
                        <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                          Previous donations will fill this area!
                        </p>
                        <a href="#pablo" class="font-normal text-pink-500"
                          >Show more</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
  </div>
</x-app-layout>