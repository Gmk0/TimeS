<div>





    <div class="pt-16 ">
        <div class="mx-[10%] mt-16 max-w-8xl">
            <form class="gap-4 p-6 m-4 bg-gray-900 " action="">
                <div class="relative">
                    <div class="absolute flex items-center h-full ml-4">
                        <svg class="w-6 h-6 text-gray-100 fill-current" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                            </path>
                        </svg>
                    </div>

                    <input wire:model.live='query' type="text" placeholder="Nom ou Prenom..."
                        class="w-full px-12 py-6 text-white text-xl bg-transparent border-[#29d9d5] rounded-md focus:border-[#294d4c]  focus:ring-0">
                </div>



                <div class="pt-10">



                </div>





            </form>
        </div>
    </div>


    <div id="popular-professeurs">
        <h1 class="title">Professeurs répertoriés</h1>
        <div class="grid gap-6 lg:grid-cols-3">
            <!-- box -->

            @forelse ($professeurs as $professeur)

            <div class="box overflow-hidden relative h-[250px] transition">
                <img src="{{Storage::disk('local')->url($professeur->image) }}" alt="">
                <div class="content">
                    <div>
                        <a href="{{route('professeurOne',['id' => $professeur->id])}}" wire:navigate
                            class="text-2xl my-2 hover:underline text-[#29d9d5] cursor-pointer">{{$professeur->nom}}
                            {{$professeur->prenom}}</a>
                        <p>{{$professeur->fonction}}</p>
                        <p>{{$professeur->titre}}</p>
                        <p>{{$professeur->description}}</p>


                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>

    <div class="items-start justify-start max-w-xl mx-auto my-8 text-white">

        {{$professeurs->links()}}
    </div>








</div>