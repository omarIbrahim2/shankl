<div class="row">
    <div class="col-md-6 col-12 mb-s-0 mb-3">
        <div class="from-container">
            <div class="contact-form black-contact-form">
                @if (session()->has("success"))
                <div class="alert alert-success">
                    {{session('success')}}
                   </div>
                @endif
                <form wire:submit.prevent="updateChild" enctype="multipart/form-data">
                    <div class="input-item me-auto ms-0">
                        @error("name")
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>

                        @enderror
                        <input type="text"  placeholder="name" wire:model="name">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>


                    <div class="input-item me-auto ms-0">
                        @error("birth_date")
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>

                        @enderror
                        <select wire:model="birth_date" placeholder="MM">
                            <option disabled aria-hidden="true">MM</option>
                            <option selected name="January" value="January">Jan</option>
                            <option name="February" value="February">Feb</option>
                            <option name="March" value="March">Mar</option>
                            <option name="April" value="April">Apr</option>
                            <option name="May" value="May">May</option>
                            <option name="June" value="June">Jun</option>
                            <option name="July" value="July">Jul</option>
                            <option name="August" value="August">Aug</option>
                            <option name="September" value="September">Sep</option>
                            <option name="October" value="October">Oct</option>
                            <option name="November" value="November">Nov</option>
                            <option name="December" value="December">Dec</option>
                        </select>

                        <span>
                            <i class="fa-regular fa-calendar-days"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>
                    <div class="input-item me-auto ms-0">
                        @error("age")
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>

                        @enderror
                        <input type="text"  placeholder="age" wire:model="age">
                        <span>
                            <i class="fa-regular fa-calendar-days"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>
                    <div class="input-item me-auto m-0">
                        @error("grade")
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>

                        @enderror
                        <input type="text"  placeholder="educationalStage" wire:model="grade">
                        <span>
                            <i class="fa-solid fa-book"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>
                    <div class="input-item me-auto ms-0">
                        @error("Avatar")
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>

                        @enderror
                        <input type="file" wire:model="Avatar"   id="parent-profile">

                        <label class="file-input" for="parent-profile">
                            <span>
                                <i class="fa-regular fa-image"></i>
                            </span>
                            <p class="upload-text">Upload Profile</p>
                             <button  class="btn-custom btn-gray-custom">
                                choose
                            </button>
                        </label>
                    </div>

                    <div class="input-item me-auto ms-0">
                        <button  type="submit" class="custom-out-btn btn-form">
                            save
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <div class="col-md-6 col-12 mb-s-0 mb-3">
        <div class="from-container">
            <div class="kids-container">
                @if (session()->has("deleted"))
                <div class="alert alert-danger">
                    {{session('deleted')}}
                   </div>
                @endif
                @foreach ($childs as  $child )

                <div  style="cursor: pointer" class="kid"  wire:click="fillInputs({{$child}})" >
                    <div class="kid-icon icon-animate">
                        <img style="width: 100%" style="border-radius: 100%" src="{{asset("/storage"."/".$child->Avatar)}}" alt="shankal">
                    </div>
                    <div class="kid-data">
                        <p class="kid-name">{{$child->name}}</p>
                        <p class="kid-status"><button wire:click="ChildDeleting({{$child->id}})" type="button"><i class="fa-regular fa-trash-can"></i></button></p>
                    </div>
                </div>
                @endforeach

                <div class="kid add-kid">
                    <a href="{{route("newChild" , $authParent->id)}}"><div class="kid-icon ">
                        <img src="{{asset("auth")}}/assets/images/charcters/plus.png" alt="add kids">
                    </div></a>
                    <div class="kid-data">
                        <p class="kid-name">Add a Child</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

