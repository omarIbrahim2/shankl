


    <div class="colored-section">
        <nav class="sub-nav">
            <div class="container">
                <ul class="justify-content-center">
                    <li><img src="{{asset("auth")}}/assets/images/logo/Shankal.png" alt="shankal"></li>
                </ul>
            </div>
        </nav>
        <section class="section parent-edit-profile">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12 mb-s-0 mb-3">
                            <div class="from-container">
                                <form wire:submit.prevent="update" enctype="multipart/form-data">
                                <div class="contact-form black-contact-form">
                                        <div class="input-item me-auto ms-0">
                                            <div>
                                                @error("name")

                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>
                                            <input type="text" wire:model="name" placeholder="name">
                                            <span>
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                             <span class="second">
                                                <i class="fa-solid fa-pen"></i>
                                            </span>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <div>
                                                @error("email")

                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>
                                            <input type="email" wire:model="email" placeholder="email">
                                            <span>
                                                <i class="fa-regular fa-envelope"></i>
                                            </span>
                                            <span class="second">
                                                <i class="fa-solid fa-pen"></i>
                                            </span>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <div>
                                                @error("password")

                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>
                                            <input type="password" wire:model="password" placeholder="password"
                                                value="">
                                            <span>
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <span class="second show-passowrd">
                                                <i class="fa-regular fa-eye-slash fa-flip-horizontal"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input wire:model="password_confirmation" type="password"  placeholder="Confirm Password"
                                                value="">
                                            <span>
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <span class="second show-passowrd">
                                                <i class="fa-regular fa-eye-slash fa-flip-horizontal"></i>
                                            </span>
                                        </div>


                                        <div class="input-item me-auto m-0">
                                            <div>
                                                @error("phone")

                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>
                                            <input type="tel" wire:model="phone" placeholder="phone" >
                                            <span>
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                            <span class="second">
                                                <i class="fa-solid fa-pen"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <div>
                                                @error("image")

                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>

                                                @enderror
                                            </div>

                                            <input wire:model="image" type="file"  id="parent-profile">

                                            <label class="file-input" for="parent-profile">
                                                <span>
                                                    <i class="fa-regular fa-image"></i>
                                                </span>
                                                <p class="upload-text">Upload Profile</p>
                                                <button class="btn-custom btn-gray-custom">
                                                    choose
                                                </button>
                                            </label>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <button   type="submit" class="custom-out-btn btn-form">
                                                save
                                            </button>
                                        </div>

                                    </form>

                                        @if (session()->has("success"))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                           </div>
                                        @endif


                                </div>

                            </div>
                        </div>

                         <div class="col-md-8 col-12 mb-s-0 mb-3">
                            @livewire("edit-child-parent" , ["authParent" => $authParent])
                         </div>

                    </div>
                </div>
            </div>
        </section>


    </div>




