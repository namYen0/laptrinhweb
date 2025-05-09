@extends('header_footer')

@section('content')
<main class="login-form">
    <div class="form-List">
        <h2>Danh sách Orders</h2>

        @foreach($orders as $order)
            <h3>Mã{{ $order->id }} - Address: {{ $order->address }} - Total: {{ $order->total_amount }}</h3>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderDetails as $detail)
                        <tr>
                            <td>{{ $detail->product->name }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>{{ $detail->notes }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach

    </div>
</main>
@endsection
