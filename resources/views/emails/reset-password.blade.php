@component('mail::message')
    {{ __('auth.reset_password_email_subject') }}

    {{ __('auth.received_password_reset_request') }}

    <x-mail::panel>
        {{ __('auth.reset_password_code') }}: <strong>{{ $token }}</strong>
    </x-mail::panel>

    {{ __('auth.reset_password_link_expiration', ['count' => config('auth.passwords.' . config('auth.defaults.passwords') . '.expire')]) }}

    {{ __('auth.no_further_action_required') }}

    {{ __('auth.thank_you_for_using_our_application') }}
@endcomponent
