<div class="bg-black flex items-center">
  <!-- Desktop Navbar -->
  <div class="relative w-full hidden md:flex items-center md:justify-between px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div>
      <a href="/" aria-label="The_dubai_life" title="The_dubai_life" class="inline-flex items-center">
        <img class='h-16'src='../../assets/The_dubai_life_logo.png' alt='The dubai life' />
      </a>
    </div>
    <ul class="flex items-center md:justify-center space-x-8">
      <!-- Drop Down Menu -->
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
      <!-- End Drop Down Menu -->
      <li><a href="https://the-dubai-life.com/expatriation/" target="_blank" class="hidden lg:flex font-normal tracking-wide text-white transition-colors duration-200 hover:text-[#D1A046]">S'installer à Dubai</a></li>
      <li><a href="https://the-dubai-life.com/creer-une-entreprise/" target="_blank" class="hidden lg:flex font-normal tracking-wide text-white transition-colors duration-200 hover:text-[#D1A046]">Business</a></li>
      <li><a href="https://the-dubai-life.com/investir/" target="_blank" class="hidden lg:flex font-normal tracking-wide text-white transition-colors duration-200 hover:text-[#D1A046]">Investir</a></li>
      <li class="text-[#7A7A7A]">
        <a href="tel:971 58 582 3822">
          <i class="fa fa-phone fa-lg"></i>
        </a>
      </li>
      <li class="text-[#7A7A7A]">
          <a href="https://api.whatsapp.com/send/?phone=%2B971585823822&text&app_absent=0" target="_blank">
          <i class="fab fa-whatsapp fa-2x"></i>
          </a>
      </li>
    </ul>
  </div>
  <!-- Phone Navbar -->
  <ul class="relative  z-30 w-full flex md:hidden items-center justify-center space-x-8 px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <li>
      <a href="/" aria-label="The_dubai_life" title="The_dubai_life" class="inline-flex items-center">
      <img class='h-16'src='../../assets/The_dubai_life_logo.png' alt='The dubai life' />
    </a>
    <li x-data="{ open: false }">
      <button @click="open = !open" aria-label="Open Menu" title="Open Menu" class="lg:hidden p-2 float-left transition duration-200 rounded focus:outline-none focus:shadow-outline">
        <svg x-show="!open" class="w-6 text-white transition duration-300" viewBox="0 0 24 24">
          <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
          <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
          <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
        </svg>
        <svg x-show="open" class="w-6 text-white transition duration-300" viewBox="0 0 24 24">
          <path
            fill="currentColor"
            d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
          ></path>
        </svg>
      </button>
        <!-- Mobile menu dropdown -->
        <div x-show="open" class="z-90 absolute top-16 left-0 w-full">
        <div class="py-5 bg-black border-none  shadow-sm">
          <nav>
            <ul class="space-y-0">
              <li class="block w-full py-2 text-center tracking-wide text-white text-sm hover:bg-[#D1A046]">
                <a href="/" >Immobilier</a>
              </li>
              <li class="block w-full py-2 text-center tracking-wide text-white text-sm hover:bg-[#D1A046]"><a href="/" >S'installer à Dubai</a></li>
              <li class="block w-full py-2 text-center tracking-wide text-white text-sm hover:bg-[#D1A046]"><a href="/" >Business</a></li>
              <li class="block w-full py-2 text-center tracking-wide text-white text-sm hover:bg-[#D1A046]"><a href="/" >Investir</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </li>
    <li class="text-[#7A7A7A]">
      <a href="tel:971 58 582 3822">
        <i class="fa fa-phone fa-lg"></i>
      </a>
    </li>
    <li class="text-[#7A7A7A]">
        <a href="https://api.whatsapp.com/send/?phone=%2B971585823822&text&app_absent=0" target="_blank">
        <i class="fab fa-whatsapp fa-2x"></i>
        </a>
    </li>
  </ul>
</div>