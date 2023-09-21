<x-partials.layout>
    <header class="sticky top-0">
        <x-partials.navbar></x-partials.navbar>
    </header> 

    <main>
        <section id="home"> 
            <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
            style="background-image: url('{{ asset('images/hero-section-bg.jpg') }}')">
                <h1 class="font-[poppins] text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-yellow-700 md:text-center sm:leading-none lg:text-5xl">
                    <span class="inline md:block">Welcome To 
                        <span class="text-green-700">Gabriel's<span class="text-amber-700"> Salabat</span></span></span>
                    </span>
                </h1>
                <div class="font-[poppins] mx-auto mt-2 text-green-100 md:text-center lg:text-lg" style="text-shadow: 2px 2px 4px rgb(0, 0, 1);">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo praesentium
                    culpa excepturi quae commodi quaerat,
                </div>
                <div class="flex flex-col items-center mt-12 text-center">
                    <span class="inline-flex w-full md:w-auto">
                    <a href="#_" type="button" class="font-[poppins] inline-flex items-center justify-center px-6 py-2 text-base font-bold text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                        Order Now
                    </a>
                </div>
            </div> 
        </section> 
        <section id="about" class="px-2 py-32 bg-white md:px-0">
            <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2 md:px-3">
                        <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0"> 
                        <h3 class="text-xl">OUR STORY</h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2> 
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt praesentium, ipsum
                        culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt quia.
                        Repellendus mollitia quaerat est voluptas!
                        </p>
                        <div class="flex">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Order Now
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="w-full md:w-1/2">
                        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                            <img src="https://images.pexels.com/photos/161556/ginger-plant-asia-rhizome-161556.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="product" class="mt-8 bg-white">
            <div class="mt-4 text-center">
                <h3 class="text-2xl font-bold">Product Variants</h3> 
            </div>
            <div class="container w-full px-5 py-6 mx-auto">
                <div class="grid lg:grid-cols-4 gap-y-6">
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="https://img.freepik.com/premium-photo/finely-dry-turmeric-powder-wooden-bowl-with-rhizome-sliced-green-leaves-isolated-white-background_252965-33.jpg?w=740"
                            alt="Image" />
                        <div class="px-6 py-4">
                            <div class="flex mb-2">
                                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Large</span>
                            </div>
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">salmon fish 1 seafood</h4>
                            <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                            elit.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
                            <span class="text-xl text-green-600">₱175.0</span>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section id="contact" class="bg-white py-6 dark:bg-gray-800 dark:text-gray-50 h-screen">
            <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x mt-10">
                <div class="py-6 md:py-0 md:px-6">
                    <h1 class="text-4xl font-bold  mb-4">Get in touch</h1>
                    <div class="space-y-4 ">
                        <p class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Sitio Upper Lucban, Brgy. Sta. Cruz, Antipolo City.</span>
                        </p>
                        <p class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <span>+63 920 456 8090</span>
                        </p>
                        <p class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span>gabsalabatstore@gmail.com</span>
                        </p>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.4433055743532!2d121.17285667604928!3d14.605534562319809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bf0c8d8310c5%3A0x34dc8e5a7fbf80a3!2sAntipolo%2C%20Rizal!5e0!3m2!1sen!2sph!4v1695294452420!5m2!1sen!2sph" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full" height="400px"></iframe>
            </div>
        </section>
    </main>

    <x-partials.footer></x-partials.footer>
</x-partials>