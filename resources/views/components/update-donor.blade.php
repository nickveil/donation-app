
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

          <section class="relative block h-500-px">
              <div class="flex-auto px-4 lg:px-8 py-8 pt-5">
                <form method="POST" action="/donor/update/{{ $donor->id }}">
                    
                    @method('PUT')
                    @csrf
    
                    <!-- Email Address -->
                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="string" name="name"
                            value="{{$donor->name}}" />
                        
                        <x-label for="primary_contact_name" :value="__('Primary Contact')" />
                        <x-input id="primary_contact_name" class="block mt-1 w-full" type="string" name="primary_contact_name"
                            value="{{$donor->primary_contact_name}}" />

                        <x-label for="pc_phone_number" :value="__('Phone Number')" />
                        <x-input id="pc_phone_number" class="block mt-1 w-full" type="string" name="pc_phone_number"
                            value="{{$donor->pc_phone_number}}" />

                        <x-label for="pc_email" :value="__('Email')" />
                        <x-input id="pc_email" class="block mt-1 w-full" type="email" name="pc_email"
                            value="{{$donor->pc_email}}" />


                    </div>
                    <div class="text-center mt-6">
                        <x-button class="ml-3">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
              </div>
          </section>

          
        </main>
  </div>
</x-app-layout>