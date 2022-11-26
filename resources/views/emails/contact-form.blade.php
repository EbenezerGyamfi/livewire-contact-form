@component('mail::message')
# Introduction

{{$data['name']}}
{{$data['message']}}
{{$data['email']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
