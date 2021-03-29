<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class bookingDate implements Rule
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
    public function passes($attribute, $room, $date)
    {
        $query = Booking::select('*')->where('room_name', $room)->where('booking_date', $date)->count();

        if($query >= 1) {
            return FALSE;  
        } 
        return TRUE;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Your selected room has already been booked for that date, please try another.';
    }
}
