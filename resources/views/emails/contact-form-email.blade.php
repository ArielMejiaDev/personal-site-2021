@component('mail::message')
# Hi, you have a new contact form email of your personal site.

## From
- {{ $name }}

{{ $message }}

Thanks, you can respond directly from your inbox.<br>
{{ config('app.name') }}
@endcomponent
