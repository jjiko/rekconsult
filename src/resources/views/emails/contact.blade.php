<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>From:</h2>
<p>
    @if(property_exists($contact, "from"))
        {{ $contact->from }}<br>
    @endif
    {{ property_exists($contact, "email") ? $contact->email : "[No Email]"}}
</p>

<div>
    {!! property_exists($contact, "inquiry") ? $contact->inquiry : "[No Inquiry]" !!}<br><br>
</div>
<div>
    <p>
        URL: <a href="{!! property_exists($contact, "fromUrl") ? $contact->fromUrl : "#" !!}">{!! property_exists($contact, "fromUrl") ? $contact->fromUrl : "#" !!}</a>
    </p>
</div>
</body>
</html>