<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:20'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'surname' => ['required', 'string','max:20'],
            'password' => $this->passwordRules(),
            'profile_image'=> ['nullable','image'],
        ])->validate();

        $path = null;
        if (isset($input['profile_image']) && $input['profile_image'] instanceof UploadedFile) {
            $path = $input['profile_image']->store('profile_images', 'public');
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_image'=> $path,
        ]);
    }
}
