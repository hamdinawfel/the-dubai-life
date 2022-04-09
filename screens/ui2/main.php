<div>
  <div class='grid grid-cols-12 gap-2 mt-8 items-start justify-center'>
      <div class='border-t-2 border-[#D19F46] mt-4 col-span-2 md:col-span-4'></div>
      <div class='mx-auto text-center col-span-8 md:col-span-4'>
        <h1 class='font-bold text-lg md:text-xl md:tracking-wider'>
          Formulaire de téléchargement
        </h1>
      </div>
      <div class='border-t-2 border-[#D19F46] mt-4 col-span-2 md:col-span-4'></div>
  </div>
  <div class='px-16 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-8 lg:py-20'>
   <form autocomplete="off" action="/checkout" method="POST" name="myForm">
    <div class='grid w-full gap-10 row-gap-8 sm:row-gap-10 lg:grid-cols-3  sm:mx-auto'>
        <!-- Customer Infos section -->
        <div class='flex flex-col'>
          <div class="md:space-y-3">
            <input
              placeholder="Prénpm & nom"
              required=""
              type="text"
              class="flex-grow w-full h-12 px-4 mb-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline" 
            />
            <input
              placeholder="E-mail"
              required=""
              type="email"
              class="flex-grow w-full h-12 px-4 mb-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
            />
            <!-- International Phone Number  -->
            <input 
              placeholder="06 12 34 56 78"
              type="tel" 
              id="tel"
              th:field="*{mobileNumber}"
              class="flex-grow w-full h-12 px-4 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
              />

            <input
              placeholder="Adresse de la Rue"
              required=""
              type="text"
              class="flex-grow w-full h-12 px-4 my-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
            />
            <input
              placeholder="Cité"
              required=""
              type="text"
              class="flex-grow w-full h-12 px-4 mb-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
            />
            <input
              placeholder="Etat / Provenance"
              required=""
              type="text"
              class="flex-grow w-full h-12 px-4 mb-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
            />
            <input
              placeholder="Code Postale"
              required=""
              type="text"
              class="flex-grow w-full h-12 px-4 mb-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
            />
            <input
              placeholder="Pays"
              required=""
              type="text"
              class="flex-grow w-full h-12 px-4 mb-3 bg-white border border-[#D19F46] rounded-xl shadow-sm appearance-none md:mr-2 md:mb-0 focus:outline-none focus:shadow-outline"
            />
          
          </div>
        </div>
        <!-- Product Image section -->
        <div class='flex flex-col justify-center rounded-3xl border-2 border-[#D19F46] py-4'>
          <img src='../../assets/ebook.png' class="mx-auto"alt="E-BOOK" />
          <p class="tracking-wider text-2xl text-center">1 <span class="font-bold">E-BOOK</span> <span class="font-bold text-[#D19F46]">=</span> 1 <span class="font-bold">TICKET</span></p>
        </div>
        <div class='flex flex-col'>
          <div class='relative w-full flex items-center justify-center  rounded-3xl border-2 border-[#D19F46]'>
            <img src='../../assets/ticket.png' class="w-auto h-56"alt="TICKET" />
          </div>
          <!-- Order Quantity controls -->
          <div class="relative z-10 flex bg-[#D19F46] mx-auto w-1/2 items-center justify-around h-12 -mt-6 rounded-full">
            <div class="text-white p-2 cursor-pointer" id="minus"><i class="fa fa-minus fa-lg" ></i></div>
            <input
              type="number" name="quantity" id="quantity" min="1" value="1" required 
              class="w-16 -mr-6 text-center text-white text-3xl font-bold bg-[#D19F46] appearance-none focus:outline-none focus:shadow-outline"
            />
            <div class="text-white p-2 cursor-pointer" id="plus"><i class="fa fa-plus fa-lg" ></i></div>
          </div>
          <!-- Order price -->
          <div class="mt-6 ml-2 grid grid-cols-4 h-12 items-center justify-start border-2 border-[#D19F46] rounded-full">
            <p class="col-span-1">
              <span class="font-bold text-2xl tracking-wider text-white bg-black rounded-full px-8 py-2 -ml-2">Prix</span>
            </p>
            <div class="flex items-center justify-center col-span-3 text-center font-bold text-2xl">
              <input
                id="priceT" 
                type="text"
                value="29.90"
                disabled 
                class="text-center w-24 font-bold text-2xl bg-transparent"
              />
              <p class="font-bold text-2xl">€</p>
            </div>
          </div>
          <!-- Order Call To Action Button-->
          <div class="mt-6 grid grid-cols-4  items-center justify-start">
            <button
              type="submit"
              id="submitBtn"
              class="font-bold text-2xl bg-black text-white tracking-wider col-start-2 col-span-3 rounded-full h-12 ">Acheter</button>
          </div>
          <!-- Order Discount -->
          <div class="mt-6 grid grid-cols-8 h-12 items-center justify-start">
            <div class="col-span-1 border border-black w-8 h-8 p-2 rounded-full flex items-center justify-center"><i class="fa fa-info"></i></div>
            <p class="col-span-7">
              Achetez 
              <span id="showPresent" class="font-bold">3</span>
               autres tickets pour avoir
               <span id="listTick" class="font-bold">1</span>
               ticket bonus et économisez
               <input class="font-bold bg-transparent w-16 text-center" type="text" value="29.90" disabled id="priceT" />
               <span class="font-bold">€</span>.
              <p>
          </div>
        </div>
      </div>
    </div>
   </form>
</div>
