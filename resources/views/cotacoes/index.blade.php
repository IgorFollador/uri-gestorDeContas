@extends('layouts.default')

@section('content')
    <h1>Cotação de moedas</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Código</th>
            <th>Valor</th>
            <th>Última Atualização</th>
        </thead>

        <tbody id="quotes">
        </tbody>
    </table>

@stop

@section('table-delete')
"cotacoes"
@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", async () => {
        const obj = await getCotacoes();
        console.log(obj);
            
            let element = `
            <tr>
                <td>${obj.USDBRL.name}</td>
                <td>${obj.USDBRL.code}</td>
                <td>${obj.USDBRL.high}</td>
                <td>${obj.USDBRL.create_date}</td>
            </tr>
            <tr>
                <td>${obj.EURBRL.name}</td>
                <td>${obj.EURBRL.code}</td>
                <td>${obj.EURBRL.high}</td>
                <td>${obj.EURBRL.create_date}</td>
            </tr>
            <tr>
                <td>${obj.BTCBRL.name}</td>
                <td>${obj.BTCBRL.code}</td>
                <td>${obj.BTCBRL.high}</td>
                <td>${obj.BTCBRL.create_date}</td>
            </tr>
            `
            document.getElementById("quotes").innerHTML += element;
    })

    async function getCotacoes() {
        const res = await fetch('https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL');
        let data = await res.json();
        // data = JSON.parse(data);
        // console.log(data);
        return data;
    }
</script>
@endsection

