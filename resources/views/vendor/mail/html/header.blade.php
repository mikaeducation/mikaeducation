@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://mikaeducation.id/images/logo.png" class="logo" alt="MIKA-Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
