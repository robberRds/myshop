<h2>Поступив новий заказ</h2>

<h3>Клієнт:</h3>
<p>
    Name: {{$user['name']}}
    <br/>
    email: {{$user['email']}}
</p>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th class="width-1">Product Name</th>
            <th class="width-2">Price</th>
            <th class="width-3">Qty</th>
            <th class="width-4">Subtotal</th>
        </tr>
        </thead>
        @foreach($cart as $item)
            <tbody>
            <tr>
                <td>
                    <div class="o-pro-dec">
                        <p>{{$item->name}}</p>
                    </div>
                </td>
                <td>
                    <div class="o-pro-price">
                        <p>${{$item->price}}</p>
                    </div>
                </td>
                <td>
                    <div class="o-pro-qty">
                        <p>{{$item->quantity}}</p>
                    </div>
                </td>
                <td>
                    <div class="o-pro-subtotal">
                        <p>{{$item->price * $item->quantity}}</p>
                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
        <tfoot>
        <tr>
            <td colspan="3">Grand Total</td>
            <td colspan="1">${{$sum}}</td>
        </tr>
        </tfoot>
    </table>
</div>
