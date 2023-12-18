<div>
    <div class="flex justify-center lg:justify-between flex-wrap mt-5">
        @foreach ($posts as $post)
    <div>

        <div class="border-black border-2 transition hover:scale-105 m-5">
            <a href="" class="block">
                <img src="{{ asset($post->getFirstMedia('images')->getUrl('three')) }}"
                     alt="Post Image: {{ $post->title }}">
            </a>
            <div class="legend flex flex-col my-2 p-2">
                <div class="likes flex">

                    <livewire:like-post :post="$post"/>
<!--
                    <div class="flex">
                        @auth
                        <form action="{{ route('posts.likes.switch',["post" => $post]) }}" method="post">
                            {{-- {{ route('posts.likes.switch',["post" => $post]) }} --}}
                            @csrf
                            
                            <button wire:click="like">
                                {{--INICI SVG COTR--}}
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     {{-- fill="{{ $isLiked ? 'red' : 'none' }}" --}}
                                     fill="{{ $post->checkLike(Auth::user()) ? 'red' : 'none' }}"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                </svg>
                    
                                {{--FI SVG COTR--}}
                    
                            </button>
                    
                        </form>
                        @endauth
                        <span>{{ rand(1,50) }} Likes</span>
                    </div>
                -->









                        {{-- <livewire:like-post :post="$post"/> --}}
    

                </div>
                <div class="titlepost flex my-2 items-center">
                    <h3 class="w-4/5 block px-3 text-xl">{{ $post->title }}</h3>
                    
                    @auth
                        @if(Auth::user()->id == $post->user->id)
                            <form class="w-1/5"
                                  action="" method="post">
                                @csrf
                                {{-- @method('delete') --}}
                                <button
                                    class="trash"
                                    type="submit">
    
                                    <img src="{{ asset('svg/trash.svg') }}" width="30px" alt="">
    
                                </button>
                            </form>
                        @endif
                    @endauth
                </div>
    
            </div>
    
        </div>
    </div>
    @endforeach

</div>
</div>