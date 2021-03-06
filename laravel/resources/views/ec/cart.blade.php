<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/ec/header.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/ec/cart.css') }}">


	<title>カート</title>
</head>
<body>
  <header>
  @include('ec.header')
</header>
<hr>
<h2 class="text_center h2_text">カート一覧</h2>
<table class="table_box">

<tr>
    <th>アイテム一覧</th>
    <th>商品名</th>
	<th>値段</th>
	<th>個数</th>
	<th>合計</th>

  </tr>

  <tr>

  <td class="td_item"><a href=""><img src="{{asset('images/product/13bisu.jpg')}}" alt=""></a></td>
<td>{{$cart_item[12] -> iname}}</td>
  <td>{{number_format($cart_item[12] -> iprice)}}</td>
  <td>1</td>
  <td>1,000円</td>
  </tr>


  <tr>

<td class="td_item"><a href=""><img src="{{asset('images/product/14meron.jpg')}}" alt=""></a></td>
<td>{{$cart_item[13] -> iname}}</td>
<td>{{number_format($cart_item[13] -> iprice)}}</td>
<td>1</td>
<td>700円</td>
</tr>
</table>


<table>
	  <th>
		  <label >合計</label>
		  <td class="td_total">1,700円</td>
	  </th>
	  
</table>

<ul class="btn-list">
          <li class="btn-item btn-buy"><a href="{{ url('ec/item-list') }}">買い物を続ける</a></li>
          <li class="btn-item btn-buy"><a href="{{ url('ec/tyumon_info') }}">購入する</a></li>
        </ul>

</body>
<script src="http://code.jquery.com/jquery-3.0.0.js"></script>

<script>
  (function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);
</script>
</html>