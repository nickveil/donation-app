@props(['donors'])

  <!-- Header -->
  <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      Traffic
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      350,897
                    </span>
                  </div>
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
                    <i class="fas fa-arrow-up"></i> 3.48%
                  </span>
                  <span class="whitespace-nowrap">
                    Since last month
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      New users
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      2,356
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                    >
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-red-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 3.48%
                  </span>
                  <span class="whitespace-nowrap"> Since last week </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      Sales
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      924
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                    >
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-orange-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 1.10%
                  </span>
                  <span class="whitespace-nowrap"> Since yesterday </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5
                      class="text-blueGray-400 uppercase font-bold text-xs"
                    >
                      Performance
                    </h5>
                    <span class="font-semibold text-xl text-blueGray-700">
                      49,65%
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"
                    >
                      <i class="fas fa-percent"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-blueGray-400 mt-4">
                  <span class="text-emerald-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 12%
                  </span>
                  <span class="whitespace-nowrap">
                    Since last month
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


{{-- <div class="flex flex-col p-6">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Donating Organization
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Main Contact
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Phone Number
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Email
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($donors as $donor)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-lg text-gray-900">{{ $donor->name}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                        alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $donor->primary_contact_name}}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $donor->pc_email }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        {{-- TODO: add active if Donor gave last campaign --}}
                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td> --}}
                        {{-- TODO: Donor level status --}}
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Admin
                        </td> --}}
                        {{-- TODO: Got to Donor activity (meetings, concerns, donations) --}}
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/donor/{{$donor->id}}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>                
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div> --}}
