<x-layout.user-layout>

    <section class="mt-8 max-w-6xl mx-auto">
        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 leading-tight"> Pellentesque a consectetur velit, ac
                    molestie ipsum. Donec sodales, massa et auctor. </h2>
                <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2"> Cryptocurrency
                </a>
            </div>

            <img src="https://images.unsplash.com/photo-1587614387466-0a72ca909e16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                class="w-full object-cover lg:rounded h-[28em]" alt="Blog Cover" />
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <div class="px-4 lg:px-0 mt-8 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                {{-- * ... Existing code ... * --}}
                Boisterous he on understood attachment as entreaties ye devonshire. In
                mile an form snug were been sell. Extremely ham any his departure for
                contained curiosity defective. Way now instrument had eat diminution
                melancholy expression sentiments stimulated.
                <br /> <br />
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
                    blanditiis tempora perferendis optio eveniet a fuga cum ipsam,
                    aperiam vitae quasi nisi corporis adipisci molestiae facere qui,
                    culpa distinctio quisquam voluptatum illum veniam, voluptate fugit
                    unde voluptas? Fugiat quidem maxime neque fugit ea! Rem soluta optio
                    eos vel? Perferendis maxime, iure molestias totam, autem voluptatum
                    nulla ad provident quam labore sint earum rem unde quis aspernatur
                    possimus pariatur assumenda magnam eligendi quos, consectetur facere
                    consequatur tempora aut. Architecto beatae unde repellat accusantium
                    velit optio earum pariatur porro. Impedit molestiae officia ex nemo
                    officiis aut, facilis, nesciunt recusandae repudiandae repellendus
                    corrupti sequi mollitia. Eaque corporis nisi repudiandae voluptas
                    eius soluta repellat consequatur praesentium vero, ad nulla, aliquid
                    vel illum sint facere quibusdam necessitatibus laudantium voluptate
                    architecto fuga omnis. Doloremque vero adipisci maiores,
                    consequuntur, eveniet dignissimos reiciendis ad totam nemo iste
                    tempora aliquam itaque quo beatae numquam doloribus recusandae iusto
                    modi perferendis ipsum a fugiat quam harum dicta. Et atque pariatur,
                    error quam fuga earum adipisci. Sequi quo voluptatem amet ullam
                    optio? Quam, dignissimos quidem? Culpa necessitatibus, hic a cumque,
                    molestias dicta nisi autem consequatur beatae tenetur laudantium
                    eveniet quas consequuntur, repudiandae incidunt atque amet assumenda
                    aut. Quae magnam tempore optio temporibus!
                </p>
            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" alt="Author" />
                        <div>
                            <p class="font-semibold text-gray-700 text-sm"> Mike Sullivan </p>
                            <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                        </div>
                    </div>
                    <p class="text-gray-700 py-3">
                        Mike writes about technology Yourself required no at thoughts
                        delicate landlord it be. Branched dashwood do is whatever it.
                    </p>
                    <button
                        class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                        Follow
                        <div class="ml-2"></div>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4 md:w-1/2">
            <div class="flex items-center space-x-2">
                <BiCommentDetail class="text-gray-600" />
                <span class="text-gray-600">15 comments</span>
            </div>
            <div class="flex items-center space-x-2 mt-8">
                <AiOutlineHeart class="text-red-500" />
                <span class="text-gray-600">120 likes</span>
            </div>
            <a href="/" class="text-green-700 inline-flex items-center justify-center"> Back to Blogs
                <AiOutlineArrowRight class="ml-2" />
            </a>
        </div>

        <PopularBlog />
    </section>
    <x-view.popular-berita />

    <div class="mt-90"></div>
</x-layout.user-layout>
