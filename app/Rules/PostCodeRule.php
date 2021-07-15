<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PostCodeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'api.postcodes.io/postcodes/'.$value.'/validate');
        $array = json_decode($response->getBody()->getContents(), true); 
        return $array['result'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The postcode not valid';
    }
}
