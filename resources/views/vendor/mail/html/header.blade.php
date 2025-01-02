@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Brokers')
<img src="https://brokertecnologia.com.br/assets/images/logo_broker.png" class="logo" alt="Brokers" width="200">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
