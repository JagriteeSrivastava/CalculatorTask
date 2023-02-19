<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="url" id="meta_url" content="submit_calc" />
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />
    <script></script>
</head>

<body>
    <div class="main">
        <div class="display">
            <div class="display_input">
                <p id="history">
                    <i class="fa fa-history" aria-hidden="true">
                    </i>
                </p>
                <span id="result">0</span>

            </div>
        </div>
        <div class="buttons">
            <button id="clear">C</button>
            <button id="delete_single_num">
                <i class="fa fa-scissors" aria-hidden="true"></i>
            </button>
            <button id="Normal_btn" value="/">/</button>
            <button id="Normal_btn" value="*">*</button>
        </div>
        <div class="buttons">
            <button id="Normal_btn" value="7">7</button>
            <button id="Normal_btn" value="8">8</button>
            <button id="Normal_btn" value="9">9</button>
            <button id="Normal_btn" value="-">-</button>
        </div>
        <div class="buttons">
            <button id="Normal_btn" value="4">4</button>
            <button id="Normal_btn" value="5">5</button>
            <button id="Normal_btn" value="6">6</button>
            <button id="Normal_btn" value="+">+</button>
        </div>
        <div class="buttons">
            <button id="Normal_btn" value="1" onclick="display()">1</button>
            <button id="Normal_btn" value="2">2</button>
            <button id="Normal_btn" value="3">3</button>
            <button id="Normal_btn" value=".">.</button>
        </div>
        <div class="buttons">
            <button id="Normal_btn" value="0">0</button>
            <button id="Normal_btn" value="00">00</button>
            <button id="equalTo" value="=">=</button>
        </div>

    </div>

    <div class="main">
        <h4>Result</h4>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <tr>
                        <th>Sr.no</th>
                        <th>Input Data</th>
                        <th>Result</th>
                    </tr>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $d->data ?? '' }}</td>
                            <td>{{ $d->result ?? '' }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/layout.js') }}"></script>


</html>
