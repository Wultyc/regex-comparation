<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>Regex Comparation</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="py-4">
    <div class="container">

        <h1>RegEx Comparation</h1>
        <h3 class="mt-5">Insert your string to query</h3>
        <form class="needs-validation" novalidate="" method="POST" action="" id="queryForm">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="query" name="query" placeholder="Your Query" value="" required=""
                        style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                </div>
                <div class="col-md-6 mb-3">
                    <select class="form-control" id="test-case" name="test-case" onchange="updTestCase(this.value)" required="">
                        <option value="" selected>Select one option</option>
                        <option value="dbSelect">Raw DB select</option>
                        <option value="dbSelectWithLimit">Raw DB select with limit 1</option>
                        <option value="phpSearch">Select all and processed by PHP</option>
                        <option value="phpSearchWithStop">Select all, processed by PHP and stopt after finding the first match</option>
                    </select>
                </div>
            </div>
            
            <button class="btn btn-primary btn-block" disabled type="submit" id="submit-btn">Search</button>
        </form>

        <hr class="mb-4">

        @if(isset($result))

        <h3>Results</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra tortor vel justo vestibulum hendrerit. Aenean nec urna erat. Ut vel turpis a nisl euismod auctor. Curabitur id nisi quam. Vestibulum vehicula auctor quam, et blandit nunc vestibulum nec. Morbi vel metus lorem. Aliquam vulputate ultricies risus, sed maximus eros malesuada vel. </p>
        
        @endif

    <!-- Optional JavaScript -->
    <script>
        function updTestCase(select){
            const form = document.getElementById('queryForm');
            const submitbtn = document.getElementById('submit-btn');

            let urlMap = new Map();

            urlMap.set("dbSelect", "{{route('web-test-dbSelect')}}");
            urlMap.set("dbSelectWithLimit", "{{route('web-test-dbSelectWithLimit')}}");
            urlMap.set("phpSearch", "{{route('web-test-phpSearch')}}");
            urlMap.set("phpSearchWithStop", "{{route('web-test-phpSearchWithStop')}}");

            console.log(urlMap.get(select));

            if(urlMap.get(select)){
                form.action = urlMap.get(select);
                submitbtn.disabled = false;
            } else {
                form.action = "";
                submitbtn.disabled = true;
            }
            
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>