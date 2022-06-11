<div>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <form class="review-form" wire:submit.prevent="store">
                @csrf
                <div class="form-group">
                    <input class="input" wire:model="subject" type="text"placeholder="Subject">
                    @error('subject') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                            <textarea  class="input" wire:model="review"  placeholder="Your Review">
                            </textarea>
                    @error('review') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <div class="input-rating">
                        @error('review') <span class="text-danger">{{$message}}</span>@enderror
                        <strong class="text-uppercase">Your Rating</strong>


                        <div class="rating rating2"><!--
		                    --><a href="#5" title="Give 5 stars">★</a><!--
		                    --><a href="#4" title="Give 4 stars">★</a><!--
		                    --><a href="#3" title="Give 3 stars">★</a><!--
		                    --><a href="#2" title="Give 2 stars">★</a><!--
		                    --><a href="#1" title="Give 1 star">★</a>
                        </div>


                </div>
                </div>

                @auth
                    <input type="submit" class="btn btn-success" value="Save"/>
                @else
                <a href="/login" class="primary-btn">Değerlendirme yapmak için, lütfen Login girişi yapınız</a>
                @endauth



            </form>


        </div>
    </div>



</div>
