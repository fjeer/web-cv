@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'SigmaTech.id')
<img src="{{ asset('images/email-header.png') }}" class="logo" alt="Sigmatech Logo">
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
