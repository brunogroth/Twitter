@php use App\Models\User; @endphp
<div class="text-white text-lg">
    @foreach($this->tweets as $tweet)
        <x-tweet :tweet="$tweet"></x-tweet>
    @endforeach
        <div class="text-center text-primary py-3 border-line border-b-[0.625px]
                    rounded bg-transparent hover:bg-gray-950 w-full cursor-pointer"
             {{-- Alpine Property monitoring the screen with JS IntersectionObserver.
                     When the screen get to this div, the function is executed --}}
             x-data="{
                infinityScroll() {
                  const observer = new IntersectionObserver((items) => [
                    items.forEach((item) => {
                      if(item.isIntersecting) {
                        @this.loadMore();
                      }
                    })
                  ])
                  observer.observe(this.$el)
                }
             }"
             x-init="infinityScroll()"
        >
            Load More
        </div>
</div>
