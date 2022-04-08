<div class="bg-black flex items-center">
  <div class="relative w-full flex items-center justify-between px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div>
      <a href="/" aria-label="The_dubai_life" title="The_dubai_life" class="inline-flex items-center">
        <img class='h-16'src='../../assets/The_dubai_life_logo.png' alt='The dubai life' />
      </a>
    </div>
    <ul class="flex items-center justify-center space-x-0 lg:space-x-8">
      <!--  -->
      <li class="flex justify-center z-20 hidden lg:flex">
          <div
              x-data="{
                  open: false,
                  toggle() {
                      if (this.open) {
                          return this.close()
                      }

                      this.$refs.button.focus()

                      this.open = true
                  },
                  close(focusAfter) {
                      if (! this.open) return

                      this.open = false

                      focusAfter && focusAfter.focus()
                  }
              }"
              x-on:keydown.escape.prevent.stop="close($refs.button)"
              x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
              x-id="['dropdown-button']"
              class="relative"
          >
              <!-- Button -->
              <button
                  x-ref="button"
                  x-on:click="toggle()"
                  :aria-expanded="open"
                  :aria-controls="$id('dropdown-button')"
                  type="button"
                  class="border border-black py-2 rounded shadow flex text-white items-center transition-colors duration-200 hover:text-[#D1A046]"
              >
                  <span class="mr-1 font-normal tracking-wide">Immobilier</span>
                <span class="mt-1"> <i class="fa fa-chevron-down"></i></span>
              </button>

              <!-- Panel -->
              <div
                  x-ref="panel"
                  x-show="open"
                  x-transition.origin.top.left
                  x-on:click.outside="close($refs.button)"
                  :id="$id('dropdown-button')"
                  style="display: none;"
                  class="absolute left-0 mt-2 w-56 bg-black shadow-md overflow-hidden"
              >
                  <div>
                      <a href="https://the-dubai-life.com/immobilier/" target="_blank" class="block w-full px-4 py-2 text-white text-left text-sm hover:bg-[#D1A046]" >
                          Immobilier à Dubai
                      </a>

                      <a href="https://the-dubai-life.com/nos-biens-immobiliers/"  target="_blank" class="block w-full px-4 py-2 text-white text-left text-sm hover:bg-[#D1A046]" >
                         Nos Biens Immobiliers
                      </a>

                      <a href="https://the-dubai-life.com/damac-lagoons/"  target="_blank" class="block w-full px-4 py-2 text-white text-left text-sm hover:bg-[#D1A046]" >
                        Damac Lagoons
                      </a>

                      <a href="https://the-dubai-life.com/formulaire/"  target="_blank" class="block w-full px-4 py-2 text-white text-left text-sm hover:bg-[#D1A046]" >
                        Formulaire - Immobilier
                      </a>
                  </div>

                  
              </div>
          </div>
      </li>
      <!--  -->
      <li><a href="https://the-dubai-life.com/expatriation/" target="_blank" class="hidden lg:flex font-normal tracking-wide text-white transition-colors duration-200 hover:text-[#D1A046]">S'installer à Dubai</a></li>
      <li><a href="https://the-dubai-life.com/creer-une-entreprise/" target="_blank" class="hidden lg:flex font-normal tracking-wide text-white transition-colors duration-200 hover:text-[#D1A046]">Business</a></li>
      <li><a href="https://the-dubai-life.com/investir/" target="_blank" class="hidden lg:flex font-normal tracking-wide text-white transition-colors duration-200 hover:text-[#D1A046]">Investir</a></li>
      <li class="text-[#7A7A7A]">
        <a href="tel:555-666-7777" class="mr-2 lg:mr-0">
          <i class="fa fa-phone fa-lg"></i>
        </a>
      </li>
      <li class="text-[#7A7A7A]">
          <a href="https://api.whatsapp.com/send/?phone=%2B971585823822&text&app_absent=0" target="_blank" class="ml-2 lg:ml-0">
          <i class="fab fa-whatsapp fa-2x"></i>
          </a>
      </li>
    </ul>
    
      <!-- Mobile menu -->
       <!-- <div class="lg:hidden"> -->
        <button aria-label="Open Menu" title="Open Menu" class="lg:hidden p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
          <svg class="w-5 text-white" viewBox="0 0 24 24">
            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
          </svg>
        </button> 
        
       <!-- Mobile menu dropdown -->
        <!-- <div class="absolute top-0 left-0 w-full">
          <div class="p-5 bg-white border rounded shadow-sm">
            <div class="flex items-center justify-between mb-4">
              <div>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                  <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                  </svg>
                  <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                </a>
              </div>
              <div>
                <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path
                      fill="currentColor"
                      d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>
            <nav>
              <ul class="space-y-4">
                <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                <li>
                  <a
                    href="/"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                    aria-label="Sign up"
                    title="Sign up"
                  >
                    Sign up
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
 
  </div>
</div>