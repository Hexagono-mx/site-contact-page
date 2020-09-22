@component('mail::message')

![alt text]({{config('contact.logo-url')}} "{{config('contact.logo-alt')}}")

| **Nombre:**   | {{$name}}  |
|---------------|------------|
| **E-Mail:**   | {{$email}} |
| **Telefono:** | {{$phone}} |

---

{{$message}}

@endcomponent
