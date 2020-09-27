@component('mail::message')
  Message From Website
<strong>Full Name:</strong>{{ $data['fname']}}<br>
<strong>Email:</strong>{{ $data['email']}}<br>
<strong>Phone No.:</strong>{{ $data['phone']}}<br>
<strong>Subject:</strong>{{ $data['subject']}}<br>
<strong>Message:</strong>{{ $data['message']}}<br>

@endcomponent