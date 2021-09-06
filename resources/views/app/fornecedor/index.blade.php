<h3>Fornecedor</h3>

@php
    
@endphp

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10 )
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status:     {{ $fornecedores[0]['status']}}
<br>

@if ($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo
@else
    Fornecedor Ativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
<br>