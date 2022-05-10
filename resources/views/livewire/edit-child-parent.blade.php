<div class="row">
    <div class="col-md-4 col-12 mb-s-0 mb-3">
        <div class="from-container">
            <div class="contact-form black-contact-form">
                    <div class="input-item me-auto ms-0">
                        <input type="text" name="name" placeholder="name" wire:model="childName">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>


                    <div class="input-item me-auto ms-0">
                        <select wire:model="childBirth" placeholder="MM">
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
                        <input type="text" name="age" placeholder="age" wire:model="childAge">
                        <span>
                            <i class="fa-regular fa-calendar-days"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>
                    <div class="input-item me-auto m-0">
                        <input type="text" name="educationalStage" placeholder="educationalStage" wire:model="EduStage">
                        <span>
                            <i class="fa-solid fa-book"></i>
                        </span>
                        <span class="second">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                    </div>
                    <div class="input-item me-auto ms-0">
                        <input type="file" wire:model="childImg"  name="profile" id="parent-profile">

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
                        <button type="button" class="custom-out-btn btn-form">
                            save
                        </button>
                    </div>



            </div>
        </div>
    </div>
    <div class="col-md-4 col-12 mb-s-0 mb-3">
        <div class="from-container">
            <div class="kids-container">

                @foreach ($childs as $child )

                <div style="cursor: pointer" class="kid"  id="kidElement" wire:click="fillInputs({{$child}})" >
                    <div class="kid-icon icon-animate">
                        <img src="{{asset($child->Avatar)}}" alt="shankal">
                    </div>
                    <div class="kid-data">
                        <p class="kid-name">{{$child->name}}</p>
                        <p class="kid-status"><a href="#"><i class="fa-regular fa-trash-can"></i></a></p>
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

