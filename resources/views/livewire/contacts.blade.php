
   <form wire:submit.prevent="sendMessage">
    <div class="input-item">
        <input type="text" wire:model="name" placeholder="name">
        <span>
            <i class="fa-solid fa-user"></i>
        </span>
    </div>
    @error('name')
    <div class="alert alert-danger">
          {{$message}}
    </div>
    @enderror

    <div class="input-item">
        <input type="email" wire:model="email" placeholder="email">
        <span>
            <i class="fa-regular fa-envelope"></i>
        </span>
    </div>
    @error('email')
    <div class="alert alert-danger">
          {{$message}}
    </div>
    @enderror

    <div class="input-item">
        <input type="text" wire:model="subject" placeholder="subject">
        <span>
            <i class="fa-solid fa-book"></i>
        </span>
    </div>
    @error('subject')
    <div class="alert alert-danger">
          {{$message}}
    </div>
    @enderror


    <div class="input-item">
        <input type="text" wire:model="message" placeholder="message">
        <span>
            <i class="fa-regular fa-pen-to-square"></i>
        </span>
    </div>

    @error('message')
    <div class="alert alert-danger">
          {{$message}}
    </div>
    @enderror
    <div class="input-item">
        <button type="submit" class="btn-custom">
            send a message
        </button>
    </div>
    <div class="input-item">
        @if (session()->has('succsess'))
       <div class="alert alert-success">
        {{session('succsess')}}
       </div>


        @endif
    </div>
</form>
