<?php

namespace App\Actions\Fortify;



use App\Models\User;
use App\Models\parentt;
use App\Models\teacher;
use App\Models\provider;
use App\Models\supplier;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Parent_;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }

    public function createParent(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(parentt::class),
            ],
            "phone" =>[
                'required',
                'max:8',
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return parentt::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone'=>$input['phone'],
            'password' => Hash::make($input['password']),
        ]);
    }

    public function createSupplier(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(parentt::class),
            ],
            "phone" =>[
                'required',
                'max:8',
            ],
            "address" =>[
                 'required',
                  'string',
                  'max:255',
            ],

            'type' =>[
                'required',
                  'string',
                  'max:255',
            ],
            'orgName' =>[
                'required',
                'string',
                'max:255',
            ],
            'password' => $this->passwordRules(),
        ])->validate();


       return supplier::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'type' => $input['type'],
            'phone' => $input['phone'],
            'orgName'=>$input['orgName'],
            "address" => $input["address"],
            'password' => Hash::make($input['password']),
        ]);
    }

    public function createTeacher(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(parentt::class),
            ],
            "phone" =>[
                'required',
                'max:8',
            ],

            "field" =>[
                'required',
                'string',
                'max:255',
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return teacher::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone'=>$input['phone'],
            'field'=>$input['field'],
            'password' => Hash::make($input['password']),
        ]);
    }

    public function createProvider(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(parentt::class),
            ],
            "phone" =>[
                'required',
                'max:8',
            ],
            "area" =>[
                'required',
                'max:10',
            ],
            "seats" =>[
               'required',
               'max:255',
            ],
            'type' =>[
               'required',
               'string',
            ],
            'installments'=>[
                'required',
                'numeric',
            ],
            'seat_price'=>[
                'required',
                'numeric',
            ],
            'educational_system'=>[
                'required',
                'string',
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return  provider::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone'=>$input['phone'],
            'seats'=>$input['seats'],
            'installments'=>$input['installments'],
            'seat_price'=>$input['seat_price'],
            'area'=>$input['area'],
            'type'=>$input['type'],
            'educational_system'=>$input['educational_system'],
            'password' => Hash::make($input['password']),
        ]);

    }
}
